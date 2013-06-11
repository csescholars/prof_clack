<?php

$db = new mysqli('localhost', 'root', '', 'clacktastic');

/* check connection */
if ($db->connect_error) {
	printf("Connect failed: %s\n", $db->connect_error);
	exit();
}

$stmt = $db->prepare("INSERT INTO research VALUES (?, NULL, ?)");
$stmt->bind_param('ss', $title, $paragraph);

$title = $_POST['title'];
$paragraph = $_POST['paragraph'];

if($stmt->execute() == false)
{
	printf("Statement failed\n");
	exit();
}

$stmt->close();
$db->close();
?>
