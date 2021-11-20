<!DOCTYPE html>
<html>

<body>
  <?php
  //Example 4-5
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db1";

  if (isset($_GET["cid"])) {
    $cid = $_GET["cid"];
    echo isset($_GET["cid"]);
  } else {
    echo "no category was selected";
    //exit();
    // die ("no category was selected");
  }
  try {
    // connect to MYSQL Database using PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //select query
    $sql = 'SELECT * FROM products WHERE cat_id = ?';
    $result = $pdo->prepare($sql);
    $result->execute([$cid]);

    // get all products as associative array
    $products = $result->fetchAll(PDO::FETCH_ASSOC);

    if ($products) {
      echo '<h2>List of Products:</h2>';
      // show the products
      foreach ($products as $products) {
        echo $products['cat_id'] . '<br>';
        echo $products['id'] . '<br>';
        echo $products['name'] . '<br>';
        echo $products['description'] . '<br>';
        echo $products['price'] . '<br>';
        echo '-----------------------------<br>';
      }
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $pdo = null; //close PDO connection 

  ?>
</body>

</html>