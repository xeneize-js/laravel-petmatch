<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Envía un mensaje</title>



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

    <div class="bg5 background"></div>

    <div class="container">

      <div class="row">

        <p><a href="#"><img src="../../img/logo.png" class="img-responsive" alt="logo" width="126" height="77"></a></p>

        <nav class="main-form">

          <ul>

            <li><a href="/" class="cd-signin active">Cancelar</a></li>

          </ul>

        </nav>

      </div>







      <!-- FORM MODAL -->


      <!-- cd-signup -->





      <!-- FORM MODAL END -->



      <div id="content" class="top-margin main-home">

        <div class="row">

          <p class="main-title">

            Agrega un<strong> evento</strong>

          </p>


        </div>



        <div class="signup-wrapper">

          <div class="row">



            <form method="post" action="/calendar/add-event" id="defaultForm"  class="inline form-register-lg form-register-xl" data-validation-msg="Username must be 2 - 12 characters" required>

              <div class="form-group">
                <input hidden value="<?php echo $uuid;?>" name="user">
              </div>

              <div class="form-group wow fadeInUp" data-wow-delay="1400ms">

                <input type="text" size="25" name="nombre_evento" class="form-input" placeholder="Nombre del evento" required="">

              </div>

              <div class="form-group wow fadeInUp" data-wow-delay="1700ms">

                <input type="text" size="28" name="descripcion_evento" class="form-input" placeholder="Descripción del evento" required>

              </div>

              <div class="form-group password-wrapper wow fadeInUp" data-wow-delay="2000ms">

                <input class="form-input" id="datepicker" type="text"  placeholder="Fecha del calendario" name="fecha_evento" required>

              </div>
              <div>
                <br>
                <input type="submit" value="Crear" class="round dark-text" style="
    margin-left: 460px;
    margin-top: 60px;
">
              </div>

            </form>




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





<!-- End Google Map -->







<!-- Placed at the end of the document so the pages load faster -->

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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>

</body>

</html>