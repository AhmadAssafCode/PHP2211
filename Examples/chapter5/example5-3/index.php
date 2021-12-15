<!DOCTYPE html>
<html lang="en">
<?php $page_title = "Home" ?>

<?php include("templates/head.php"); ?>

<body>

  <?php include("templates/header.php"); ?>


  <main>
    <article>
      <h1>Home</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>
    <div class="container">

      <div class="row">
        <div class="col-3 bg-primary ">
          this is column 1
        </div>
        <div class="col-6 bg-success">
          this is column 2
        </div>
        <div class="col-3 bg-warning ">
          this is column 3
        </div>
      </div>
      <div class="row mt-5">
        <div class=" col-12 bg-primary ">
          this is column 1
        </div>
        <div class="  col-6  py-5 ps-5 bg-success">
          this is column 2
        </div>
        <div class="col-6 bg-warning py-auto ">
          this is column 3
        </div>
      </div>

    </div>
    <div class="row mt-5">
      <div class="col-3 bg-primary  mx-auto">
        this is column 1
      </div>
    </div>
  </main>
  <?php include("templates/footer.php"); ?>

</body>

</html>