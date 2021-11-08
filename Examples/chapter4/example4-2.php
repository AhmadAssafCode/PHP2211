<!DOCTYPE html>
<html>

<body>
  <table style='border: solid 1px black;'>
    <tr>
      <th>Id</th>
      <th>Product</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
    <?php


    class TableRows extends RecursiveIteratorIterator
    {
      function __construct($it)
      {
        parent::__construct($it, self::LEAVES_ONLY);
      }

      function current()
      {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current() . "</td>";
      }

      function beginChildren()
      {
        echo "<tr>";
      }

      function endChildren()
      {
        echo "</tr>" . "\n";
      }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT id, name, description,price FROM products");
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

      foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
   // $conn = null;
    ?>

  </table>

</body>

</html>