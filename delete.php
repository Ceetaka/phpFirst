<?php
// include "Database.php";
include "User.php";
$id = $_GET['id'];

$del = new User;

$del->delete($id);
?>