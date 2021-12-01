<!DOCTYPE html>
<html>

<body>
  <?php
  //Example 4-8
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db1";

  try {
    // connect to MYSQL Database using PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Delete record 7
    $id = 7;
    $sql = 'DELETE FROM products WHERE id=?';
    // prepare the statement for execution
    $statement = $pdo->prepare($sql);
    // $statement->bindParam(':id', $id, PDO::PARAM_INT);

    // execute the statement
    if ($statement->execute([$id])) {
      echo 'product id ' . $id . ' was deleted successfully.<br>';
      $no = $statement->rowCount();
      echo " No of records deleted = " . $no;
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