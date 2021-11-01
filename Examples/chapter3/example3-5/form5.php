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
$nameRrr = $emailRrr = $genderErr = $carErr = $bdateErr = '';
$name = $email = $gender = $car = $bdate = $volume = $quantity = $ip = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //===========name validation ======================
    if (empty($_POST["name"]))
        $nameRrr = "Name is required";
    else
        $name = $_POST["name"];
    //===========end name validation ==================		

    //===========email validation =====================
    if (empty($_POST["email"]))
        $emailRrr = "Email is required";
    else {
        $email = $_POST["email"];
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
            $emailRrr = "Invalid email format";
    }
    //=========== end email validation =================		

    //=========== gender validation ====================
    if (empty($_POST["gender"]))
        $genderErr = "Gender is required";
    else
        $gender = $_POST["gender"];
    //===========end gender validation ==================	

    //=========== car validation ========================
    if (empty($_POST["car"]))
        $carErr = "Car is required";
    else
        $car = $_POST["car"];
    //===========end car validation ======================		

    //=========== bdate validation =======================
    if (empty($_POST["bdate"]))
        $bdateErr = "Birthdate is required";
    else
        $bdate = $_POST["bdate"];
    //===========end bdate validation ====================

    //=========== ip validation ==========================
    if (empty($_POST["ip"]))
        $ip = "Unknown";
    else
        $ip = $_POST["ip"];
    //===========end ip validation =======================

    //=========== volume validation ======================
    if (!empty($_POST["volume"]))
        $volume = $_POST["volume"];
    //===========end volume validation ===================

    //=========== quantity validation ====================
    if (!empty($_POST["quantity"]))
        $quantity = $_POST["quantity"];
    //===========end volume validation ===================

} //end if
?>

<body>
    <h2>Example 3-5: PHP Form Validation</h2>
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

        <label for="car">Choose a car:</label>

        <select name="car" id="car">
            <option value="" disabled selected hidden>Select your car</option>
            <option value="volvo" <?= $car == 'volvo' ? 'selected' : '' ?>>Volvo</option>
            <option value="saab" <?= $car == 'saab' ? 'selected' : '' ?>>Saab</option>
            <option value="mercedes" <?= $car == 'mercedes' ? 'selected' : '' ?>>Mercedes</option>
            <option value="audi" <?= $car == 'audi' ? 'selected' : '' ?>>Audi</option>
        </select>
        <span class="error">* <?php echo $carErr; ?> </span>
        <br><br>
        <input type="date" name="bdate" value="<?= $bdate ?>">
        <span class="error">* <?php echo $bdateErr; ?> </span>
        <br><br>

        <label for="vol">Volume (between 0 and 50):</label>
        <input type="range" id="volume" name="volume" min="0" max="50" value="<?= $volume ?>">
        <br><br>

        <label for="quantity">Quantity (between 1 and 5):</label>
        <input type="number" id="quantity" name="quantity" min="1" max="5" value="<?= $quantity ?>">
        <br><br>

        <input type="hidden" name=ip value="<?= $_SERVER['REMOTE_ADDR'] ?>">

        <input type="submit">
    </form>

    <h2>Your Data </h2>

    <?php //show data
    echo "Name: $name <br>";
    echo "Email: $email<br>";
    echo "Gender: $gender<br>";
    echo "Car: " . $car . "<br>";
    echo "Birthdate: " . date('d/F/Y', strtotime($bdate)) . "<br>";
    echo "Volume: $volume <br>";
    echo "Quantity: $quantity <br>";
    echo "IP: $ip <br>";
    ?>
</body>

</html>