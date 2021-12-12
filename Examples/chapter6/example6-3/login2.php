<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "db1";
$message = "";
try {
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = 'All fields are required';
        } else {
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username'     =>     $_POST["username"],
                    'password'     =>     $_POST["password"]
                )
            );
            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                header("location:login_success.php");
            } else {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head> -->
<?php include("includes/head.php"); ?>

<body class="bg1-primary">

    <?php include("includes/header.php"); ?>


    <div class="container" style="width:500px;">
        <?php
        if (isset($message)) {
            echo '<label class="text-danger">' . $message . '</label>';
        }
        ?>
        <h3> Login</h3><br />
        <form method="post">
            <label>Username</label>
            <input type="text" name="username" class="form-control" />
            <br />
            <label>Password</label>
            <input type="password" name="password" class="form-control" />
            <br />
            <input type="submit" name="login" class="btn btn-info" value="Login" />
        </form>
    </div>

    <?php include("includes/footer.php"); ?>

</body>

</html>