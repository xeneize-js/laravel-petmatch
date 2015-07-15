<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Envía un mensaje</title>



  <meta name="description" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!-- <link rel="shortcut icon" href=""> -->

  <link rel="stylesheet" href="/css/main-styles.css">

  <link rel="stylesheet" href="/icons/style.css">





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

    <div class="bg3 background"></div>

    <div class="container">

      <div class="row">

        <p><a href="#"><img src="/img/logo.png" class="img-responsive" alt="logo" width="126" height="77"></a></p>

        <nav class="main-form">

          <ul>

            <li><a href="" class="cd-signin active">Cancelar</a></li>

          </ul>

        </nav>

      </div>







      <!-- FORM MODAL -->


      <!-- cd-signup -->





      <!-- FORM MODAL END -->



      <div id="content" class="top-margin main-home">

        <div class="row">

          <p class="main-title">

            Manda un<strong> mensaje</strong>

          </p>


        </div>



        <article id="contact" class="Section">

          <div class="container">

            <div class="row">


            </div>

            <div class="row">

              <div class="col-sm-12 col-md-12 wow flipInX" data-wow-duration="900ms" data-wow-delay="400ms">

                <form method="post" class="form-inline form-footer" role="form" id="form-footer">
                  <div class="form-group">
                    <input hidden value="<?php echo $uuid;?>" name="to">
                  </div>
                  <div class="form-group">
                    <input hidden value="<?php echo $from;?>" name="from">
                  </div>

                  <div id="message"></div>

                  <div class="form-group ">

                    <div class="col-sm-4 col-md-4">

                      <input type="text" class="form-control" id="name" placeholder="Asunto" name="subject">

                    </div>




                  </div>

                  <div class="col-md-12 col-sm-12">

                    <textarea name="body" cols="40" rows="10" id="comments" placeholder="Mensaje"></textarea>

                  </div>

                  <div class="col-md-12 col-sm-12 text-center">

                    <button type="submit" id="submit" value="submit" class="btn btn-primary">Enviar</button>

                  </div>

                </form>



              </div>

            </div>

          </div>

        </article>
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

<script src=" /js/jquery-1.10.2.min.js"></script>

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

<script src="./js/TweenMax.js"></script>

<script src="/js/ScrollTo.js"></script>

<script src="/js/easypiechart.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript" src="/js/Gmap.js"></script>

<script src="/js/fluidvids.js"></script>

<script src="/js/custom.js"></script>

</body>

</html>

