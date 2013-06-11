<?php
$db = new mysqli('localhost', 'root', '', 'clacktastic');

/* check connection */
if ($db->connect_error) {
	printf("Connect failed: %s\n", $db->connect_error);
	exit();
}

$stmt = $db->prepare("DELETE FROM research WHERE title=?");
$stmt->bind_param('s', $title);

$title = $_POST['title'];

if($stmt->execute() == false)
{
	printf("Statement failed\n");
	exit();
}

$stmt->close();
$db->close();
?>
