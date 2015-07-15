<?php //print_r($messages);die;
$image_profile = array();

if(empty($images)){
$image_profile[]["path"] = "http://sharedseeker.com/file/profile_image/default_profile.jpg";
}
$ready = "";
foreach($images as $key => $image){
if($image["profile"] && $ready == ""){
$image_profile[] = array("path" => "/".$image["image"]);
$ready = "ready";
}
}
//print_r($image_profile);die;
if(empty($image_profile)){
$image_profile[]["path"] = "http://sharedseeker.com/file/profile_image/default_profile.jpg";
}?>
<!DOCTYPE HTML>

<!-- BEGIN html -->
<html lang = "en">
	<!-- BEGIN head -->
	<head>
		<title><?php echo $user[0]["nombre"];?> | Petmatch</title>

		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/datepicker.css">
		<link rel="stylesheet" href="/css/jquery-ui.css">

		<link type="text/css" rel="stylesheet" href="/css/reset.css" />
		<link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/animate.css" />
		<link type="text/css" rel="stylesheet" href="/css/main-stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="/css/lightbox.css" />
		<link type="text/css" rel="stylesheet" href="/css/shortcodes.css" />
		<link type="text/css" rel="stylesheet" href="css/custom-fonts.css" />
		<link type="text/css" rel="stylesheet" href="/css/custom-colors.css" />
		<link type="text/css" rel="stylesheet" href="/css/responsive.css" />
		<link type="text/css" rel="stylesheet" href="/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="/css/owl.theme.css" />
		<link type="text/css" rel="stylesheet" href="/css/dat-menu.css" />
		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="/css/ie-ancient.css" />
		<![endif]-->

		<!-- Demo Only -->
		<link type="text/css" rel="stylesheet" href="/css/demo-settings.css" />
		<link type="text/css" rel="stylesheet" href="/css/profile.css" />

	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<body id="<?php echo $user[0]["uuid"];?>">

		<a href="#dat-menu" class="ot-menu-toggle"><i class="fa fa-bars"></i>Toggle Menu</a>
		<!-- BEGIN .boxed -->
		<div class="boxed active">
			
			<!-- BEGIN .header -->
			<header class="header willfix">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<div class="header-left">
						<div class="header-logo">
							<a href="index.html" class="otanimation" data-anim-object=".header-logo a.otanimation img, .header-logo a.otanimation h1" data-anim-in="flipOutX" data-anim-out="bounceIn"><img src="images/logo.png" alt="" /></a>
							<strong data-anim-in="fadeOutUpBig" data-anim-out="bounceIn"><i class="fa fa-home"></i> Bienvenido</strong>
						</div>
						
					</div>

					<div class="header-right">
						<nav class="main-menu">
							<ul class="load-responsive" rel="Main Menu">
								<li><a href="/pet/lista-mascotas/<?php echo $user[0]["uuid"];?>">Mis mascotas</a></li>
							</ul>
							<div class="search-header">
							  <form action="http://fraction.orange-themes.com/html/get">
									<input type="search" value="" placeholder="Search.." autocomplete="off" required="required" name="s" />
									<input type="submit" value="search" />
								</form>
							</div>
						</nav>
						
					</div>

					<div class="clear-float"></div>
					
				<!-- END .wrapper -->
				</div>
				
			<!-- END .header -->
			</header>
			
			<!-- BEGIN .content -->
			<section class="content">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					

					<!-- <div class="breaking-news">
						<div class="breaking-title">
							<h3>Breaking News</h3>
						</div>
						<div class="breaking-block">
							<ul>
								<li><a href="category.html" class="break-category" style="background-color: #276197;">Tech News</a><h4><a href="post.html">Prize pool for The International 2014 surges to $5.7 million</a></h4><a href="post.html#comments" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
								<li><a href="category.html" class="break-category" style="background-color: #429d4a;">Contests</a><h4><a href="post.html">An rebum nusquam cum duo invenire mundi</a></h4><a href="post.html#comments" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
								<li><a href="category.html" class="break-category" style="background-color: #ffd800; color: #232323;">World News</a><h4><a href="post.html">An rebum nusquam cum duo invenire mundi</a></h4><a href="post.html#comments" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
							</ul>
						</div>
					</div> -->


					<div class="main-content has-sidebar">
					<!-- <div class="main-content has-double-sidebar"> -->
					<!-- <div class="main-content"> -->

						<!-- BEGIN .ot-slider -->
						<div class="ot-slider owl-carousel">

							<!-- BEGIN .ot-slide -->
							<div class="ot-slide">
								<div class="ot-slider-layer first">
									<a href="post.html">
										<strong><i style="background-color: #ed2d00; color: #fff;">Breaking News</i>a fight club on the top of the world</strong>
										<img src="images/photos/image-6.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer second">
									<a href="post.html">
										<strong><i style="background-color: #ffd800; color: #232323;">World News</i>SAMENWERKING GOLIATH SPORTSWEAR &amp; TWEE NEDERLANDSE PINTEREST INFLUENCERS</strong>
										<img src="images/photos/image-7.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer third">
									<a href="post.html">
										<strong><i style="background-color: #1985e1; color: #fff;">Nostalgia</i>Game Boy Camera images from 2000 seem 10 times as old</strong>
										<img src="images/photos/image-8.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer fourth">
									<a href="post.html">
										<strong><i style="background-color: #429d4a; color: #fff;">Contests</i>Contest: Win one of two Watch Dogs duffle bags by Frank &amp; Oak</strong>
										<img src="images/photos/image-9.jpg" alt="" />
									</a>
								</div>
							<!-- END .ot-slide -->
							</div>

							<!-- BEGIN .ot-slide -->
							<div class="ot-slide">
								<div class="ot-slider-layer first">
									<a href="post.html">
										<strong><i style="background-color: #ed2d00; color: #fff;">Breaking News</i>a fight club on the top of the world</strong>
										<img src="images/photos/image-6.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer second">
									<a href="post.html">
										<strong><i style="background-color: #ffd800; color: #232323;">World News</i>SAMENWERKING GOLIATH SPORTSWEAR &amp; TWEE NEDERLANDSE PINTEREST INFLUENCERS</strong>
										<img src="images/photos/image-7.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer third">
									<a href="post.html">
										<strong><i style="background-color: #1985e1; color: #fff;">Nostalgia</i>Game Boy Camera images from 2000 seem 10 times as old</strong>
										<img src="images/photos/image-8.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer fourth">
									<a href="post.html">
										<strong><i style="background-color: #429d4a; color: #fff;">Contests</i>Contest: Win one of two Watch Dogs duffle bags by Frank &amp; Oak</strong>
										<img src="images/photos/image-9.jpg" alt="" />
									</a>
								</div>
							<!-- END .ot-slide -->
							</div>

							<!-- BEGIN .ot-slide -->
							<div class="ot-slide">
								<div class="ot-slider-layer first">
									<a href="post.html">
										<strong><i style="background-color: #ed2d00; color: #fff;">Breaking News</i>a fight club on the top of the world</strong>
										<img src="images/photos/image-6.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer second">
									<a href="post.html">
										<strong><i style="background-color: #ffd800; color: #232323;">World News</i>SAMENWERKING GOLIATH SPORTSWEAR &amp; TWEE NEDERLANDSE PINTEREST INFLUENCERS</strong>
										<img src="images/photos/image-7.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer third">
									<a href="post.html">
										<strong><i style="background-color: #1985e1; color: #fff;">Nostalgia</i>Game Boy Camera images from 2000 seem 10 times as old</strong>
										<img src="images/photos/image-8.jpg" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer fourth">
									<a href="post.html">
										<strong><i style="background-color: #429d4a; color: #fff;">Contests</i>Contest: Win one of two Watch Dogs duffle bags by Frank &amp; Oak</strong>
										<img src="images/photos/image-9.jpg" alt="" />
									</a>
								</div>
							<!-- END .ot-slide -->
							</div>

						<!-- END .ot-slider -->
						</div>

						<!-- BEGIN .left-content -->
						<div class="left-content">

							<!-- BEGIN .home-block -->
							<div class="main-title">
								<h2>Hola <?php echo $user[0]["nombre"];?></h2>
								<div class="user-actions">
									<div id="iconos">
										<a id="edit-profile" href="/user/profile"><img width="20px" height="20px" src="/img/iconos/editar.png"></a>
										<a href="/user/logout"><img width="20px" height="20px" src="/img/iconos/salir.png"></a>
									</div>
								</div>
							</div>



							<div class="article-content">

								<div class="paragraph-row">
									<div class="column6">

										<div id="edit-profile-modal"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalEditProdile" aria-hidden="true" >
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">

														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h3>Edita el perfil de tu mascota</h3>
													</div>
													<div class="modal-body">
														<form id="edit-profile-form" class="form-box register-form form-validator" method="post" action="/pet/create-pet">


															<div class="form-group">
																<label>Nombre: <span class="required">*</span></label>
																<input id="nombreMascota" class="form-control" type="text" name="nombre" required>
															</div>

															<div class="form-group">
																<label>Clase de mascota: <span class="required">*</span></label>
																<select class="form-control" id="tipoRaza" name="clase_mascota" required>
																	<option>Selecciona una clase de mascota</option>
																	<option>Perro</option>
																	<option>Gato</option>
																	<option>Hurón</option>
																	<option>Ave</option>
																	<option>Reptil</option>
																</select>
															</div>

															<div class="form-group">
																<label>Raza de perro<span class="required">*</span></label>
																<select  id="perro" class="form-control"  name="raza_perro" required>
																	<option>--A--</option>
																	<option value="Affenpinscher">Affenpinscher</option>
																	<option value="Afgano">Afgano </option>
																	<option value="Akita">Akita </option>
																	<option value="Akita Americano">Akita Americano</option>
																	<option value="Alano Español">Alano Español </option>
																	<option value="American Bully">American Bully </option>
																	<option value="American Foxhound">American Foxhound</option>
																	<option value="American Pit Bull Terrier"> American Pit Bull Terrier</option>
																	<option value="American Staffordshire">American Staffordshire </option>
																	<option value="Antiguo perro de muestra Danés">Antiguo perro de muestra Danés </option>
																	<option value="Australian Silky Terrier">Australian Silky Terrier </option>
																	<option value="Azawakh">Azawakh</option>
																	<option>--B--</option>
																	<option value="Basset Hound">Basset Hound</option>
																	<option value="Basset leonado de Bretaña">Basset leonado de Bretaña</option>
																	<option value="Beagle">Beagle</option>
																	<option value="Beagle-Harrier">Beagle-Harrier</option>
																	<option value="Bedlington Terrier">Bedlington Terrier</option>
																	<option value="Berger de Picardie">Berger de Picardie</option>
																	<option value="Bichón Boloñés">Bichón Boloñés</option>
																	<option value="Bichón Frisé">Bichón Frisé</option>
																	<option value="Bichón Habanero">Bichón Habanero</option>
																	<option value="Billy">Billy</option>
																	<option value="Black And Tan Coonhound">Black And Tan Coonhound</option>
																	<option value="Bloodhound">Bloodhound</option>
																	<option value="Bobtail">Bobtail</option>
																	<option value="Bodeguero Andaluz">Bodeguero Andaluz</option>
																	<option value="Border Collie">Border Collie</option>
																	<option value="Border Terrier">Border Terrier</option>
																	<option value="Borzoi (galgo Ruso)">Borzoi (galgo Ruso)</option>
																	<option value="Boston Terrier">Boston Terrier</option>
																	<option value="Bóxer">Bóxer</option>
																	<option value="Boyero Australiano">Boyero Australiano</option>
																	<option value="Boyero de Flandes">Boyero de Flandes</option>
																	<option value="Boyero de las Ardenas">Boyero de las Ardenas</option>
																	<option value="Braco alemán de pelo corto">Braco alemán de pelo corto</option>
																	<option value="Braco alemán de pelo duro">Braco alemán de pelo duro</option>
																	<option value="Braco de Auvernia">Braco de Auvernia</option>
																	<option value="Braco de Weimar">Braco de Weimar</option>
																	<option value="Braco del Ariège">Braco del Ariège</option>
																	<option value="Braco del Bourbonnais">Braco del Bourbonnais</option>
																	<option value="Braco italiano">Braco italiano</option>
																	<option value="Braco San Germain">Braco San Germain</option>
																	<option value="Briard">Briard</option>
																	<option value="Brittany">Brittany</option>
																	<option value="Broholmer">Broholmer</option>
																	<option value="Buhund Noruego">Buhund Noruego</option>
																	<option value="Bull Terrier">Bull Terrier</option>
																	<option value="Bull Terrier Miniatura">Bull Terrier Miniatura</option>
																	<option value="Bulldog">Bulldog</option>
																	<option value="Bulldog americano">Bulldog americano</option>
																	<option value="Bulldog Francés">Bulldog Francés</option>
																	<option value="Bullmastín">Bullmastín</option>
																	<option>--C--</option>
																	<option value="Cavalier King Charles">Cavalier King Charles</option>
																	<option value="Chihuahua">Chihuahua</option>
																	<option value="Chin Japonés">Chin Japonés</option>
																	<option value="Chow Chow">Chow Chow</option>
																	<option value="Cirneco Del Etna">Cirneco Del Etna</option>
																	<option value="Clumber Spaniel">Clumber Spaniel</option>
																	<option value="Cobrador de Nueva Escocia">Cobrador de Nueva Escocia</option>
																	<option value="Cocker Spaniel">Cocker Spaniel</option>
																	<option value="Cocker Americano">Cocker Americano</option>
																	<option value="Collie">Collie</option>
																	<option value="Collie Barbudo">Collie Barbudo</option>
																	<option value="Collie Smooth">Collie Smooth </option>
																	<option value="Corgi Galés Cárdigan">Corgi Galés Cárdigan</option>
																	<option value="Corgi Galés Pembroke">Corgi Galés Pembroke</option>
																	<option value="Cotón de Tuléar">Cotón de Tuléar</option>
																	<option>--D--</option>
																	<option value="Dálmata">Dálmata</option>
																	<option value="Dandie Dinmont Terrier">Dandie Dinmont Terrier</option>
																	<option value="Deerhound Escocés">Deerhound Escocés</option>
																	<option value="Doberman">Doberman</option>
																	<option value="Dogo Argentino">Dogo Argentino</option>
																	<option value="Dogo Canario">Dogo Canario</option>
																	<option value="Dogo de Burdeos">Dogo de Burdeos</option>
																	<option value="Dogo Mallorquín">Dogo Mallorquín</option>
																	<option value="Drever">Drever</option>
																	<option value="">--E--</option>
																	<option value="Elkhound Noruego">Elkhound Noruego</option>
																	<option value="Epagneul breton">Epagneul breton</option>
																	<option value="Eurasier">Eurasier</option>
																	<option >--F--</option>
																	<option value="Faraón Hound">Faraón Hound</option>
																	<option value="Field Spaniel">Field Spaniel</option>
																	<option value="Fila Brasileiro">Fila Brasileiro</option>
																	<option value="Fila de San Miguel">Fila de San Miguel</option>
																	<option value="Fox Terrier Pelo Duro">Fox Terrier Pelo Duro</option>
																	<option value="Fox Terrier de Pelo Liso">Fox Terrier de Pelo Liso</option>
																	<option value="Fox Terrier Toy">Fox Terrier Toy</option>
																	<option value="Foxhound Americano">Foxhound Americano</option>
																	<option value="Foxhound Inglés">Foxhound Inglés</option>
																	<option>--G--</option>
																	<option value="Galgo Español">Galgo Español</option>
																	<option value="Galgo Italiano">Galgo Italiano</option>
																	<option value="Gascon Saintongeois">Gascon Saintongeois</option>
																	<option value="Glen Of Imaal Terrier">Glen Of Imaal Terrier</option>
																	<option value="Golden Retriever">Golden Retriever</option>
																	<option value="Gran Basset Grifón vendeano">Gran Basset Grifón vendeano</option>
																	<option value="Gran Danés">Gran Danés</option>
																	<option value="Greyhound">Greyhound</option>
																	<option value="Grifon Belga">Grifon Belga</option>
																	<option value="Grifón de Bruselas">Grifón de Bruselas</option>
																	<option value="Grifón de muestra bohemio de pelo duro">Grifón de muestra bohemio de pelo duro</option>
																	<option value="Grifon de muestra eslovaco de pelo duro">Grifon de muestra eslovaco de pelo duro</option>
																	<option value="Grifón de muestra Korthals de pelo duro">Grifón de muestra Korthals de pelo duro</option>
																	<option>--H--</option>
																	<option value="Hamilton Stovare">Hamilton Stovare</option>
																	<option value="Harrier">Harrier</option>
																	<option value="Hokkaïdo">Hokkaïdo </option>
																	<option value="Hovawart">Hovawart</option>
																	<option value="Husky Siberiano">Husky Siberiano</option>
																	<option>--I--</option>
																	<option value="Irish Soft Coated Wheaten Terrier">Irish Soft Coated Wheaten Terrier</option>
																	<option value="">--J--</option>
																	<option value="Jack Russell Terrier">Jack Russell Terrier</option>
																	<option value="Jamthund">Jamthund</option>
																	<option >--K--</option>
																	<option value="Kai">Kai</option>
																	<option value="Karjalankarhukoira">Karjalankarhukoira </option>
																	<option value="Keeshond">Keeshond</option>
																	<option value="Kerry Blue Terrier">Kerry Blue Terrier</option>
																	<option value="Kishu">Kishu</option>
																	<option value="Komondor">Komondor</option>
																	<option value="Korea Jinco Dog">Korea Jinco Dog</option>
																	<option value="Kromfohrländer">Kromfohrländer</option>
																	<option value="Kuvasz">Kuvasz</option>
																	<option value="">--L--</option>
																	<option value="Labrador Retriever">Labrador Retriever</option>
																	<option value="Laïka de Siberia oriental">Laïka de Siberia oriental</option>
																	<option value="Laïka Ruso-Europeo">Laïka Ruso-Europeo</option>
																	<option value="Lakeland Terrier">Lakeland Terrier</option>
																	<option value="Landseer">Landseer</option>
																	<option value="Lebrel Húngaro">Lebrel Húngaro</option>
																	<option value="Leonberger">Leonberger</option>
																	<option value="Lhasa Apso">Lhasa Apso</option>
																	<option value="Lundehund noruego">Lundehund noruego</option>
																	<option value="Löwchen">Löwchen</option>
																	<option>--M--</option>
																	<option value="Malamute de Alaska">Malamute de Alaska</option>
																	<option value="Maltés">Maltés</option>
																	<option value="Mastín">Mastín</option>
																	<option value="Mastín Napolitano">Mastín Napolitano</option>
																	<option value="Mastín Tibetano">Mastín Tibetano</option>
																	<option value="Mudi">Mudi </option>
																	<option value="Münsterländer grande">Münsterländer grande</option>
																	<option value="Münsterländer pequeño">Münsterländer pequeño</option>
																	<option>--O--</option>
																	<option value="Otterhound">Otterhound</option>
																	<option>--P--</option>
																	<option value="Papillon">Papillon</option>
																	<option value="Parson Russell Terrier">Parson Russell Terrier</option>
																	<option value="Pastor Alemán">Pastor Alemán</option>
																	<option value="Pastor Australiano">Pastor Australiano</option>
																	<option value="Pastor Belga">Pastor Belga</option>
																	<option value="Pastor Blanco Suizo">Pastor Blanco Suizo</option>
																	<option value="Pastor Catalán">Pastor Catalán</option>
																	<option value="Pastor de Anatolia">Pastor de Anatolia</option>
																	<option value="Pastor de Beauce">Pastor de Beauce</option>
																	<option value="Pastor de Los Pirineos">Pastor de Los Pirineos</option>
																	<option value="Pastor de Shetland">Pastor de Shetland</option>
																	<option value="Pastor Polaco de Tierras Bajas">Pastor Polaco de Tierras Bajas</option>
																	<option value="Pequeño Basset Grifón vendeano">Pequeño Basset Grifón vendeano</option>
																	<option value="Pequeño Brabanzón">Pequeño Brabanzón</option>
																	<option value="Pequeño perro holandés para la caza acuática">Pequeño perro holandés para la caza acuática</option>
																	<option value="Pequinés">Pequinés</option>
																	<option value="Perdiguero de Burgos">Perdiguero de Burgos</option>
																	<option value="Perdiguero de Drente">Perdiguero de Drente</option>
																	<option value="Perdiguero portugués">Perdiguero portugués</option>
																	<option value="Entlebucher">Entlebucher</option>
																	<option value="Perro Crestado Chino">Perro Crestado Chino</option>
																	<option value="Perro de Agua Americano">Perro de Agua Americano</option>
																	<option value="Perro De Agua Español">Perro De Agua Español</option>
																	<option value="Perro de Aguas Portugués">Perro de Aguas Portugués</option>
																	<option value="Perro de Canaan">Perro de Canaan</option>
																	<option value="Perro de Castro Laboreiro">Perro de Castro Laboreiro</option>
																	<option value="Perro de Groenlandia">Perro de Groenlandia</option>
																	<option value="Perro de Montaña Appenzell">Perro de Montaña Appenzell</option>
																	<option value="Perro de Montaña Bernés">Perro de Montaña Bernés</option>
																	<option value="Perro de Montaña de la Sierra de la Estrela">Perro de Montaña de la Sierra de la Estrela</option>
																	<option value="Perro de Montaña de Los Pirineos">Perro de Montaña de Los Pirineos</option>
																	<option value="Perro de Montaña del Atlas">Perro de Montaña del Atlas</option>
																	<option value="Perro de Montaña Gran Suizo">Perro de Montaña Gran Suizo</option>
																	<option value="Perro de muestra alemán de pelo cerdoso">Perro de muestra alemán de pelo cerdoso</option>
																	<option value="Perro de pastor bergamasco">Perro de pastor bergamasco</option>
																	<option value="Perro de pastor de Asia Central">Perro de pastor de Asia Central</option>
																	<option value="Perro de pastor de Karst">Perro de pastor de Karst</option>
																	<option value="Perro de pastor de Rusia Meridional">Perro de pastor de Rusia Meridional</option>
																	<option value="Perro de pastor del Cáucaso">Perro de pastor del Cáucaso</option>
																	<option value="Perro de Pastor islandés">Perro de Pastor islandés</option>
																	<option value="Perro de pastor polaco de las Llanuras">Perro de pastor polaco de las Llanuras</option>
																	<option value="Perro de pastor polaco de Podhale">Perro de pastor polaco de Podhale</option>
																	<option value="Perro de pastor portugués">Perro de pastor portugués</option>
																	<option value="Perro de Pastor yugoslavo de Charplanina">Perro de Pastor yugoslavo de Charplanina</option>
																	<option value="Perro Esquimal Americano">Perro Esquimal Americano</option>
																	<option value="Perro Esquimal Canadiense">Perro Esquimal Canadiense</option>
																	<option value="Perro Lobo Checoslavaco">Perro Lobo Checoslavaco</option>
																	<option value="Perro lobo de Sarloos">Perro lobo de Sarloos</option>
																	<option value="Perro Pastor Croato">Perro Pastor Croato</option>
																	<option value="Perro Pastor Mallorquín">Perro Pastor Mallorquín</option>
																	<option value="Perro pastor Maremmano-Abruzzese">Perro pastor Maremmano-Abruzzese</option>
																	<option value="Perro sin Pelo del Perú">Perro sin Pelo del Perú</option>
																	<option value="Perro Smous holandés">Perro Smous holandés</option>
																	<option value="Pinscher">Pinscher</option>
																	<option value="Pinscher austriaco">Pinscher austriaco</option>
																	<option value="Pinscher Miniatura">Pinscher Miniatura</option>
																	<option value="Plott Hound">Plott Hound</option>
																	<option value="Podenco Canario">Podenco Canario</option>
																	<option value="Podenco Ibicenco">Podenco Ibicenco</option>
																	<option value="Podenco Portugués">Podenco Portugués</option>
																	<option value="Pointer">Pointer</option>
																	<option value="Pointer Alemán de Pelo Corto">Pointer Alemán de Pelo Corto</option>
																	<option value="Pointer Alemán de Pelo Duro">Pointer Alemán de Pelo Duro</option>
																	<option value="Poitevin">Poitevin</option>
																	<option value="Pomerania">Pomerania</option>
																	<option value="Porcelaine">Porcelaine</option>
																	<option value="Pudelpointer">Pudelpointer</option>
																	<option value="Puli">Puli</option>
																	<option value="Pumi">Pumi</option>
																	<option>--R--</option>
																	<option value="Rafeiro del Alentejo">Rafeiro del Alentejo</option>
																	<option value="Rastreador de Hannover">Rastreador de Hannover</option>
																	<option value="Rastreador montañes de Baviera">Rastreador montañes de Baviera</option>
																	<option value="Retriever de La Bahía de Chesapeake">Retriever de La Bahía de Chesapeake</option>
																	<option value="Retriever de Pelo Liso">Retriever de Pelo Liso</option>
																	<option value="Ridgeback de Rodesia">Ridgeback de Rodesia</option>
																	<option value="Rottweiler">Rottweiler</option>
																	<option >--S--</option>
																	<option value="Sabueso alemán">Sabueso alemán</option>
																	<option value="Sabueso Artesiano">Sabueso Artesiano</option>
																	<option value="Sabueso austriaco negro y fuego">Sabueso austriaco negro y fuego</option>
																	<option value="Sabueso de Bosnia de pelo cerdoso">Sabueso de Bosnia de pelo cerdoso</option>
																	<option value="Sabueso de Hygen">Sabueso de Hygen</option>
																	<option value="Sabueso de las Montañas de Montenegro">Sabueso de las Montañas de Montenegro</option>
																	<option value="Sabueso de Smaland">Sabueso de Smaland</option>
																	<option value="Sabueso de Transilvania">Sabueso de Transilvania</option>
																	<option value="Sabueso del Tirol">Sabueso del Tirol</option>
																	<option value="Sabueso eslovaco">Sabueso eslovaco</option>
																	<option value="Sabueso español">Sabueso español</option>
																	<option value="Sabueso Estirio de pelo duro">Sabueso Estirio de pelo duro</option>
																	<option value="Sabueso finlandes">Sabueso finlandes</option>
																	<option value="Sabueso francés tricolor">Sabueso francés tricolor</option>
																	<option value="Sabueso Halden">Sabueso Halden</option>
																	<option value="Sabueso Italiano (de pelo corto)">Sabueso Italiano (de pelo corto)</option>
																	<option value="Sabueso Italiano (de pelo duro)">Sabueso Italiano (de pelo duro)</option>
																	<option value="Sabueso noruego">Sabueso noruego</option>
																	<option value="Sabueso polaco">Sabueso polaco</option>
																	<option value="Sabueso Schiller">Sabueso Schiller</option>
																	<option value="Sabueso serbio">Sabueso serbio</option>
																	<option value="Sabueso suizo">Sabueso suizo</option>
																	<option value="Sabueso tricolor serbio">Sabueso tricolor serbio</option>
																	<option value="Saluki (galgo Persa)">Saluki (galgo Persa)</option>
																	<option value="Samoyedo">Samoyedo</option>
																	<option value="San Bernardo">San Bernardo</option>
																	<option value="Schapendoes neerlandés">Schapendoes neerlandés</option>
																	<option value="Schipperke">Schipperke</option>
																	<option value="Schnauzer">Schnauzer</option>
																	<option value="Schnauzer Gigante">Schnauzer Gigante</option>
																	<option value="Schnauzer Miniatura">Schnauzer Miniatura</option>
																	<option value="Sealyham Terrier">Sealyham Terrier</option>
																	<option value="Setter Gordon">Setter Gordon</option>
																	<option value="Setter Inglés">Setter Inglés</option>
																	<option value="Setter Irlandés">Setter Irlandés</option>
																	<option value="Setter irlandés rojo">Setter irlandés rojo</option>
																	<option value="Setter irlandés rojo y blanco">Setter irlandés rojo y blanco</option>
																	<option value="Shar Pei">Shar Pei</option>
																	<option value="Shiba">Shiba</option>
																	<option value="ShihTzu">ShihTzu</option>
																	<option value="Shikoku">Shikoku</option>
																	<option value="Silky Terrier">Silky Terrier</option>
																	<option value="Sloughi (galgo árabe)">Sloughi (galgo árabe)</option>
																	<option value="Spaniel continental enano">Spaniel continental enano</option>
																	<option value="Spaniel de Agua Irlandés">Spaniel de Agua Irlandés</option>
																	<option value="Spaniel de Pont-Audemer">Spaniel de Pont-Audemer</option>
																	<option value="Spaniel de Sussex">Spaniel de Sussex</option>
																	<option value="Spaniel Picardo">Spaniel Picardo</option>
																	<option value="Spaniel Tibetano">Spaniel Tibetano</option>
																	<option value="Spinone Italiano">Spinone Italiano</option>
																	<option value="Spitz Alemán">Spitz Alemán</option>
																	<option value="Spitz Finlandés">Spitz Finlandés</option>
																	<option value="Spitz Japonés">Spitz Japonés</option>
																	<option value="Springer Spaniel Galés">Springer Spaniel Galés</option>
																	<option value="Springer Spaniel Inglés">Springer Spaniel Inglés</option>
																	<option value="Sptiz de Norrbotten">Sptiz de Norrbotten</option>
																	<option value="Stabyhoun">Stabyhoun</option>
																	<option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>
																	<option >--T--</option>
																	<option value="Tchuvatch eslovaco">Tchuvatch eslovaco</option>
																	<option value="Teckel">Teckel</option>
																	<option value="Tejonero alpino">Tejonero alpino</option>
																	<option value="Tejonero de Westfalia">Tejonero de Westfalia</option>
																	<option value="Terranova">Terranova</option>
																	<option value="Terrier Australiano">Terrier Australiano</option>
																	<option value="Terrier Brasileño">Terrier Brasileño</option>
																	<option value="Terrier cazador alemán">Terrier cazador alemán</option>
																	<option value="Terrier Cesky">Terrier Cesky</option>
																	<option value="Terrier de Airedale">Terrier de Airedale</option>
																	<option value="Terrier de Norfolk">Terrier de Norfolk</option>
																	<option value="Terrier de Norwich">Terrier de Norwich</option>
																	<option value="Terrier de Skye">Terrier de Skye</option>
																	<option value="Terrier Escocés">Terrier Escocés</option>
																	<option value="Terrier Galés">Terrier Galés</option>
																	<option value="Terrier Irlandés">Terrier Irlandés</option>
																	<option value="Terrier japonés">Terrier japonés</option>
																	<option value="Terrier Tibetano">Terrier Tibetano</option>
																	<option value="Thai Ridgeback Dog">Thai Ridgeback Dog </option>
																	<option value="Tosa Inu">Tosa Inu</option>
																	<option >--V--</option>
																	<option value="Valhund Sueco">Valhund Sueco</option>
																	<option value="Vizsla">Vizsla</option>
																	<option value="Volpino Italiano">Volpino Italiano</option>
																	<option>--W--</option>
																	<option value="West Highland">West Highland</option>
																	<option value="Wetterhound">Wetterhound</option>
																	<option value="Wheaten Terrier">Wheaten Terrier</option>
																	<option value="Whippet">Whippet</option>
																	<option value="Wolfhound Irlandés">Wolfhound Irlandés</option>
																	<option>--X--</option>
																	<option value="xoloitzcuintle">xoloitzcuintle</option>
																	<option>--Y--</option>
																	<option value="Yorkshire terrier">Yorkshire terrier</option>

																</select>

															</div>

															<div class="form-group">
																<label>Raza de gato: <span class="required">*</span></label>
																<select id="gato" name="raza_gato" class="form-control" required>

																	<option value="">--A--</option>
																	<option value="Abisinio">Abisinio</option>
																	<option value="American Curl">American Curl</option>
																	<option value="Angora Turco">Angora Turco</option>
																	<option value="Azul Ruso">Azul Ruso</option>
																	<option value="">--B--</option>
																	<option value="Balinés">Balinés</option>
																	<option value="Bengalí">Bengalí</option>
																	<option value="Bombay">Bombay</option>
																	<option value="Bosque de Noruega">Bosque de Noruega</option>
																	<option value="Británico de pelo corto">Británico de pelo corto</option>
																	<option value="Británico de Pelo Corto Azul">Británico de Pelo Corto Azul</option>
																	<option value="Británico de pelo largo">Británico de pelo largo</option>
																	<option value="Burmés">Burmés</option>
																	<option value="Burmilla">Burmilla</option>
																	<option value="">--C--</option>
																	<option value="Cartujo">Cartujo</option>
																	<option value="Cornish Rex">Cornish Rex</option>
																	<option value="">--D--</option>
																	<option value="Devon Rex">Devon Rex</option>
																	<option value="">--E--</option>
																	<option value="Europeo de Pelo Corto">Europeo de Pelo Corto</option>
																	<option value="Exótico de pelo corto">Exótico de pelo corto</option>
																	<option value="">--G--</option>
																	<option value="German Rex">German Rex</option>
																	<option value="">--H--</option>
																	<option value="Highland Fold">Highland Fold</option>
																	<option value="Himalayo">Himalayo</option>
																	<option value="">--J--</option>
																	<option value="Javanés">Javanés</option>
																	<option value="">--K--</option>
																	<option value="Korat">Korat</option>
																	<option value="">--M--</option>
																	<option value="Maine Coon">Maine Coon</option>
																	<option value="Manx">Manx</option>
																	<option value="Mau Egipcio">Mau Egipcio</option>
																	<option value="">--N--</option>
																	<option value="Neva Masquerade">Neva Masquerade</option>
																	<option value="">--O--</option>
																	<option value="Ocicat">Ocicat</option>
																	<option value="Oriental de Pelo Corto">Oriental de Pelo Corto</option>
																	<option value="">--P--</option>
																	<option value="Persa">Persa</option>
																	<option value="Peterbald">Peterbald</option>
																	<option value="">--R--</option>
																	<option value="Ragdoll">Ragdoll</option>
																	<option value="">--S--</option>
																	<option value="Sagrado de Birmania">Sagrado de Birmania</option>
																	<option value="Scottish Fold">Scottish Fold</option>
																	<option value="Selkirk Rex">Selkirk Rex</option>
																	<option value="Siamés">Siamés</option>
																	<option value="Siberiano">Siberiano</option>
																	<option value="Snowshoe">Snowshoe</option>
																	<option value="Somalí">Somalí</option>
																	<option value="Somalí">Somalí</option>
																	<option value="">--T--</option>
																	<option value="Toyger">Toyger</option>
																	<option value="">--V--</option>
																	<option value="Van Turco">Van Turco</option>
																</select>
															</div>

															<div class="form-group">
																<label>Breve descripcion de tu mascota : <span class="required">*</span></label><br />
																<textarea id="description" type="textarea" name="description" style="margin: 0px; width: 506px; height: 133px;" required></textarea>
															</div>
															<div class="form-group">
																<div class='input-group date' id='datetimepicker1'>
																	<label>Fecha de nacimiento de tu mascota : <span class="required">*</span></label><br />
																	<input required id="nacimiento" name="fecha_nacimiento" type='text' class="form-control clsDatePicker datepicker" readonly="readonly" />
																		<span class="input-group-addon">
																			<span class="glyphicon glyphicon-calendar"></span>
                                  										</span>
																</div>
															</div>
															<div class="form-group">
																<label>Sexo de tu mascota : <span class="required">*</span></label><br />
																<select id="sexo" class="form-control" name="sexo" required>
																	<option value="">Escoge una opcion</option>
																	<option value="Macho">Macho</option>
																	<option value="Hembra">Hembra</option>
																</select>
															</div>
															<div class="form-group">
																<label>Datos adicionales : <span class="required">*</span></label><br />
																<textarea required id="datos" type="textarea" name="datos" style="margin: 0px; width: 506px; height: 133px;"></textarea>
															</div>
															<input id="edit_pet" class="<?php echo $user[0]["uuid"];?>" type="submit" value="Guardar cambios">
														</form>
													</div>
													<div class="modal-footer">
														<div class="buttons-box clearfix">

														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="accordion">
                                            
											<div>
												<h3>Mensajes</h3>
												<div class="table-responsive">
													<style>
														table, th, td {
															border: 1px solid black;
															border-collapse: collapse;
														}
														th, td {
															padding: 5px;
														}
													</style>
													<table style="width:70%">
														<tr>
															<th>From</th>
															<th>Subject</th>
															<th>Date</th>
														</tr>
														<?php foreach($messages as $key => $message):?>
															<tr>
																<td><?php echo $message["from"]?></td>
																<td><a href="/mensaje/mensaje-recived/<?php echo $message["uuid"];?>"><?php echo $message["subject"];?></a></td>
																<td><?php echo date("d-m-Y",strtotime($message["date"]));?></td>
															</tr>
														<?php endforeach;?>
													</table>
													<h5><a href="/mensaje/sent/<?php echo $user[0]["uuid"];?>">Mensajes enviados</a></h5>
													<div class="profile-image"><img width="150px" width="150px" src="<?php echo $image_profile[0]["path"];?>" style="float: right;position: relative; top:-100px"></div>
												</div>
											</div>
											
										</div>

									</div>
									<div class="column6">

										<div class="wp-caption aligncenter">
											<!--ref="images/photos/image-30.jpg" class="lightbox-photo"><img class="size-thumbnail" alt="" src="images/photos/image-30.jpg" /></a>-->

										</div>

									</div>

								<!-- END .article-list-block -->
								</div>
								
							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="banner">
									<!--<a href="#" target="_blank"><img src="images/no-banner-728x90.jpg" alt="" /></a>-->
								</div></div>

							<!-- BEGIN .home-block -->

							<div class="home-block">
								<?php if($is_animalista):?>
								<div class="main-title" style="border-left: 4px solid #ef8722">
									<h2>Mis fotos </h2>

										<a style="background: #ef8722; color: #ef8722;" class="right button" id="add-image" href="/user/upload-picture/<?php echo $profile["animalista_uuid"];?>">Agregar imagen para animalista</a>
								</div>

								<!-- BEGIN .article-review-block -->
								<div class="article-review-block">

									<?php if(empty($images)):?>
										<h3>No has subido ninguna imagen</h3>
									<?php else:?>
									<?php foreach($images as $image):?>
											<?php if(!$image["profile"]):?>
												<div class="item">
													<a href="#">
													<span>
														<!--<small>Entretenimiento</small>-->
												
														<!--<span>Ei his case meis vivendum</span>-->
													</span>
													<img width="150" height="150" src="/<?php echo $image["image"];?>" alt="">

												</a>
											</div>
											<?php endif;?>
									<?php endforeach;?>
									<?php endif;?>
								<!-- END .article-review-block -->
								</div><?php endif;?>
								<div class="home-block">
									<div class="main-title" style="border-left: 4px solid #ef8722">

										<h2>Cambiar contrasena </h2><br>
										<style>
											#password input,
											#account-verify input{
												margin:10px;
											}
										</style>
										<div id="account-verify">
											<input type="email" value="<?php echo $user[0]["email"];?>" readonly id="email-verify"><br>
											<input type="password" placeholder="Tu password actual" id="password-verify">
											<input id="verify-user" type="button" value="Comprobar usuario">
										</div>
										<span id="valid-message"></span>
										<div id="password">
											<input hidden value="<?php echo $user[0]["uuid"];?>" id="pass-uuid">
											<input type="password" placeholder="Nuevo password" id="nuevo-password"><br>
											<input type="password" placeholder="Confirma tu password actual" id="c-new-password">
											<input type="button" value="Cambiar" id="changue-pass">
											<input type="button" value="Cancelar" id="cancel-pass">
										</div>
									</div>

									<!-- BEGIN .article-review-block -->
								</div>
								<div class="home-block">
									<div class="main-title" style="border-left: 4px solid #ef8722">
										<h3>Suscríbete al boletin</h3><br>
										<input type="text" placeholder="Ingresa tu correo" id="boletin-email" readonly value="<?php echo $user[0]["email"];?>">
										<input type="button" value="Suscríbete" id="send-boletin">
									</div>
								</div>

							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							

							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="main-title">

								</div>
								<div class="home-featured-shop-items woocommerce">


								</div>
							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							

							<!-- BEGIN .home-block -->
							<!--
							<div class="home-block">
								<div class="banner">
									<a href="#" target="_blank"><img src="images/no-banner-728x90.jpg" alt="" /></a>
								</div>
							<!-- END .home-block -->
							<!--</div>



						<!-- END .left-content -->
						</div>

						<!-- BEGIN #sidebar -->
						<aside id="sidebar">
                            <!--<a href="/user/logout">Salir</a>-->




							<div class="widget">
						    <h3>Mis favoritos</h3>
								<div class="photo-gallery-widget">
									<div class="item">
										<div class="item-header">
											<div class="gallery-navi">
												<a href="#gal-left"><i class="fa fa-angle-left"></i></a>
												<a href="#gal-right"><i class="fa fa-angle-right"></i></a>
											</div>
											<div class="gallery-change">
												<!--<a href="photo-gallery-single.html" class="active"><img src="images/photos/image-67.jpg" alt="" /></a>
												<a href="photo-gallery-single.html"><img src="images/photos/image-68.jpg" alt="" /></a>
												<a href="photo-gallery-single.html"><img src="images/photos/image-69.jpg" alt="" /></a>
												<a href="photo-gallery-single.html"><img src="images/photos/image-70.jpg" alt="" /></a>-->
											</div>
										</div>

									</div>


							<div class="widget">
						    <h3>Mi calendario</h3>
								<?php foreach($events as $key => $event):?>
								<div class="article-block">
									<div class="item">
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #276197;"><?php echo $event["nombre_evento"];?></a>
											</div>
											<h4><?php echo $event["descripcion_evento"];?></h4>
											<span><a href="#"><?php echo date("M j Y",strtotime($event["fecha_evento"]));?></a></span>
										</div>
									</div>
								</div>
								<?php endforeach;?>
								<a class="btn btn-default" href="/calendar/add-event/<?php echo $user[0]["uuid"];?>">Agregar evento</a>
							</div>

									<div class="widget">
										<h3>Cancelar Cuenta</h3><br>
										<input hidden id="uuid" uuid="<?php echo $user[0]["uuid"];?>"></inpur>
										<input id="cancel-account" type="button" value="Cancelar cuenta" class="btn btn-default">
									</div>

									<div class="widget">
										<h3>Cambiar foto de perfil</h3><br>
										<a href="/user/upload-picture/<?php echo $user[0]["uuid"];?>?profile=1" class="btn btn-default">Cambiar</a>
									</div>
							
						
							
							

							<div class="sidebar-fixed">

							  <div class="widget">

								</div>



							</div>

						<!-- END #sidebar -->
						</aside>


					</div>
					
				<!-- END .wrapper -->
				</div>
				
			<!-- BEGIN .content -->
			</section>
			
			<!-- BEGIN .footer -->
			<footer class="footer">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<div class="footer-widgets">

						<!-- BEGIN .widget -->
						
						<!-- END .widget -->
					
					
				<!-- END .wrapper -->
				</div>
	</div>
				<div class="footer-copyright">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<p>&copy; Pet Match <strong></strong></p>
					<!-- END .wrapper -->
					</div>
				</div>
				
			<!-- END .footer -->
			</footer>
			
		<!-- END .boxed -->
		</div>

		<!-- Scripts -->
		<script src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script src="/js/bootstrapValidator.min.js"></script>
		<script src="/js/bootstrap-datepicker.js"></script>
		<script src="/js/jplayer/jquery.jplayer.min.js"></script>
		<script src="/js/jplayer/jplayer.playlist.min.js"></script>
		<script src="/js/jquery.scrollbar.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="/js/edit-profile-modal.js"></script>
		<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
		<script src="/js/petmatch-js/buscador.js"></script>
		<script src="/js/petmatch-js/cancel.js"></script>
		<script src="/js/petmatch-js/password.js"></script>
		<script src="/js/petmatch-js/suscribete.js"></script>
		<!--<script type="text/javascript" src="/js/snap.svg-min.js"></script>
		<script type="text/javascript" src="/js/theme-scripts.js"></script>
		<script type="text/javascript" src="/js/lightbox.js"></script>
		<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/js/SmoothScroll.min.js"></script>
		<script type="text/javascript" src="/js/iscroll.js"></script>
		<script type="text/javascript" src="/js/modernizr.custom.50878.js"></script>
		<script type="text/javascript" src="/js/dat-menu.js"></script>-->


		<!--<script>
			jQuery(document).ready(function() {
				jQuery(".ot-slider").owlCarousel({
					items : 1,
					autoPlay : true,
					stopOnHover : true,
					navigation : true,
					lazyLoad : true,
					singleItem : true,
					pagination : false
				});
			});
		</script>-->

		<!-- Demo Only -->

	<!-- END body -->
	</body>
<!-- END html -->
</html>