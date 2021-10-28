<?php
require "config.php";

require "lib/category.php";

$data =  select();


// print_r($data);


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS - Blog list</title>

    <!-- Styles -->
    <link href="assets/front/css/core.min.css" rel="stylesheet">
    <link href="assets/front/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/front/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body>


    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">
        
        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="index.html">
            <img class="logo-default" src="assets/img/logo.png" alt="logo">
            <img class="logo-inverse" src="assets/img/logo-light.png" alt="logo">
          </a>
        </div>


        <div class="topbar-right">
          <ul class="topbar-nav nav">
          <?php foreach($data as $nav): ?>
            <li class="nav-item"><a class="nav-link" href="index.html"><?= $nav['title']; ?></a></li>
          <?php endforeach; ?>
          </ul>
        </div>

      </div>
    </nav>
    <!-- END Topbar -->



    <!-- Header -->
    <header class="header header-inverse" style="background-color: #9ac29d">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Latest Blog Posts</h1>
            <p class="fs-20 opacity-70">Read and get updated on how we progress.</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->




    <!-- Main container -->
    <main class="main-content">




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Basic cards
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray">
        <div class="container">

          <div class="card mb-30">
            <div class="row">
              <div class="col-12 col-md-4 align-self-center">
                <a href="blog-single.html"><img src="assets/img/blog-1.jpg" alt="..."></a>
              </div>

              <div class="col-12 col-md-8">
                <div class="card-block">
                  <h4 class="card-title">New features will add to dashboard soon</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                  <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="card mb-30">
            <div class="row">
              <div class="col-12 col-md-4 align-self-center">
                <a href="blog-single.html"><img src="assets/img/blog-2.jpg" alt="..."></a>
              </div>

              <div class="col-12 col-md-8">
                <div class="card-block">
                  <h4 class="card-title">New features will add to dashboard soon</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                  <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>



          <div class="card mb-30">
            <div class="row">
              <div class="col-12 col-md-4 align-self-center">
                <a href="blog-single.html"><img src="assets/img/blog-3.jpg" alt="..."></a>
              </div>

              <div class="col-12 col-md-8">
                <div class="card-block">
                  <h4 class="card-title">We've just passed 1,000 customers!</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                  <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>




          <div class="card mb-30">
            <div class="row">
              <div class="col-12 col-md-4 align-self-center">
                <a href="blog-single.html"><img src="assets/img/blog-4.jpg" alt="..."></a>
              </div>

              <div class="col-12 col-md-8">
                <div class="card-block">
                  <h4 class="card-title">We updated to version 1.1</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                  <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>




          <div class="card mb-30">
            <div class="row">
              <div class="col-12 col-md-4 align-self-center">
                <a href="blog-single.html"><img src="assets/img/blog-5.jpg" alt="..."></a>
              </div>

              <div class="col-12 col-md-8">
                <div class="card-block">
                  <h4 class="card-title">Read a getting started tutorial</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                  <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>




          <div class="card mb-30">
            <div class="row">
              <div class="col-12 col-md-4 align-self-center">
                <a href="blog-single.html"><img src="assets/img/blog-6.jpg" alt="..."></a>
              </div>

              <div class="col-12 col-md-8">
                <div class="card-block">
                  <h4 class="card-title">TheSaaS has just started!</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                  <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>


          <nav class="flexbox mt-30">
            <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
            <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
          </nav>


        </div>
      </section>






    </main>
    <!-- END Main container -->






    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-lg-3">
            <p class="text-center text-lg-left">
              <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            </p>
          </div>

          <div class="col-12 col-lg-6">
            <ul class="nav nav-primary nav-hero">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="block-feature.html">Features</a>
              </li>
              <li class="nav-item hidden-sm-down">
                <a class="nav-link" href="page-pricing.html">Pricing</a>
              </li>
              <li class="nav-item hidden-sm-down">
                <a class="nav-link" href="page-contact.html">Contact</a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-lg-3">
            <div class="social text-center text-lg-right">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->



    <!-- Scripts -->
    <script src="assets/front/js/core.min.js"></script>
    <script src="assets/front/js/thesaas.min.js"></script>
    <script src="assets/front/js/script.js"></script>

  </body>
</html>
