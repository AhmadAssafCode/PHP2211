<!DOCTYPE html>
<html>

<body>
  <?php
  //Example 4-4
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db1";

  try {
    // connect to MYSQL Database using PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Update record 5
    $id = 5;
    $sql = 'UPDATE products SET name=:name,price=:price,cat_id=:cid
    WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $res = $statement->execute([':id' => $id, ':name' => 'Laptop 8888', ':price' => 7000, ':cid' => 1]);
    if ($res) {
      echo "The product $id has been updated successfully!";
    }
    /*     // bind params
    $statement->bindParam(':publisher_id', $publisher['publisher_id'], PDO::PARAM_INT);
    $statement->bindParam(':name', $publisher['name']);

    // execute the UPDATE statment
    if ($statement->execute()) {
      echo 'The publisher has been updated successfully!';
    }
 */


  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $pdo = null; //close PDO connection 
  ?>
</body>

</html>