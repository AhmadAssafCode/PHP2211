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

<?php
//Students Array which includes associative arrays for each student
$students = array(
    array('name' => 'Ali Salem', 'major' => 'IT', 'average' => '90'),
    array('name' => 'Noor Khalil', 'major' => 'Multimedia', 'average' => '85'),
    array('name' => 'Saed Saleh', 'major' => 'IT', 'average' => '92'),
    array('name' => 'Maram Saber', 'major' => 'IT', 'average' => '77'),
    array('name' => 'Sami Rateb', 'major' => 'Physiotherapy', 'average' => '97'),
    array('name' => 'Salma Khalil', 'major' => 'Multimedia', 'average' => '79'),

);

//return Max Average
function getMaxAverage($stdArr)
{
    $max = 0;
    foreach ($stdArr as $std)
        if ($std['average'] > $max) //compares max to each average in the array
            $max = $std['average'];
    return $max;
}

//يعيد اكبر معدل من نفس التخصص
function getMaxInMajor($stdArr, $major)
{
    $max = 0;
    foreach ($stdArr as $std)
        //compares max to each average in the array for same major
        if ($std['major'] == $major && $std['average'] > $max)
            $max = $std['average'];
    return $max;
}
?>

<body>
    <h2>Students Table by Ahmad Assaf </h2>
    <table style="border: 1px solid #ddd;">
        <tr>
            <th> Student Name</th>
            <th> Major</th>
            <th> Average</th>
        </tr>
        <?php
        foreach ($students as $std) {
            echo '<tr>';
            echo '<td>' . $std['name'] . '</td>';
            echo '<td>' . $std['major'] . '</td>';
            echo '<td>' . $std['average'] . '</td>';
            echo '</tr>';
        }

        ?>

    </table>
    <h3>The Max Average: <?= getMaxAverage($students) ?></h3>
    <h3>The Max Average in IT: <?= getMaxInMajor($students, 'IT') ?></h3>
    <h3>The Max Average in Multimedia: <?= getMaxInMajor($students, 'Multimedia') ?></h3>
</body>

</html>

<div style="border-style: dashed; margin-right:50%;padding:20px;background:#FEFFCC">
    <h3>You have learned in this example:</h3>
    <ol>
        <li> create multidimentional & associative array
        <li> define functions in php
        <li> find max number in array
        <li> use foreach statement
        <li> design html table
        <li> CSS
    </ol>

    <b>تحياتي
        <br>
        أ. أحمد عساف
    </b>
</div>