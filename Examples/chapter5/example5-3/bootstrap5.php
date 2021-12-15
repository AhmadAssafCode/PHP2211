<!DOCTYPE html>
<html lang="en">
<?php $page_title = "Home" ?>

<?php include("templates/head.php"); ?>
<style>
  span {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
    background-color: #f9f9f9;
  }
</style>




<body>
  <?php include("templates/header.php"); ?>
  <main>
    <div class="container">

      <h5>Bootstrap 5</h5>
      <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
      <div class="row1">

        <h5>Colors</h5>
        <a href="https://www.w3schools.com/bootstrap5/bootstrap_colors.php">https://www.w3schools.com/bootstrap5/bootstrap_colors.php</a>
        <br>
        <br>
        <h5>Images</h5>
        <a href="https://www.w3schools.com/bootstrap5/bootstrap_images.php">
          https://www.w3schools.com/bootstrap5/bootstrap_images.php</a>

        <br>
        <br>
        https://www.w3schools.com/bootstrap5/bootstrap_utilities.php


        <br>
        <br>
        <h5>Margin, Padding, Borders</h5>

        <a href="https://www.w3schools.com/bootstrap5/bootstrap_utilities.php">
          https://www.w3schools.com/bootstrap5/bootstrap_utilities.php
        </a>
        <br>
        <br>
        <textarea rows="8" cols="70" disabled>
<span class="border border-1"></span>
<span class="border border-2"></span>
<span class="border border-3"></span>
<span class="border border-4"></span>
<span class="border border-5 border-danger"></span>
<span class="border-bottom border-5 border-danger"></span>
</textarea>
        <br>
        <span class="border border-1"></span>
        <span class="border border-2"></span>
        <span class="border border-3"></span>
        <span class="border border-4"></span>
        <span class="border border-5 border-danger"></span>
        <span class="border-bottom border-5 border-danger"></span>




        <br>
        <br>
        <h5>Margin and Padding</h5>
        <pre>
        Spacing
        Bootstrap 5 has a wide range of responsive margin and padding utility classes. They work for all breakpoints: xs (<=576px), sm (>=576px), md (>=768px), lg (>=992px), xl (>=1200px) or xxl (>=1400px)):

          The classes are used in the format: {property}{sides}-{size} for xs and {property}{sides}-{breakpoint}-{size} for sm, md, lg, xl and xxl.

          Where property is one of:

          m - sets margin
          p - sets padding
          Where sides is one of:

          t - sets margin-top or padding-top
          b - sets margin-bottom or padding-bottom
          s - sets margin-left or padding-left
          e - sets margin-right or padding-right
          x - sets both padding-left and padding-right or margin-left and margin-right
          y - sets both padding-top and padding-bottom or margin-top and margin-bottom
          blank - sets a margin or padding on all 4 sides of the element
          Where size is one of:

          0 - sets margin or padding to 0
          1 - sets margin or padding to .25rem
          2 - sets margin or padding to .5rem
          3 - sets margin or padding to 1rem
          4 - sets margin or padding to 1.5rem
          5 - sets margin or padding to 3rem
          auto - sets margin to auto


          padding examples:
            p-2
            pt-3 
            p-md-4 
            p-lg-5  
            pb-md-2
            ps-lg-2
            pe-xl-2
            px-md-3
            py-xl-3


          Margin examples:
             m-2
             mt-3 
             m-md-4 
             m-lg-5  
             mb-md-2
             ms-lg-2
             me-xl-2
             mx-md-3
             my-xl-3
             mx-auto

        </pre>









      </div>
    </div>

  </main>
  <?php include("templates/footer.php"); ?>



</body>

</html>