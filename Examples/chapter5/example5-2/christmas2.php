<!DOCTYPE html>
<html lang="en">
<?php $page_title = "Home" ?>

<?php include("includes/head.php"); ?>

<body>
  <?php include("includes/header.php"); ?>
  <main>
    <?php

    $imgs = array('img7.jpg', 'img8.jpg', 'img9.jpg', 'img10.jpg', 'img11.jpg', 'img12.jpg');
    ?>

<div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/<?=$imgs[0]?>" class="d-block w-100 img-fluide"  style="width:100%;height:400px;object-fit:cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/<?=$imgs[1]?>" class="d-block w-100 img-fluide" style="width:100%;height:400px;object-fit:cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/<?=$imgs[2]?>" class="d-block w-100 img-fluide" style="width:100%;height:400px;object-fit:cover;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>










    <div class="container">
      <div class="row">
      <?PHP
      foreach ($imgs as $img) {
      
      ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card " style1="width: 18rem;">
            <img src="images/<?= $img ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

      <?php
       
      } ?>
      </div>
    </div>
    </div>



    </div>
  </main>
  <?php include("includes/footer.php"); ?>

</body>

</html>