<!DOCTYPE html>
<html>
<head>
<title>Test ex</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Random query</h2>
<?php
$mysqli = new mysqli("mysql", "root", "root", "test_ex");
$result = $mysqli->query("SELECT * FROM test INNER JOIN test1 ON test.ID = test1.ID ORDER BY RAND() LIMIT 1");
$row = mysqli_fetch_array($result);
echo $row[1]." ".$row[3]." ".gethostname();
mysqli_close($mysqli);
?>
</body>
</html>
