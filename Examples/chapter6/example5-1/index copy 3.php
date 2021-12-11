<!DOCTYPE html>
<html lang="en">
<?php $page_title="Home"?>

<?php include("template/head.php");?>

<body>

<h2>CSS Layout Float</h2>
<p>In this example, we have created a header, two columns/boxes and a footer. On smaller screens, the columns will stack on top of each other.</p>
<p>Resize the browser window to see the responsive effect (you will learn more about this in our next chapter - HTML Responsive.)</p>


<?php include("template/header.php");?>

<section>
<?php include("template/nav.php");?>

  <article>
    <h1>Article 1: London</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<?php include("template/footer.php");?>

</body>
</html>

