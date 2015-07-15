<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Mi panel de control</title>



	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- <link rel="shortcut icon" href=""> -->

	<link rel="stylesheet" href="../../css/main-styles.css">

	<link rel="stylesheet" href="../../icons/style.css">





	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

	<script src="https://oss.maxcdn.com/libs/respond.../../js/1.4.2/respond.min.js"></script>

	<![endif]-->

</head>

<body>



<!-- LOADING BEGIN -->



<div id="loader-wrapper">

	<div class="spinner">

		<div class="bounce1"></div>

		<div class="bounce2"></div>

		<div class="bounce3"></div>

	</div>

</div>





<div id="page-wrapper">

	<header id="home">

		<div class="bg2 background"></div>

		<div class="container">

			<div class="row">

				<p><a href="#"><img src="../../img/logo.png" class="img-responsive" alt="logo" width="126" height="77"></a></p>

				<nav class="main-form">

					<ul>

						<li><a href="/user/logout" class="cd-signin active">Salir</a></li>

					</ul>

				</nav>

			</div>







			<!-- FORM MODAL -->


			<!-- cd-signup -->





			<!-- FORM MODAL END -->



			<div id="content" class="top-margin main-home">

				<div class="row">

					<p class="main-title">

						¡Nos alegra verte<br>
						<strong> <?php echo $user["nombre"];?></strong>

					</p>
					<p>Te estabamos esperando!</p><br>

				</div>



				<div class="signup-wrapper">

					<div class="row">




						<div><a href="/user/user-profile/<?php echo $user["uuid"];?>" class="round dark-text">Mi perfil</a></div>

						<br>

						<div><a href="#mascotas" class="round dark-text">Mis mascotas</a></div>

						<?php if(!$is_animalista):?>
						<div><br /><a href="/user/animalista" class="round dark-text">Registrate como animalista</a></div>
						<?php endif;?>
st
					</div>





				</div>

			</div>



			<div id="break-1"></div>

			<div class="row">

				<div id="social">

					<nav>

						<ul>



						</ul>

					</nav>

				</div>

			</div>

		</div>

</div>

</header>

<article id="services" class="Section">
	<div class="container">
		<div class="row">
			<div class="title wow fadeInDown" data-wow-delay="0">Mi lista de <strong>mascotas </strong><a name="mascotas"></a>
				<br> <a href="/user/profile#mascota"><img src="/img/botonmas.jpg" width="97" height="91"></a>
			</div>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php if(!empty($mascotas)):?>
				<?php foreach($mascotas as $key => $mascota):?>
					<a href="/pet/mascota-profile/<?php echo $user["uuid"]."/".$mascota["uuid"];?>">
						<div class="col-sm-4 wow flipInX" data-wow-delay="0" data-wow-duration="950ms">
							<div class="flip-3D">
								<div class="front">
									<div class="data-content">
										<span><i class="icon-website"></i></span>
										<h3><?php echo $mascota["nombre"];?></h3>
									</div>
								</div>
								<div class="back">
									<div class="data-back">
										<span><i class="icon-website"></i></span>
										<h3><?php echo $mascota["raza"];?></h3>
										<p>
											<?php echo substr($mascota["description"],0,200)."...";?>
										</p>
									</div>
								</div>
							</div>
						</div></a>
						<a class="delete" href="javascript:void(0)" id="<?php echo $mascota["uuid"];?>"><img width="64" height="64" src="/img/borrar-icono.png" /></a>
				<?php endforeach;?>
			<?php else:?>
				<h1>Aun no tienes mascotas agregadas</h1>
			<?php endif;?>


		</div>
	</div>
</article>


<script src="../../js/jquery-1.10.2.min.js"></script>

<script src="../../js/easing.min.js"></script>

<script src="../../js/modernizr.custom.js"></script>

<script src="../../js/jquery.fitvids.js"></script>

<script src="../../js/owl.carousel.min.js"></script>

<script src="../../js/bootstrap.min.js"></script>

<script src="../../js/nivo-lightbox.js"></script>

<script src="../../js/wow.js"></script>

<script src="../../js/regform.js"></script>

<script src="../../js/isotop.js"></script>

<script src="../../js/jquery.flexslider-min.js"></script>

<script src="../../js/plugins.js"></script>

<script src="../../js/jquery.liquid-slider.min.js"></script>

<script src="../../js/jquery.touchSwipe.min.js"></script>

<script src="../../js/TweenMax.js"></script>

<script src="../../js/ScrollTo.js"></script>

<script src="../../js/easypiechart.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript" src="../../js/Gmap.js"></script>

<script src="../../js/fluidvids.js"></script>

<script src="../../js/custom.js"></script>
<script src="/js/petmatch-js/pet-delete.js"></script>
</body>

</html>
