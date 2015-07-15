<!doctype html>
<?php
    $baseURL = "http://".$_SERVER["HTTP_HOST"]."/";
?>
<html class="full-height"><head>
  <title>Completa tu perfil</title>
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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
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

<header class="header header-three">
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

<section id="main">
  <div class="container login-register">
    <div class="row">
      <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<div data-appear-animation="bounceInDown">
		  <div class="rotation">
			<div class="front-end">
			  <div class="form-content">
				<form class="form-box login-form form-validator" method="post" action="<?php echo $baseURL;?>user/animalista" enctype="multipart/form-data">
				    <h3 class="title">Completa tu perfil como animalista</h3>
                    <span>Ayuda y gana al mismo tiempo</span>

                    <p><a href="/user/logout">Salir</a></p>
                    <span>Que servicios ofreces?</span>
                    <div class="form-group">
                        <label>Hospedaje para mascotas <p>Costo por noche</p></label>
                        <input type="text" required name="costo_noche" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Cuidado durante el dia <p>Costo por 8 hrs</p></label>
                        <input type="text" required name="costo_ocho_hrs" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paseos <p>Costo por 30 minutos</p></label>
                        <input type="text" required name="paseos_30_min" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Buenos modales <p>Costo por entrenamiento</p></label>
                        <input type="text" required name="session_entrenamiento" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Escribe un titulo para tu perfil</label>
                        <input  required type="text" required name="titulo_perfil" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Acerca de ti <p>Explica por que eres la mejor opcion. Entre mas detallada sera mejor</p></label>
                        <textarea  required class="form-control" name="acerca_de_ti"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Donde vives</label>
                        <select class="form-control" name="vivienda" required>
                            <option value="">Selecciona una opcion</option>
                            <option value="casa">Casa</option>
                            <option value="departamento">Departamento</option>
                            <option value="rancho">Rancho</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cual es el tamano de tu vivienda</label>
                        <select class="form-control" name="tamano_vivienda" required>
                            <option value="">Selecciona una opcion</option>
                            <option value="pequeno">Pequeno</option>
                            <option value="mediano">Mediano</option>
                            <option value="grande">Grande</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Donde se hospedan las mascotas invitadas</label>
                        <select class="form-control" name="hospedaje_mascotas" required>
                            <option value="">Selecciona una opcion</option>
                            <option value="Dentro de casa">Dentro de casa</option>
                            <option value="Fuerade casa">Fuera de casa</option>
                            <option value="Ambos lugaeres">Ambos lugares</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Estas disponible para supervisar las 24 Hrs.</label>
                        <select class="form-control" name="disponible_24_hrs" required>
                            <option value="">Seleccihona una opcion</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Que clase de mascota prefieres cuidar</label>
                        <select class="form-control" name="clase_mascota_preferida[]" multiple required>
                            <option value="">Seleccihona una opcion</option>
                            <option>Perro</option>
                            <option>Gato</option>
                            <option>Reptil</option>
                            <option>Ave</option>
                            <option>Caballo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cual es el tamano de mascota que prefieres cuidar</label>
                        <select class="form-control" name="tamano_mascota_preferida" required>
                            <option value="">Seleccihona una opcion</option>
                            <option value="Miniatura">Miniatura</option>
                            <option value="Pequeno">Pequeno</option>
                            <option value="Grande">Grande</option>
                            <option value="Gigante">Gigante</option>
                            <option value="Todas">Todas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Que edad prefieres cuidar</label>
                        <select required class="form-control" name="edad_preferida">
                            <option value="">Seleccihona una opcion</option>
                            <option value="Cachorro">Cachorro</option>
                            <option value="Adulto">Adulto</option>
                            <option value="Mayor">Mayor</option>
                            <option value="Todas">Todas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Con que caracter te llevas mejor</label>
                        <select required class="form-control" name="caracter_preferido">
                            <option value="">Seleccihona una opcion</option>
                            <option value="Travieso">Travieso</option>
                            <option value="Tranquilo">Tranquilo</option>
                            <option value="Nervioso">Nervioso</option>
                            <option value="Todos">Tods</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tiene mascota.</label>
                        <select  required class="form-control" name="tiene_mascota">
                            <option value="">Seleccihona una opcion</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto de perfil</label>
                        <input required type="file" name="foto" value="Buscar">
                    </div>
                    <input type="submit" value="Guardar">
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
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="<?php echo $baseURL;?>js/main.js"></script>
<script src="<?php echo $baseURL;?>js/edit-profile.js"></script>

</body>
</html>