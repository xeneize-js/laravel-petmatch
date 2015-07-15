<!DOCTYPE html>
<?php
$baseURL = "http://".$_SERVER["HTTP_HOST"]."/";
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pet Match</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- <link rel="shortcut icon" href=""> -->
        <link rel="stylesheet" href="/css/main-styles.css">
        <link rel="stylesheet" href="/icons/style.css">
        <link rel="stylesheet" href="/css/light-red.css">
		<link rel="stylesheet" href="/css/footer-home.css">

	
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.../../js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			#home-login .fieldset{
				float:left;
				#margin-left: 1px;
			}
		</style>

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
				<div class="bg5 background"></div>
					<div class="container">
							<div class="row">
								<p><a href="#"><img src="img/logo.png" class="img-responsive" alt="logo" width="126" height="77"></a></p>
									<nav class="main-form">
										<ul>
<ul>
											<li><a href="#"><i class="icon-twitter wow fadeInUp" data-wow-delay="2600ms" data-wow-duration="500ms"></i></a></li>
											<li><a href="#"><i class="icon-facebook wow fadeInUp"  data-wow-delay="2900ms" data-wow-duration="500ms"></i></a></li>

										</ul>
										</ul>
									</nav>
							</div>

							

							<!-- FORM MODAL -->
						<div class="col-sm-6 left-data wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="800ms">
							<h3><strong>María</strong> acaba de terminar su registro.</h3>
							<p class="text-center">
								Ahora podrá encontrar a un animalista cerca de ella quién cuidará a su mascota mientras ella toma sus vacaciones.
							</p>
							<a href="#match" class="button">Adopta un amigo</a>
							<a href="#match" class="button">Animalista</a>
						</div>




						<div class="fixed-form is-visible col-sm-6 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="800ms">


							<div class="cd-user-modal-container" style="margin-top: -150px;"> <!-- this is the container wrapper -->

								<div class="cd-switcher">
									<!-- <li><a href="#" class="is-selected selected">New account</a></li> -->




								</div>
								
								<div id="cd-signup" class="is-selected"> <!-- sign up form -->
									<div class="form-login">
										<form  class="cd-form" action='/' id='home-login' method="post" >
											<span class="form-title">Inicia sesion</span>
											<div class="form-group">

												<input name="email" class="full-width has-padding has-border" id="login-email" type="email" placeholder="E-mail" required>
											</div>
											<div class="form-group">
												<input name="password" class="full-width has-padding has-border" id="login-password" type="password"  placeholder="Contrasena" required>
											</div>
											<div class="">
												<input style="width:100%" class="submit" id="login-submit" full-width has-padding" type="submit" value="Iniciar sesion">
											</div>
											<span class="error-login"></span>
											<div>
												<br/>
												<a id="forgot-password" href="javascript:void(0)">Forgot password?</a>
											</div>
										</form>
									</div>
									<div id="forgot-password-container">
										<form class="cd-form" method="post">
											<span class="form-title">Forgot password</span>
											<div class="form-group">
												<input name="email" class="full-width has-padding has-border" id="forgot-email" type="email" placeholder="E-mail" required>
											</div>
											<div class="form-group">
												<input style="width:100%" class="submit" id="recovery-submit" full-width has-padding" type="submit" value="Recovery password">
											</div>
											<a id="cancel-forgot" href="javascript:void(0)">Cancelar</a>
										</form>
									</div>
                                    <!-- TODO CAMBIAR RUTA RELATIVA -->
									<form id="sigup-form" class="cd-form" method="post" >
										<span class="form-title">Registrate</span>
										<p class="fieldset">
											<label class="image-replace cd-username" for="signup-username">Nombre</label>
											<input name="nombre"  class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Nombre" required>
											<span class="cd-error-message">Ya message here!</span>
										</p>

										<p class="fieldset">
											<label class="image-replace cd-email" for="signup-password">Contrasena</label>
											<input name="email" class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" required>
											<span  class="cd-error-message">Error Email here!</span>
										</p>

										<p class="fieldset">
											<label class="image-replace cd-password" for="signup-password">Contrasena</label>
											<input name="password" class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Contrasena" required>

										</p>

										<p class="fieldset">
											<input class="required" name="terms" type="checkbox" id="accept-terms">
											<label for="accept-terms">Acepto los <a href="#0">Terminos</a></label>
										</p>

										<p class="fieldset">
											<input style="width:100%" class="submit" id="sigup-send" full-width has-padding" type="submit" value="Crear cuenta">
										</p>
                                        <p class="fieldset">
                                            <span id="register-event"></span>
                                        </p>
									</form>

									<!-- <a href="#0" class="cd-close-form">Close</a> -->
								</div> <!-- cd-signup -->

								<div id="cd-reset-password"> <!-- reset password form -->
									<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

									<form class="cd-form">
										<p class="fieldset">
											<label class="image-replace cd-email" for="reset-email">E-mail</label>
											<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
											<span class="cd-error-message">Error message here!</span>
										</p>

										<p class="fieldset">
											<input class="full-width has-padding" type="submit" value="Reset password">
										</p>
									</form>

									<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
								</div> <!-- cd-reset-password -->
							
							</div> <!-- cd-user-modal-container -->
						</div> <!-- cd-user-modal -->


					<!-- FORM MODAL END -->

						
						
							
					</div>
			</header>



			<article id="logos">

				<div class="container">

					<div class="row">

						<div id="owl-demo-2">

							<div class="item wow fadeInUp" data-wow-delay="0"><img src="../../img/logos/logo-1.png" alt="logos"  width="134" height="35"></div>

							<div class="item wow fadeInUp" data-wow-delay="200ms"><img src="../../img/logos/logo-2.png" alt="logos"  width="134" height="35"></div>

							<div class="item wow fadeInUp" data-wow-delay="400ms"><img src="../../img/logos/logo-3.png" alt="logos"  width="134" height="35"></div>

							<div class="item wow fadeInUp" data-wow-delay="600ms"><img src="../../img/logos/logo-4.png" alt="logos"  width="134" height="35"></div>

							<div class="item wow fadeInUp" data-wow-delay="800ms"><img src="../../img/logos/logo-5.png" alt="logos"  width="134" height="35"></div>

							<div class="item wow fadeInUp" data-wow-delay="0"><img src="../../img/logos/logo-6.png" alt="logos"  width="122" height="84"></div>

							<div class="item wow fadeInUp" data-wow-delay="0"><img src="../../img/logos/logo-7.png" alt="logos"  width="162" height="90"></div>

						</div>

					</div>

				</div>

			</article>



			<!-- /**************************** About US Section \*****************************  -->

			<article id="About" class="Section">

				<div class="container">





					<div class="container">

						<div class="row">

							<div class="col-sm-6">

								<div class="about-left">

									<div class="wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="500ms">

										<img src="../../img/gato.png" id="mock-11" alt="ipad" width="636" height="441" >


									</div>



								</div>

							</div>

							<div class="col-sm-6">

								<div class="about-right wow fadeInRight" data-wow-delay="350ms" data-wow-duration="500ms">

									<h2>Vete tranquilo...</h2>

									<p>Ahora tus vacaciones ya no será un problema. No importa el tamaño, carácter o que clase de mascota tengas, siempre habrá un animalista entusiasmado por darle cuidado y hacer que se sienta como en casa.</p>

									<div class="btns-about">

										<a href="#">¿Buscas un animalista?</a>

										<a href="#">¿Quieres ser animalista?</a>

									</div>

								</div>

							</div>

						</div>

					</div>

			</article>


			<!-- /**************************** SERVICES  Section \*****************************  -->
			<article id="About" class="Section">
				<div class="container">
					<div class="row">

						<div class="title wow fadeInDown" data-wow-delay="0">Únete a nosotros y crea <strong><a name="match"></a>historias felices</strong></div>
						<p class="wow fadeInUp paragraph" data-wow-delay="200ms">Bríndale la oportunidad de un hogar lleno de amor a un perrito o gatito. </p>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<div class="about-left">
								<div class="wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="500ms">
									<img src="img/test.jpg" id="mock-11" alt="test" width="636" height="441" >
								</div>

							</div>
						</div>
						<div class="col-sm-5">
							<a href="#0"></a>
							<div class="about-right wow fadeInRight" data-wow-delay="350ms" data-wow-duration="500ms">
								<h2>Adopta</h2>
								<p>Tu que eres buen animalista y rescatas perritos de la calle o eres parte de una Asociación o Refugio y quieres que Petmatch y +kota te ayuden, llámanos al (55) 9177-3300 ext 138, 132, 152 o escríbenos a rescate@petmatch.club o masamor@maskota.com.mx</p>
								<div class="btns-about">
									<a href="http://maskota.com.mx/mas-amor/que-es-mas-amor" target="_blank">¿Qué es +AMOR?</a>
									<a href="http://maskota.com.mx/mas-amor/quieres-adoptar-un-amigo/instrucciones/" target="_blank">Para adoptar un amigo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>



			<!-- /**************************** END About US Section \*****************************  -->

			<div class="container">

				<div class="row">

					<div class="title wow fadeInDown" data-wow-delay="0"> <strong></strong></div>
				</div>
			</div>


			<!-- /**************************** END About US Section \*****************************  -->



			<article id="parallax-1">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-3 details">
							<div class="upper-section wow flipInX" data-wow-delay="150ms" data-wow-duration="900ms">
								<h3>¿Que puedes encontrar en Petmatch?</h3>
								<p>Por fin tus problemas se acabaron! Encuentra a un animalista que le encantará hospedar a tu mascota mientras no estás.</p>
							</div>
							<div class="lower-section wow flipInX" data-wow-delay="500ms" data-wow-duration="900ms">
								<div>
									<span><i class="icon-mini-heart"></i></span>
									<h4>Ve tranquilo, dejalo como en casa</h4>
									<p>Si te vas de vacaciones o tu día se complica, no te preocupes, encuentra un animalista que hospedará cariñosamente a tu mascota. También puedes buscar quién lo cuide durante el día.</p>
								</div>
								<div>
									<span><i class="icon-mini-heart"></i></span>
									<h4>¡Conviertete en cupido!</h4>
									<p>Convertirte en abuelo es una gran responsabilidad, sabemos que llevarás bien esa tarea, regístrate y encuentra el match de tu mejor amigo.</p>
								</div>
								<div>
									<span><i class="icon-mini-heart"></i></span>
									<h4>Membresía de beneficios</h4>
									<p>Cada mes recibe exclusivas promociones y descuentos en hoteles, SPA, peluquería, ropa, restaurantes, juguetes, comida y más.</p>
								</div>
								<!-- <div>
                                        <span><i class="icon-comment"></i></span>
                                        <h4>Social Media</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content .</p>
                                </div> -->


							</div>
						</div>
					</div>
				</div>
			</article>


			<!-- /**************************** END SERVICES Section \*****************************  -->

			<!-- /**************************** FEATURES  Section \*****************************  -->



			<!-- /**************************** END FEATURES Section \*****************************  -->



			<!-- /**************************** countdown Section \*****************************  -->



			<!-- /**************************** end countdown Section \*****************************  -->

			<!-- /**************************** PORTFOLIO Section \*****************************  -->




			<!-- /**************************** masnory Section \*****************************  -->



			<!-- /**************************** PRICING Section \*****************************  -->
			<article id="pricing" class="Section">
				<div class="container">
					<div class="row">
						<div class="title wow fadeInDown" data-wow-delay="0">Nuestros <strong>Planes y Precios</strong></div>
						<p class="wow fadeInDown paragraph" data-wow-delay="200ms">Elige el plan que más se adecúe a tus necesidades.</p>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-4 wow flipInY" data-wow-duration="800ms" data-wow-delay="">
							<div class="tableprice preimeum">
								<div class="upper-table">
									<h3>Plan A</h3>
								</div>
								<div class="inner-table">
									<h4>$30<small>/mes</small></h4>
									<ul>
										<li>1 mascota o 1 animalista</li>
										<li>Tarjeta de beneficios</li>
									</ul>
								</div>
								<div class="lower-table">
									<a href="#">Unirse</a>
								</div>
							</div>
						</div>

						<div class="col-sm-4 wow flipInY" data-wow-duration="800ms" data-wow-delay="200ms">
							<div class="tableprice preimeum">
								<div class="upper-table">
									<h3>Plan B</h3>
								</div>
								<div class="inner-table">
									<h4>$50<small>/mes</small></h4>
									<ul>
										<li>2-4 mascotas</li>
										<li>Tarjeta de beneficios por mascota</li>
									</ul>
								</div>
								<div class="lower-table">
									<a href="#">Unirse</a>
								</div>
							</div>
						</div>

						<div class="col-sm-4 wow flipInY" data-wow-duration="800ms" data-wow-delay="400ms">
							<div class="tableprice preimeum">
								<div class="upper-table">
									<h3>Plan C</h3>
								</div>
								<div class="inner-table">
									<h4>$70<small>/mes</small></h4>
									<ul>
										<li>4-9 mascotas</li>
										<li>Tarjeta de beneficios por mascota</li>
									</ul>
								</div>
								<div class="lower-table">
									<a href="#">Unirse</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</article>

			<!-- /**************************** END PRICING Section \*****************************  -->
			<article id="contact" class="Section">

				<div class="container">

					<div class="row">

						<div class="title wow fadeInDown" data-wow-delay="0"><a name="contacto"></a>Queremos saber <strong>de ti</strong></div>

						<p class="wow fadeInDown paragraph" data-wow-delay="200ms">¿Tienes dudas, comentarios o algo que decirnos? Nos alegrará platicar contigo, escríbenos, muy pronto nos pondremos en contacto contigo.</p>

					</div>

					<div class="row">

						<div class="col-sm-12 col-md-12 wow flipInX" data-wow-duration="900ms" data-wow-delay="400ms">

							<form method="post" class="form-inline form-footer" role="form" id="form-footer">

								<div id="message"></div>

								<div class="form-group ">

									<div class="col-sm-4 col-md-4">

										<input type="text" class="form-control" id="name" placeholder="Nombre">

									</div>

									<div class="col-sm-4 col-md-4">

										<input type="text" class="form-control" id="email" placeholder="Correo electrónico" >

									</div>

									<div class="col-sm-4 col-md-4">

										<input type="text" class="form-control " id="telephone" placeholder="Teléfono" >

									</div>

								</div>

								<div class="col-md-12 col-sm-12">

									<textarea name="comments" cols="40" rows="10" id="comments" placeholder="Mensaje"></textarea>

								</div>

								<div class="col-md-12 col-sm-12 text-center">

									<button type="submit" id="submit" value="submit" class="btn btn-primary">Enviar</button>

								</div>

							</form>

						</div>

					</div>

				</div>

			</article>

		<section id="sub-footer" class="petmatch-footer">
			<div class="container">
				<div class="footer-logo">
					<img src="/img/footer-home/logo.png"
				</div>
				<div class="footer-menu">
					<div class="compania">
						<span class="title-menu"><b>Compania</b></span>
						<ul>
							<li><a href="#">Nosotros</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Terminos y condiciones</a></li>
							<li><a href="#">Politicas de privacidad</a></li>
							<li><a href="#">Responsabilidad</a></li>
						</ul>
					</div>
					<div class="conoce">
						<span><b>Conoce</b></span>
						<ul>
							<li><a href="#">Como funciona?</a></li>
							<li><a href="#">Animalistas</a></li>
							<li><a href="#">Adopta</a></li>
							<li><a href="">Preguntas frecuentes</a></li>
						</ul>
					</div>
				</div>
				<div class="sociales">
					<span class="siguenos">Siguenos</span>
					<ul class="logos-rs">
						<li>
							<a href=""><img src="/img/footer-home/sociales/32 x 32/facebook-64.png"></a>
						</li>
						<li>
							<a href=""><img src="/img/footer-home/sociales/32 x 32/instagram-64.png"></a>
						</li>
						<li>
							<a href=""><img src="/img/footer-home/sociales/32 x 32/twitter-64.png"></a>
						</li>
						<li>
							<a href="#"><img src="/img/footer-home/sociales/32 x 32/pinterest-64.png"></a>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</div>
		
		<!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/easing.min.js"></script>
    <script src="/js/modernizr.custom.js"></script>
    <script src="/js/jquery.fitvids.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
	<script src="/js/nivo-lightbox.js"></script>
	<script src="/js/wow.js"></script>
	<script src="/js/regform.js"></script>
	<script src="/js/isotop.js"></script>
	<script src="/js/jquery.flexslider-min.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/jquery.liquid-slider.min.js"></script>
	<script src="/js/jquery.touchSwipe.min.js"></script>
	<script src="/js/TweenMax.js"></script>
	<script src="/js/ScrollTo.js"></script>
	<script src="/js/easypiechart.js"></script><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="/js/Gmap.js"></script>
    <script src="/js/fluidvids.js"></script>
	<script src="/js/custom.js"></script>
	<script type="application/javascript" src="/js/petmatch-js/login-home.js"></script>
		<script type="application/javascript" src="/js/petmatch-js/forgot-password.js"></script>

    <!-- JS NUEVO -->
        <script type="application/javascript" src='http://jqueryvalidation.org/files/dist/jquery.validate.js'></script>
        <script type="application/javascript" src="/js/register.js"></script>
    <!-- Nuevo JS -->
	</body>
</html>

