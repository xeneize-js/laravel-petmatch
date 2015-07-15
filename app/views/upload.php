<!doctype html>
<?php
    $baseURL = "http://".$_SERVER["HTTP_HOST"]."/";
?>
<html class="full-height"><head>
  <title>Sube una foto nueva</title>
  <meta name="keywords" content="HTML5 Template">
  <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
  <meta name="author" content="itembridge.com">
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- Font -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>

  <!-- Plagins CSS -->
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/buttons/buttons.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/buttons/social-icons.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/jslider.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/settings.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/jquery.fancybox.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/animate.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/video-js.min.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/morris.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/royalslider/royalslider.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/royalslider/skins/minimal-white/rs-minimal-white.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/layerslider/layerslider.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/ladda.min.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/datepicker.css">
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/jquery.scrollbar.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/style.css">

  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/responsive.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo $baseURL;?>css/customizer/pages.css">

  <!-- IE Styles-->
  <link rel='stylesheet' href="<?php echo $baseURL;?>css/ie/ie.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<link rel='stylesheet' href="<?php echo $baseURL;?>css/ie/ie8.css">
  <![endif]-->
</head>
<body class="page-login-promo blur-page" data-blur-image="img/content/dog.jpg" data-blur-amount="1">

<div class="page-box">

<header class="header header-three" style="display: none">
  <div class="header-wrapper">
	<div class="container">
	  <div class="row">
		<div class="logo-box col-sm-12 col-md-12">
		  <div class="logo">
			<a href="index.html">
			  <img src="img/logo.png" class="logo-img" alt="">
			</a>
		  </div>
		</div>
	  </div><!--.row -->
	</div>
  </div><!-- .header-wrapper -->
</header><!-- .header -->

<section id="main" style="background-image: url('/img/header-8.jpg');">
  <div class="container login-register">
    <div class="row">
      <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<div data-appear-animation="bounceInDown">
		  <div class="rotation">
			<div class="front-end">
			  <div class="form-content">
				<form enctype="multipart/form-data" form-box login-form form-validator" method="post" action="<?php echo $baseURL;?>user/upload-picture">
				  <h3 style="color:#ffffff" class="title">Sube una foto nueva </h3>
				  <div class="form-group">
					  <input hidden value="<?php echo $uuid;?>" name="uuid">
				  </div>
				  <div class="form-group">
					<label style="color:#ffffff;" >Selecciona tu foto <span class="required">*</span></label>
					  <input name="foto" required type="file">
				  </div>
				  <div class="form-group">
                      <?php if(isset($_GET["profile"])):?>
                          <input hidden value="1" name="profile">
                      <?php endif;?>
					  <input type="submit" value="Subir!">
				  </div>

				</form><!-- .form-box -->
			  </div>
			</div><!-- .front-end -->
		  </div>
		</div>
      </div>
    </div>
  </div><!-- .container -->
</section><!-- #main -->

</div><!-- .page-box -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo $baseURL;?>js/bootstrap.min.js"></script>
<script src="<?php echo $baseURL;?>js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="<?php echo $baseURL;?>js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="<?php echo $baseURL;?>js/price-regulator/tmpl.js"></script>
<script src="<?php echo $baseURL;?>js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="<?php echo $baseURL;?>js/price-regulator/draggable-0.1.js"></script>
<script src="<?php echo $baseURL;?>js/price-regulator/jquery.slider.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.touchSwipe.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.imagesloaded.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.appear.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.sparkline.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.easypiechart.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo $baseURL;?>js/isotope.pkgd.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.knob.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.stellar.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.selectBox.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.royalslider.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.tubular.1.0.js"></script>
<script src="<?php echo $baseURL;?>js/SmoothScroll.js"></script>
<script src="<?php echo $baseURL;?>js/country.js"></script>
<script src="<?php echo $baseURL;?>js/spin.min.js"></script>
<script src="<?php echo $baseURL;?>js/ladda.min.js"></script>
<script src="<?php echo $baseURL;?>js/masonry.pkgd.min.js"></script>
<script src="<?php echo $baseURL;?>js/morris.min.js"></script>
<script src="<?php echo $baseURL;?>js/raphael.min.js"></script>
<script src="<?php echo $baseURL;?>js/video.js"></script>
<script src="<?php echo $baseURL;?>js/pixastic.custom.js"></script>
<script src="<?php echo $baseURL;?>js/livicons-1.3.min.js"></script>
<script src="<?php echo $baseURL;?>js/layerslider/greensock.js"></script>
<script src="<?php echo $baseURL;?>js/layerslider/layerslider.transitions.js"></script>
<script src="<?php echo $baseURL;?>js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
<script src="<?php echo $baseURL;?>js/revolution/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo $baseURL;?>js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo $baseURL;?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo $baseURL;?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo $baseURL;?>js/jplayer/jquery.jplayer.min.js"></script>
<script src="<?php echo $baseURL;?>js/jplayer/jplayer.playlist.min.js"></script>
<script src="<?php echo $baseURL;?>js/jquery.scrollbar.min.js"></script>
<script src="<?php echo $baseURL;?>js/main.js"></script>
<script type="application/javascript" src="/js/petmatch-js/login-home.js"></script>

</body>
</html>