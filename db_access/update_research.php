<?php
$db = new mysqli('localhost', 'clack', 'password', 'clacktastic');

/* check connection */
if ($db->connect_error) {
	printf("Connect failed: %s\n", $db->connect_error);
	exit();
}

$new_title = $_POST['new_title'];
$old_title = $_POST['old_title'];

if(strncmp($new_title, $old_title, 200))
{
	$stmt = $db->prepare("SELECT COUNT(*) FROM research WHERE title=?");
	$stmt->bind_param('s', $title);
	
	$title = $new_title;
	
	if($stmt->execute() == false)
	{
		printf("Statement failed\n");
		exit();
	}
	$result = $stmt->get_result();
	$row = $result->fetch_row();
	if($row[0] != 0)
	{
		printf("Invalid new title: in use\n");
		exit();
	}
	$row = array();
	$result->free();
	
	$title = $old_title;
	if($stmt->execute() == false)
	{
		printf("Statement failed\n");
		exit();
	}
	$result = $stmt->get_result();
	$row = $result->fetch_row();
	if($row[0] != 1)
	{
		printf("Invalid old title: no entry exists\n"
		exit();
	}
	$result->free();
	$stmt->close();
}

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
