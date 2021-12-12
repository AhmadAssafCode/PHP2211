<!DOCTYPE html>
<html lang="en">
<?php $page_title = "Home" ?>

<?php include("includes/head.php"); ?>
<?php

// session_start();  
if (!isset($_SESSION['username']))
{

  $_SESSION['refpage'] = $_SERVER['REQUEST_URI'];

  header("location:login.php");
}
?>

<body>

  <?php include("includes/header.php"); ?>


  <main>

    <h1>Dashboard</h1>
    <p>Secured Page for registered users only</p>
  </main>
  <?php include("includes/footer.php"); ?>

</body>

</html>