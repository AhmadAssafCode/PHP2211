<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 40%;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;

    }

    th {
      border: 1px solid #ddd;
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;

    }
  </style>
</head>

<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db1";

  try {
    // connect to MYSQL Database using PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET["cid"])) {
      $cid = $_GET["cid"];
    } else {
      echo "no category was selected";
      exit();  // die ("no category was selected");
    }
    //select query
    //select query
    $sql = 'SELECT * FROM products WHERE cat_id = :cid';
    $result = $pdo->prepare($sql);
    $result->execute([':cid'=>$cid]);

    // get all product records as associative array
    $products = $result->fetchAll(PDO::FETCH_ASSOC);

    if ($products) {
      echo '<h2>List of Products:</h2>';
      // show the products

      echo "<table>";
      echo "<th>id</th>";
      echo "<th>name</th>";
      echo "<th>description</th>";
      echo "<th>price</th>";
      echo "<th>category</th>";
      foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product['id'] . '</td>';
        echo "<td>" . $product['name'] . '</td>';
        echo "<td>" . $product['description'] . '</td>';
        echo "<td>" . $product['price'] . '</td>';
        echo "<td>" . $product['cat_id'] . '</td>';
        echo "</tr>";
      }
      echo "</table>";
    }
    //catch errors
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $pdo = null; //close PDO connection 
  ?>
</body>

</html>