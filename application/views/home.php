<div class="heading">
  <div class="container">
    <div class="row">
      <h1 class="top">
        <div>
          <i class="fa fa-rocket"></i>
        </div>
      </h1>
      <h1>
        Sebuah Departemen<br>
        Solusi IT Anda
      </h1>
    </div>
  </div>
</div>

<div class="light-overlay">
  <div class="container">
    <h3>Inkubator IT merupakan keprofesian yang terbuka bagi seluruh massa HMIF dan <br>
    dijalankan berdasarkan keinginan yang sesuai dengan keinginan massa HMIF</h3>
  </div>
</div>

<div class="container">
  <div class="content">
    <div class="row">
      <a href="<?php echo site_url('portfolio') ?>"><h1 class="light">Portfolio</h1></a>
    </div>
    <div class="row">
      <div class="owl-carousel">

      <?php 
        $i = 0;
        foreach ($port->result() as $post) {
      ?>
      <?php if ($i % 3 == 0): ?>
          
            <div class="col-md-12">
      <?php endif; ?>

        <div class="col-md-4 column">
          <section class="box special port">
            <span class="image featured"><a href="<?php echo site_url('portfolio/post/'.$post->id) ?>"><img src="<?php if ($post->image == "") echo base_url('img/portfolio_empty.png'); else echo $post->image; ?>" alt=""></a></span>
            <h3><?php if (strlen($post->title) <= 25) echo $post->title; else echo substr($post->title,0,13)."..."; ?></h3>
            <?php $desc = substr(strip_tags($post->deskripsi),0,200)."..."; ?>
            <?php $desc = str_replace('Description', '', $desc); ?>
            <?php $desc = str_replace('Deskripsi', '', $desc); ?>
            <p><?php echo $desc; ?></p>
          </section>
        </div>

      <?php $i++; ?>

      <?php if ($i % 3 == 0): ?>
          </div>
        
      <?php endif; ?>

      <?php } ?>

      </div>
    </div>

    <div class="row">
      <a href="<?php echo site_url('article') ?>"><h1 class="light">Artikel</h1></a>
    </div>
    <div class="row">
      <div class="owl-carousel">
      <?php 
        $i = 0;
        foreach ($artikel->result() as $post) {
      ?>
      <?php if ($i % 3 == 0): ?>
            <div class="col-md-12">
      <?php endif; ?>

      <div class="col-md-4">
        <section class="box special">
          <span class="image featured"><a href="<?php echo site_url('article/post/'.$post->id) ?>"><img src="<?php if ($post->image == "") echo base_url('img/article_empty.png'); else echo $post->image; ?>" alt=""></a></span>
          <h3><?php if (strlen($post->title) <= 25) echo $post->title; else echo substr($post->title,0,20)."..."; ?></h3>
          <p><?php echo substr(strip_tags($post->content),0,200)."..."; ?></p>
        </section>
      </div>

      <?php $i++; ?>

      <?php if ($i % 3 == 0): ?>
          </div>
      <?php endif; ?>

      <?php } ?>
      </div>
    </div>
  </div>
</div>

<!--  -->

<div class="container">
  <div class="row">
    <h1 class="light">Komunitas</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-4">
          <section class="box"> 
            <span class="image featured"><a href="#"><img src="img/Ccp.jpg" alt=""></a></span>
            <h3 class="featurette-heading info-text">Komunitas <span class="text-success">Competitive Programming</span></h3>
            <p class="collapse2">
              Komunitas baru di Inkubator IT. Anggota-anggotanya dikenal sebagai individu yang handal dalam masalah menyelesaikan programming problem.
            </p>
          </section>
        </div><!-- /.span4 -->

        <div class="col-md-4">
          <section class="box"> 
            <span class="image featured"><a href="#"><img src="img/Ccyber.jpg" alt=""></a></span>
            <h3 class="featurette-heading">Komunitas <span class="text-warning">Cyber</span></h3>
            <p class="collapse2">
              Komunitas terbaru di Inkubator IT. Anggota-anggotanya dikenal sebagai individu yang handal dalam masalah peretasan software maupun website. Kemampuan mereka tentu digunakan untuk hal yang membangun di Inkubator IT ini demi menjaga keamanan suatu karya kami dari peretas eksternal.
            </p>
          </section>
        </div><!-- /.span4 -->

        <div class="col-md-4">
          <section class="box"> 
            <span class="image featured"><a href="#"><img src="img/Cgame.jpg" alt=""></a></span>
            <h3 class="featurette-heading">Komunitas <span class="text-muted">Game</span></h3>
            <p class="collapse2">
              Komunitas Game adalah komunitas di Inkubator IT yang anggota-anggotanya sangat antusias akan segala aspek yang terdapat dalam game, seperti gameplay, plot cerita, grafis, karakter dan lain sebagainya. Para anggotanya memiliki skill yang mumpuni dalam pengaplikasian Object Oriented Programming.
            </p>
          </section>
        </div><!-- /.span4 -->

        <div class="col-md-4">
          <section class="box"> 
            <span class="image featured"><a href="#"><img src="img/Cmob.jpg" alt=""></a></span>
            <h3 class="featurette-heading info-text">Komunitas <span class="text-info">Mobile</span></h3>
            <p class="collapse2">
              Komunitas mobile adalah komunitas dalam Inkubator IT beranggotakan pengembang perangkat lunak yang memiliki minat dalam pengembangan aplikasi mobile. Kami memiliki ketertarikan dalam mengembangkan aplikasi pada smartphone seperti iPhone, Android, BlackBerry dan Windows Phone 7, pada tablet seperti iPad, Tablet Android dan Playbook, serta pada featured phone seperti Symbian. Aplikasi yang dikembangkan sendiri sering dibagi menjadi tiga yaitu game, aplikasi sederhana dan sistem.
            </p>
          </section>
        </div><!-- /.span4 -->

        <div class="col-md-4">
          <section class="box"> 
            <span class="image featured"><a href="#"><img src="img/Cweb.jpg" alt=""></a></span>
            <h3 class="featurette-heading">Komunitas <span class="text-danger">Web</span></h3>
            <p class="collapse2">
              Komunitas web adalah salah satu dari sekian banyak komunitas yang berada dibawah naungan IIT. Komunitas web adalah tempat dimana mahasiswa informatika dan sistem teknologi informasi ITB berkumpul untuk saling berbagi ilmu dan informasi terbaru tentang dunia web. Pada komunitas ini para anggotanya akan dituntun untuk dapat menjadi seorang desainer web seutuhnya. Selain berbagi ilmu dan informasi tentang dunia web, komunitas ini juga sering mendapatkan proyek yang berhubungan dengan dunia web. Proyek ini membantu para anggota komunitas untuk mengaplikasikan ilmu tentang pemrograman web serta sebagai ajang aktualisasi diri para anggota komunitas web.
            </p>
            </section>
        </div><!-- /.span4 -->
      </div>
    </div>
  </div><!-- /.row -->
</div>

<div class="light-overlay no-bottom">
  <div class="container">
    <i class="fa fa-twitter fa-2x light"></i>
    <h3>Inkubator IT merupakan keprofesian yang terbuka bagi seluruh massa HMIF dan <br>
    dijalankan berdasarkan keinginan yang sesuai dengan keinginan massa HMIF</h3>
  </div>
</div>

<script>
  $(document).ready(function() {
    // $('.bxslider').bxSlider({
    //   pager: false,
    //   captions: false
    // });
    $(".owl-carousel").owlCarousel({
      items: 1,
      nav: false,
      loop: true,
    });
  });
</script>