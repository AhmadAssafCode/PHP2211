<!DOCTYPE html>
<html>

<body>
  <?php
  //Example 4-6
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db1";

  try {
    // connect to MYSQL Database using PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Insert new record
    $sql = 'INSERT INTO products (name,price,cat_id) VALUES (:name,:price,:cid)';
    $statement = $pdo->prepare($sql);
    $statement->execute([':name'=>'Laptop 3355',':price'=>7000,':cid'=>1]);

    //get last id
    $id = $pdo->lastInsertId();
    echo 'The product id ' . $id . ' was inserted';

  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $pdo = null; //close PDO connection 
  ?>
</body>

</html>