<div class="heading">

  <div class="container">

    <div class="row">

      <h1 class="title">

        Portfolio

      </h1>

      <div class="meta">

      	Some people want it to happen, some wish it would happen, others make it happen - Michael Jordan

      </div>

    </div>

  </div>

</div>



<div class="container">

	<div class="row">

		<div class="col-sm-12" align="center">

			<div align="center" id="komunitas-port">

				<a href="<?php echo base_url('portfolio/category')."/all/".$tahun ?>"><span class="label label-<?php if ($kategori == 'all') echo 'info'; else echo 'default' ?>">All</span></a>

				<a href="<?php echo base_url('portfolio/category')."/Web/".$tahun ?>"><span class="label label-<?php if ($kategori == 'Web') echo 'info'; else echo 'default' ?>">Web</span></a>

				<a href="<?php echo base_url('portfolio/category')."/Mobile/".$tahun ?>"><span class="label label-<?php if ($kategori == 'Mobile') echo 'info'; else echo 'default' ?>">Mobile</span></a>

				<a href="<?php echo base_url('portfolio/category')."/Game/".$tahun ?>"><span class="label label-<?php if ($kategori == 'Game') echo 'info'; else echo 'default' ?>">Game</span></a>

				<a href="<?php echo base_url('portfolio/category')."/Cyber/".$tahun ?>"><span class="label label-<?php if ($kategori == 'Cyber') echo 'info'; else echo 'default' ?>">Cyber</span></a>

			</div>

			<div class="row" align="center" id="tahun-port">

				<div class="col-xs-12">

					<a href="<?php echo base_url('portfolio/category')."/".$kategori."/any"; ?>"><span class="label label-<?php if ($tahun == 'any') echo 'info'; else echo 'default'; ?>" style="margin-right:6px;"> All </span></a> 

					<?php for ($thn=date('Y');$thn>=2005;$thn--){ 

						$this->load->model('portofolio_model');

						if ($this->portofolio_model->year_exist($thn)){

					?>

					<a href="<?php echo base_url('portfolio/category')."/".$kategori."/".$thn; ?>"><span class="label label-<?php if ($tahun == $thn) echo 'info'; else echo 'default'; ?>"><?php echo $thn; ?></span></a>

				<?php }} ?>

				</div>

			</div>

			<hr>



			<div id="portfolio-box">

				<div class="row">

					<div class="col-md-10 col-md-offset-1">

						<div class="row">

			<?php

			if ($port->num_rows() > 0){ 

				foreach ($port->result() as $post)

				{

			 ?>

					<div class="col-md-4">

		        <section class="box special port">

		          <span class="image featured"><a href="<?php echo site_url('portfolio/post/'.$post->id) ?>"><img src="<?php if ($post->image == "") echo base_url('img/portfolio_empty.png'); else echo base_url().'/'.$post->image; ?>" alt=""></a></span>

		          <h3><?php if (strlen($post->title) <= 25) echo $post->title; else echo substr($post->title,0,13)."..."; ?></h3>

		          
				  	<?php $desc = substr(strip_tags($post->deskripsi),0,200)."..."; ?>
		            <?php $desc = str_replace('Description', '', $desc); ?>
		            <?php $desc = str_replace('Deskripsi', '', $desc); ?>

		          <p><?php echo $desc; ?></p>

		        </section>

		      </div>

			<?php }}else{ ?>

				<section class="box">

					<h3><em>Maaf, tidak ada hasil yang ditemukan</em></h3>

				</section>

			<?php } ?>

						</div>

					</div>

				</div>

				<div class="row">

					<?php 

					if (($kategori=='all')&&($tahun=='any')){

						if ($new_exist){ 

					?>

					<a href="<?php echo base_url('portfolio/page')."/".($page-1); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-chevron-left"></span></a>

					<?php }

					}else{

						if ($new_exist){ 

					 ?>

					<a href="<?php echo base_url('portfolio/category')."/".$kategori."/".$tahun."/".($page-1); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-chevron-left"></span></a> 

					<?php }} ?>

					<!--  -->

					<?php 

					if (($kategori=='all')&&($tahun=='any')){

						if ($old_exist){ 

					?>

					<a href="<?php echo base_url('portfolio/page')."/".($page+1); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-chevron-right"></span></a>

					<?php }

					}else{

						if ($old_exist){ 

					 ?>

					<a href="<?php echo base_url('portfolio/category')."/".$kategori."/".$tahun."/".($page+1); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-chevron-right"></span></a> 

					<?php }} ?>

				</div>

			</div>

		</div>

	</div>

	<div class="modal fade" id="port-single" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	  <div class="modal-dialog">

	    <div class="modal-content" id="port-box">

	      

	    </div><!-- /.modal-content -->

	  </div><!-- /.modal-dialog -->

	</div><!-- /.modal -->

	<script type="text/javascript">

		function get_port(id)

		{

			var url = "<?php echo base_url('ajax/get_port'); ?>/" + id;

			$('#port-box').load(url);

			$('#port-single').modal('show');

		}

	</script>

</div>