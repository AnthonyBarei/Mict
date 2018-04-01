<?php require_once('./views/base.php'); ?>

  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/images/carrousel/carrouselP1.jpg">
        </div>

        <div class="item">
          <img src="assets/images/carrousel/carrouselP2.jpg">
        </div>

        <div class="item">
          <img src="assets/images/carrousel/carrouselP3.jpg">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  <hr/>

  <?php require_once('./views/quoi.php'); ?>
  <?php require_once('./views/xp.php'); ?>
  <?php require_once('./views/contact.php'); ?>
  <?php require_once('./views/faq.php'); ?>
  <?php require_once('./views/partner.php'); ?>
