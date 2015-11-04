<?php
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$country = "'France'";
$query = "SELECT * FROM `customers` WHERE country=$country";
$result = $conn->query($query);
if (!$result) die ($conn->error);

$rows = $result->num_rows;
echo "<strong>Clients francais:</strong><br><br>";
for ($j = 0 ; $j < $rows ; ++$j) {
	$result->data_seek($j);
	$row = $result->fetch_row();
	echo $row[1]."<br>".$row[3]." ".$row[2]."<br>".$row[4]."<br>".$row[5]."<br>".$row[7].", ".$row[10]." ".$row[9]."<br><br>";
}
$result->close();
$conn->close();

?>