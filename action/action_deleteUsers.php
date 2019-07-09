<?php 
require "action_connection.php";
if(isset($_GET['id'])){
	$id_users = $_GET['id'];

	$delete = $connection->prepare("DELETE FROM users WHERE id_user = ?");
	$delete->bindParam(1,$id_users);
	$delete->execute();

	header('location:../index.php');

}

?>