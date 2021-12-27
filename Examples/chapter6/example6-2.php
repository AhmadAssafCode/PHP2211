<?php
session_start();  #start a session

if (!isset($_SESSION['count']))
    $_SESSION['count'] = 1;
else
    $_SESSION['count']++;
?>


<html>

<head>
    <title>Count Visits</title>
</head>

<body>
    <h2>You have visited this page <?php echo ($_SESSION['count']); ?> times in this session</h2>
    اعمل تحديث للصفحة <br>
    F5 <br>
    Refresh the page to see changes<br>
</body>

</html>