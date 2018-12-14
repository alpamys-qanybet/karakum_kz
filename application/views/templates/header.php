<!DOCTYPE html>
<html lang="en" ng-app="tmg">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Karakum Drilling Central Asia</title>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url('static/img/favicon.ico'); ?>">
    
    <!-- Web Fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/index_files/css.css'); ?>">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/shop.css'); ?>">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/header-v5.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/footer-v4.css'); ?>">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/line-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/jquery.css'); ?>">
    <!--link rel="stylesheet" href="<?php #echo base_url('static/index_files/owl.css'); ?>"-->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/settings.css'); ?>">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/default.css'); ?>" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/custom.css'); ?>">


    <link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/parallax-slider/css/parallax-slider.css'); ?>">

    <!-- <link rel="stylesheet" type="text/css" href="<?php #echo base_url('static/lib/owl-carousel/assets/owl.carousel.min.css'); ?>" media="screen" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php #echo base_url('static/lib/owl-carousel/assets/owl.theme.default.min.css'); ?>" media="screen" /> -->

    <!-- <link rel="stylesheet" type="text/css" href="<?php #echo base_url('static/lib/slick-1.8.1/slick/slick.css'); ?>"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php #echo base_url('static/lib/slick-1.8.1/slick/slick-theme.css'); ?>"/> -->

    <!-- <link rel="stylesheet" type="text/css" href="<?php #echo base_url('static/lib/bxslider-4-4.2.12/jquery.bxslider.css'); ?>"/> -->

    <!-- <link rel="stylesheet" type="text/css" href="<?php #echo base_url('static/lib/light-slider/css/lightslider.min.css'); ?>"/> -->

    <link rel="stylesheet" href="<?php echo base_url('static/lib/flex-slider/flexslider.css'); ?>" type="text/css">

    <style>
        body {
            /*font-size: 16px;*/
            font-size: 17px;
            font-stretch: extra-condensed;
            font-weight: 400;
        }

        .mywrapper {
            padding-left: 80px;
            padding-right: 80px;
        }

        #map {
            width: 100%;
            height: 370px;
            /*width: 100%;
            height: auto;*/
        }

        div.maps button {
            color: #333 !important;
        }

        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
            display: none !important;
            /*visibility: hidden !important;*/
        }

        .content-md {
            padding-top: 0;
        }

        .footer-v4 .footer {
            padding: 20px 0 10px 0;
        }

        /*#owl-demo .item img{
            display: block;
            width: 100%;
            height: auto;
        }

        .owl-item {
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0) scale(1.0, 1.0);
        }*/



        /** {
          box-sizing: border-box;
        }*/

        /*.slider {
            width: 100%;
        }

        .slick-slide {
          margin: 0px 0px;
        }

        .slick-slide img {
          width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
          color: black;
        }


        .slick-slide {
          transition: all ease-in-out .3s;
          opacity: .2;
        }
        
        .slick-active {
          opacity: .5;
        }

        .slick-current {
          opacity: 1;
        }*/
    </style>
</head>


<!-- JS Global Compulsory -->
<script src="<?php echo base_url('static/index_files/jquery_002.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery-migrate.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/bootstrap.js'); ?>"></script>
<!-- JS Implementing Plugins -->
<script src="<?php echo base_url('static/index_files/back-to-top.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/smoothScroll.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery_005.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery_004.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery_003.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery.js'); ?>"></script>

<body ng-controller="MainCtrl" class="header-fixed" ng-cloak>

    <div class="wrapper">
        <!--=== Header v5 ===-->
        <div class="header-v5 header-static">
            <!-- Navbar -->
            <div class="navbar navbar-default mega-menu" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- <div class="pull-left">
                        <ul class="nav navbar-nav flag-nav">
                            <li>
                                <a href="http://tmgkaz.kz" style="padding: 12px 0 5px 5px;">
                                    <img style="height: 50px;" src="<?php #echo base_url('static/img/karakum-logo-8.png/'); ?>">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="pull-right">
                        <ul class="nav navbar-nav flag-nav">
                            <li>
                                <a href ng-click="$locales.changeLang('en')" style="padding: 20px 0 5px 5px;">
                                    <img src="<?php #echo base_url('static/img/flag/'); ?>/en.png">
                                </a>
                            </li>

                            <li>
                                <a href ng-click="$locales.changeLang('ru')" style="padding: 20px 0 5px 5px;">
                                    <img src="<?php #echo base_url('static/img/flag/'); ?>/ru.png">
                                </a>
                            </li>
                        </ul>
                    </div> -->

                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav" ng-cloak>
                            <li>
                                <a href="http://tmgkaz.kz" style="padding: 12px 0 5px 5px;">
                                    <img style="height: 50px;" src="<?php echo base_url('static/img/karakum-logo-8.png/'); ?>">
                                </a>
                            </li>
                            <li ng-class="{'active': nav.url == current}" ng-repeat="nav in navs"
                            
                            >
                                <a href="<?php echo base_url('/'); ?>{{nav.url}}">
                                    {{'nav.'+nav.name | i18next}}
                                </a>
                            </li>
                            <li>
                                <a href ng-click="$locales.changeLang('en')" style="padding: 20px 0 5px 5px;">
                                    <img src="<?php echo base_url('static/img/flag/'); ?>/en.png">
                                </a>
                            </li>

                            <li>
                                <a href ng-click="$locales.changeLang('ru')" style="padding: 20px 0 5px 5px;">
                                    <img src="<?php echo base_url('static/img/flag/'); ?>/ru.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
        </div>
        <!--=== End Header v5 ===-->

<!--=== Collection Banner ===-->
    <!-- <div class="margin-bottom-60">
        <div class="owl-carousel owl-theme">
            <picture>
                <source class="owl-lazy" data-srcset="<?php #echo base_url('static/img/karakum-0.jpg'); ?>">
                <img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-0.jpg'); ?>">
            </picture>
            <picture>
                <source class="owl-lazy" data-srcset="<?php #echo base_url('static/img/karakum-1.jpg'); ?>">
                <img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-1.jpg'); ?>">
            </picture>
            <picture>
                <source class="owl-lazy" data-srcset="<?php #echo base_url('static/img/karakum-2.jpg'); ?>">
                <img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-2.jpg'); ?>">
            </picture>
            <picture>
                <source class="owl-lazy" data-srcset="<?php #echo base_url('static/img/karakum-3.jpg'); ?>">
                <img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-3.jpg'); ?>">
            </picture>
        </div>
    </div> -->
    <!-- <div id="owl-demo" class="owl-carousel owl-theme">
      <div class="item"><img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-0.jpg'); ?>"></div>
      <div class="item"><img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-1.jpg'); ?>"></div>
      <div class="item"><img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-2.jpg'); ?>"></div>     
      <div class="item"><img class="owl-lazy" data-src="<?php #echo base_url('static/img/karakum-3.jpg'); ?>"></div>     
    </div> -->
    <!-- <div class="alp-slick-class">
      <div class="item"><img src="<?php #echo base_url('static/img/karakum-0.jpg'); ?>"></div>
      <div class="item"><img src="<?php #echo base_url('static/img/karakum-1.jpg'); ?>"></div>
      <div class="item"><img src="<?php #echo base_url('static/img/karakum-2.jpg'); ?>"></div>     
      <div class="item"><img src="<?php #echo base_url('static/img/karakum-3.jpg'); ?>"></div>
    </div> -->

<!-- <section class="alp-slick-class slider margin-bottom-50" data-sizes="100vw">
        <div>
          <img src="<?php #echo base_url('static/img/karakum-0.jpg'); ?>">
        </div>
        <div>
          <img src="<?php #echo base_url('static/img/karakum-1.jpg'); ?>">
        </div>
        <div>
          <img src="<?php #echo base_url('static/img/karakum-2.jpg'); ?>">
        </div>
        <div>
          <img src="<?php #echo base_url('static/img/karakum-3.jpg'); ?>">
        </div>
  </section> -->

<!-- <div class="alp-bxslider-class">
  <div><img src="<?php #echo base_url('static/img/karakum-0.jpg'); ?>" title="Funky roots"></div>
  <div><img src="<?php #echo base_url('static/img/karakum-1.jpg'); ?>" title="The long and winding road"></div>
  <div><img src="<?php #echo base_url('static/img/karakum-2.jpg'); ?>" title="Happy trees"></div>
  <div><img src="<?php #echo base_url('static/img/karakum-3.jpg'); ?>" title="Happy trees"></div>
</div> -->

<!-- <ul id="imageGallery">
  <li data-src="<?php #echo base_url('static/img/karakum-0.jpg'); ?>">
    <img src="<?php #echo base_url('static/img/karakum-0.jpg'); ?>" />
  </li>
  <li data-src="<?php #echo base_url('static/img/karakum-1.jpg'); ?>">
    <img src="<?php #echo base_url('static/img/karakum-1.jpg'); ?>" />
  </li>
  <li data-src="<?php #echo base_url('static/img/karakum-2.jpg'); ?>">
    <img src="<?php #echo base_url('static/img/karakum-2.jpg'); ?>" />
  </li>
  <li data-src="<?php #echo base_url('static/img/karakum-3.jpg'); ?>">
    <img src="<?php #echo base_url('static/img/karakum-3.jpg'); ?>" />
  </li>
</ul> -->
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo base_url('static/img/karakum-0.jpg'); ?>" />
    </li>
    <li>
      <img src="<?php echo base_url('static/img/karakum-1.jpg'); ?>" />
    </li>
    <li>
      <img src="<?php echo base_url('static/img/karakum-2.jpg'); ?>" />
    </li>
    <li>
      <img src="<?php echo base_url('static/img/karakum-3.jpg'); ?>" />
    </li>
  </ul>
</div>
    <!--=== End Collection Banner ===-->

<!--=== Slider ===-->
<!--div style="overflow: visible;" class="tp-banner-container margin-bottom-60">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2 style="margin-top: -30px;">
                <i>{{'slide.s0.h0' | i18next}}</i> <br />
                <i>{{'slide.s0.h1' | i18next}}</i> <br />
                <i>{{'slide.s0.h2' | i18next}}</i> <br />
                <i>{{'slide.s0.h3' | i18next}}</i> <br />
                <i>{{'slide.s0.h4' | i18next}}</i> <br />
                <i>{{'slide.s0.h5' | i18next}}</i>
            </h2>
            <div class="da-img" style="margin-top: -80px;text-align: left;">
                <p style="margin-top: -230px;">
                    <i>{{'slide.s0.p0' | i18next}}</i><br/>
                    <i>{{'slide.s0.p1' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p2' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p3' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p4' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p5' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p6' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p7' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p8' | i18next}}</i>
                </p>
            </div>
        </div>
        <div class="da-slide">
            <h2>
                <i>{{'slide.s1.h0' | i18next}}</i> <br />
                <i>{{'slide.s1.h1' | i18next}}</i> <br />
                <i>{{'slide.s1.h2' | i18next}}</i>
            </h2>
            <p>
                <i>{{'slide.s1.p0' | i18next}}</i> <br /> 
                <i>{{'slide.s1.p1' | i18next}}</i>
            </p>
            <div class="da-img">
                <img src="<?php #echo base_url('static/img/eq0.jpg'); ?>" style="height: 280px"/>
                <img src="<?php #echo base_url('static/img/eq4.jpg'); ?>" style="height: 280px"/>
            </div>
        </div>
        <div class="da-slide">
           <h2>
                <i>{{'slide.s2.h0' | i18next}}</i> <br />
                <i>{{'slide.s2.h1' | i18next}}</i>
            </h2>
            <p>
                <i>{{'slide.s2.p0' | i18next}}</i> <br />
                <i>{{'slide.s2.p1' | i18next}}</i>
            </p>
            <div class="da-img">
                <img src="<?php #echo base_url('static/img/topdrive.png'); ?>" style="margin-top: -40px;width: 600px;" />
            </div>
        </div>

        <div class="da-slide">
            <h2>
                <i>{{'slide.s3.h0' | i18next}}</i> <br />
                <i>{{'slide.s3.h1' | i18next}}</i> <br />
                <i>{{'slide.s3.h2' | i18next}}</i>
            </h2>
            <p>
                <i>{{'slide.s3.p0' | i18next}}</i> <br />
                <i>{{'slide.s3.p1' | i18next}}</i> <br />
                <i>{{'slide.s3.p2' | i18next}}</i> 
            </p>
            <div class="da-img">
                <img src="<?php #echo base_url('static/img/deal.png'); ?>" style="width: 600px;" />
            </div>
        </div>
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
    </div>
</div-->
<!--=== End Slider ===-->