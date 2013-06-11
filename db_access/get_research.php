<?php
$db = new mysqli('localhost', 'clack', 'password', 'clacktastic');

/* check connection */
if ($db->connect_error) {
	printf("Connect failed: %s\n", $db->connect_error);
	exit();
}

$stmt = $db->prepare("SELECT * FROM research");

if($stmt->execute() == false)
{
	printf("Failed\n");
	exit();
}

$result = $stmt->get_result();

$stmt->close();
$db->close();
?>
