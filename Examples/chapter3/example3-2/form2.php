<html>

<head>
    <title>Form 2</title>
</head>

<body>

    <h2> Example 3-2 Form2</h2>
    <?php
    // Check if form submission has happened:
    if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is <?php echo $_POST["email"]; ?>
    <?php }  //end if
    else {  ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            Name: <input type="text" name="name"><br><br>
            E-mail: <input type="text" name="email"><br><br>
            <input type="submit" name="submit">
        </form>
    <?php } //end else 
    ?>
</body>

</html>