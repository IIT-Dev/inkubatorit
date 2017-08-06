<?php 
    $home_link = base_url();
    $portofolio_link = base_url('portfolio');
    $article_link = base_url('article');
    $about_link = base_url('about');
    $cyber_link = base_url('community/cyber');
    $game_link = base_url('community/game');
    $mobile_link = base_url('community/mobile');
    $web_link = base_url('community/web');
    if ($incl == "home"){
        $img_header = "whatsnew.png";
        $header_link = $home_link;
        $head_title = "Inkubator IT";
    }else if ($incl == "portfolio"){
        $img_header = "portfolio.png";
        $header_link = $portofolio_link;
        $head_title = "Inkubator IT | Portfolio";
    }else if (($incl == "article")||($incl=="post")||($incl=="post_portfolio")){
        $img_header = "articles.png";
        $header_link = $article_link;
        if ($incl == "article"){
            $head_title = "Inkubator IT | Articles";
        }else{
            $head_title = "Inkubator IT | ".$post->title;
        }
    }else if ($incl == "about"){
        $img_header = "aboutus.png";
        $header_link = $about_link;
        $head_title = "Inkubator IT | About Us";
    }else if ($incl == "cyber"){
        $img_header = "cyber_header.png";
        $header_link = $cyber_link;
        $head_title = "Inkubator IT | Komunitas Cyber";
    }else if ($incl == "game"){
        $img_header = "game_header.png";
        $header_link = $game_link;
        $head_title = "Inkubator IT | Komunitas Game";
    }else if ($incl == "mobile"){
        $img_header = "mobile_header.png";
        $header_link = $mobile_link;
        $head_title = "Inkubator IT | Komunitas Mobile";
    }else if ($incl == "web"){
        $img_header = "web_header.png";
        $header_link = $web_link;
        $head_title = "Inkubator IT | Komunitas Web";
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="genrasi optimis">
    
    <link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/iit.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url() ?>/css/jquery.bxslider.css" rel="stylesheet"> -->
    <link href="<?php echo base_url() ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/font-awesome.min.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>/img/favicon.png">
  
    <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url() ?>/js/list.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url() ?>/js/imgLiquid-min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.bxslider.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url() ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/js/scripts.js"></script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsed"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
             <a class="navbar-brand" href="<?php echo site_url('/') ?>"><div class="logo"></div></a>
        </div>
        
        <div class="collapse navbar-collapse" id="collapsed">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo site_url('/') ?>">
                        <div class="logo-home"></div> Home
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="logo-portfolio"></div> Portfolio
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo site_url('portfolio/category/all/any') ?>">Semua</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('portfolio/category/Web/any') ?>">Web</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('portfolio/category/Game/any') ?>">Game</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('portfolio/category/Mobile/any') ?>">Mobile</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('portfolio/category/CP/any') ?>">Competitive Programming</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('portfolio/category/Cyber/any') ?>">Cyber</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('article') ?>">
                        <div class="logo-artikel"></div> Artikel
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('about') ?>">
                        <div class="logo-tentang"></div> Tentang Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content-wrap">
    <?php $this->load->view($incl); ?>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Komunitas</h3>
                <div>
                    <a href="<?php echo site_url('portfolio/category/Web/any') ?>">Web</a> • <a href="<?php echo site_url('portfolio/category/Game/any') ?>">Game</a> • <a href="<?php echo site_url('portfolio/category/Mobile/any') ?>">Mobile</a> • <a href="<?php echo site_url('portfolio/category/CP/any') ?>">CP</a> • <a href="<?php echo site_url('portfolio/category/Cyber/any') ?>">Cyber</a>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Departemen</h3>
                <div>
                    <a href="<?php echo site_url('about') ?>">Tentang Kami</a> • <a href="<?php echo site_url('article') ?>">Artikel</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <div class="logo-hmif"></div>
                <div class="logo"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".image.featured").imgLiquid();
        $(".image.preview").imgLiquid({fill:false});
    });
</script>
</body>
</html>