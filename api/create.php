<?php

require('Dbconfig.php');

$post = $_POST;
$sql = "INSERT INTO items (title,description) Values ('".$post['title']."','".$post['description']."')";
$result = $mysqli->query($sql);
$sql= "SELECT * FROM items Order By id desc LIMIT 1";
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();
echo json_encode($data);
?>