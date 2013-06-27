<?php
$db = new mysqli('localhost', 'root', '', 'clacktastic');

/* check connection */
if ($db->connect_error) {
	printf("Connect failed: %s\n", $db->connect_error);
	exit();
}

$new_title = $_POST['title'];
$old_title = $_POST['edit'];

$stmt = $db->prepare("UPDATE research SET title=?, paragraph=? WHERE title=?");
$stmt->bind_param('sss', $new_title, $paragraph, $old_title);

$paragraph = $_POST['paragraph'];

if($stmt->execute() == false)
{
	printf("Statement failed 59\n");
	exit();
}

$stmt->close();
$db->close();
?>
