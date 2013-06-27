<?php
$db = new mysqli('localhost', 'root', '', 'clacktastic');

/* check connection */
if ($db->connect_error) {
	printf("Connect failed: %s\n", $db->connect_error);
	exit();
}

$new_title = $_POST['new_title'];
$old_title = $_POST['old_title'];

$stmt = $db->prepare("UPDATE research SET title=?, paragraph=? WHERE title=?");
$stmt->bind_param('sss', $new_title, $paragraph, $old_title);

$paragraph = $_POST['paragraph'];

if($stmt->execute() == false)
{
	printf("Statement failed\n");
	exit();
}

$stmt->close();
$db->close();
?>
