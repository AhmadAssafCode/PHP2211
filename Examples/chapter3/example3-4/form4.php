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

//define variables
$nameRrr = $emailRrr = $genderErr = '';
$name = $email = $gender = '';

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

    //=========== gender validation =========================
    if (empty($_POST["gender"]))
        $genderErr = "Gender is required";
    else
        $gender = $_POST["gender"];
    //===========end gender validation ====================		

} //end if
?>

<body>
    <h2>Example 3-4: PHP Form Validation</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name: <input type="text" name="name" value="<?= $name ?>">
        <span class="error">* <?php echo $nameRrr; ?></span>
        <br><br>

        E-mail: <input type="text" name="email" value="<?= $email ?>">
        <span class="error">* <?php echo $emailRrr; ?> </span>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>>Male
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>Female
        <span class="error">* <?php echo $genderErr; ?> </span>
        <br><br>

        <input type="submit">
    </form>

    <h2>Your Data </h2>
    
    <?php //show data
    echo "Name: $name <br/>";
    echo "Email: $email<br/>";
    echo "Gender: $gender<br/>";
    ?>
</body>

</html>