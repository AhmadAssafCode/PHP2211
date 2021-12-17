<!DOCTYPE html>
<html lang="en">
<?php $page_title = "Home" ?>

<?php include("templates/head.php"); ?>

<body>
  <?php include("templates/header.php"); ?>
  <main>
    <?php

    $imgs = array(
      'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg',
      'img6.jpg', 'img7.jpg', 'img8.jpg', 'img9.jpg', 'img10.jpg', 'img11.jpg', 'img12.jpg'
    );
    ?>

    <div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="images/<?= $imgs[7] ?>" class="d-block w-100 img-fluide" style="width:100%;height:600px;object-fit:cover;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/<?= $imgs[8] ?>" class="d-block w-100 img-fluide" style="width:100%;height:600px;object-fit:cover;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/<?= $imgs[10] ?>" class="d-block w-100 img-fluide" style="width:100%;height:600px;object-fit:cover;" alt="...">
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


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
    </div>







    <div class="container">
      <div class="row  row-cols-1 row-cols-md-2  row-cols-lg-3 row-cols-xl-4">
        <?PHP
        foreach ($imgs as $img) {

        ?>
          <div class="col">
            <div class="card " style="min-height: 400px;">
              <img src="images/<?= $img ?>" class="card-img-top" alt="..." style="height:300px;object-fit:cover;">
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
  <?php include("templates/footer.php"); ?>

</body>

</html>