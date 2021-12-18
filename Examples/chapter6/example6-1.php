<!DOCTYPE html>

<?php
// Default Values
$language = '';
$color = 'white';
if (isset($_COOKIE['language']))
    $language = $_COOKIE['language'];
if (isset($_COOKIE['color']))
    $color = $_COOKIE['color'];
// Check if form submission has happened:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['language'])) {
        $language = $_POST['language'];
        setcookie('language',  $language); //, time() + (86400 * 30), "/"); // 86400 = 1 day

    }

    if (!empty($_POST['color'])) {
        $color = $_POST['color'];
        setcookie('color',  $color, time() + (86400 * 30)); // 86400 = 1 day
    }
}


?>



<html>

<head>
    <title>Coockies</title>
</head>

<body style="background:<?= $color ?>">

    <h2> Example 6-1 Cookies</h2>

    <?php
    if ($language == "en")
        echo "<h1> Welcome</h1>";
    elseif ($language == "fr")
        echo "<h1> Bienvenue</h1>";
    elseif ($language == "ar")
        echo "<h1> أهلاً وسهلاً</h1>";
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Color: <input type="text" name="color" value="<?= $color ?>"><br><br>
        Language: <select name="language">
            <option value="ar" <?= $language == 'ar' ? 'selected' : '' ?>>العربية</option>
            <option value="en" <?= $language == 'en' ? 'selected' : '' ?>>English</option>
            <option value="fr" <?= $language == 'fr' ? 'selected' : '' ?>>French</option>

        </select>
        <input type="submit" name="submit">
    </form>

</body>

</html>