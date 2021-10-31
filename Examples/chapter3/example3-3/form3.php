<html>

<head>
    <title>Form Validation</title>

    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<?php   //Form Validation Example by Ahmad Assaf
$nameRrr = '';
$emailRrr = '';

$name = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //===========name validation =======================
    if (empty($_POST["name"]))
        $nameRrr = "Name is required";
    else
        $name = $_POST["name"];
    //===========end name validation ====================		

    //===========email validation =======================
    if (empty($_POST["email"]))
        $emailRrr = "Email is required";
    else {
        $email = $_POST["email"];
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
            $emailRrr = "Invalid email format";
    }
    //=========== end email validation ====================		

} //end if
?>

<body>
    <h2>Example 3-3: PHP Form Validation</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name: <input type="text" name="name" value="<?= $name ?>">
        <span class="error">* <?php echo $nameRrr; ?></span>
        <br><br>

        E-mail: <input type="text" name="email" value="<?= $email ?>">
        <span class="error">* <?php echo $emailRrr; ?> </span>
        <br><br>
        <input type="submit">
    </form>
    <h2>Your Data </h2>
    <?php //show data
    echo "Name: $name <br/>";
    echo "Email: $email<br/>";
    ?>
</body>

</html>