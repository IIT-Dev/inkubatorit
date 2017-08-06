<div class="heading">
  <div class="container">
    <div class="row">
      <h1 class="title">
        Artikel
      </h1>
      <div class="meta">
      	Stay hungry. Stay foolish - Steve Jobs
      </div>
    </div>
  </div>
</div>


<div class="container">

	<div id="kategori-artikel">
	 	<a href="<?php echo base_url('article'); ?>"><span class="label label-<?php if ($kategori == 'all') echo 'info'; else echo 'default'; ?>">All</span></a>
		<a href="<?php echo base_url('article/category'); ?>/Web"><span class="label label-<?php if ($kategori == 'Web') echo 'info'; else echo 'default'; ?>">Web</span></a>
		<a href="<?php echo base_url('article/category'); ?>/Mobile"><span class="label label-<?php if ($kategori == 'Mobile') echo 'info'; else echo 'default'; ?>">Mobile</span></a>
		<a href="<?php echo base_url('article/category'); ?>/Game"><span class="label label-<?php if ($kategori == 'Game') echo 'info'; else echo 'default'; ?>">Game</span></a>
		<a href="<?php echo base_url('article/category'); ?>/Cyber"><span class="label label-<?php if ($kategori == 'Cyber') echo 'info'; else echo 'default'; ?>">Cyber</span></a>
		<a href="<?php echo base_url('article/category'); ?>/Event"><span class="label label-<?php if ($kategori == 'Event') echo 'info'; else echo 'default'; ?>">Event</span></a>
		<a href="<?php echo base_url('article/category'); ?>/Appreciation"><span class="label label-<?php if ($kategori == 'Appreciation') echo 'info'; else echo 'default'; ?>">Appreciation</span></a>
	</div>
	<hr>

	<div class="row post-list">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
		<?php
		if ($artikel->num_rows() > 0){ 
			foreach ($artikel->result() as $post)
			{
		 ?>
		 	<div class="col-md-4">
	      <section class="box special">
	        <span class="image featured"><a href="<?php echo site_url('article/post/'.$post->id) ?>"><img src="<?php if ($post->image == "") echo base_url('img/article_empty.png'); else echo $post->image; ?>" alt=""></a></span>
	        <h3><?php if (strlen($post->title) <= 25) echo $post->title; else echo substr($post->title,0,20)."..."; ?></h3>
	        <p><?php echo substr(strip_tags($post->content),0,200)."..."; ?></p>
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
	<div class="row" id="nav-post">
		<div class="col-xs-6" align="left">
			<?php 
			if ($kategori == 'all'){
				if ($new_exist){ 
			?>
			<a href="<?php echo base_url('article/page')."/".($page-1); ?>"><span class="glyphicon glyphicon-arrow-left"></span> <strong>Newer Post</strong></a>
			<?php }}else{ if ($new_exist){ ?>
			<a href="<?php echo base_url('article/category')."/".$kategori."/".($page-1); ?>"><span class="glyphicon glyphicon-arrow-left"></span> <strong>Newer Post</strong></a>
			<?php }} ?>
		</div>
		<div class="col-xs-6" align="right">
			<?php 
			if ($kategori == 'all'){
				if ($old_exist){ 
			?>
			<a href="<?php echo base_url('article/page')."/".($page+1); ?>"><strong>Older Post</strong> <span class="glyphicon glyphicon-arrow-right"></span></a>
			<?php }}else{ if ($old_exist){ ?>
			<a href="<?php echo base_url('article/category')."/".$kategori."/".($page+1); ?>"><strong>Older Post</strong> <span class="glyphicon glyphicon-arrow-right"></span></a>
			<?php }} ?>
		</div>
	</div>

</div>