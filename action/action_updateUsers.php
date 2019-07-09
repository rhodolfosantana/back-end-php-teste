<?php 
	$id = $_SESSION['id'];
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['id_cor']) && isset($_POST['idade'])){
 		

 		$nome = $_POST['nome_usuario'];
		$idade = $_POST['idade'];
		$idCor = $_POST['id_cor'];


 		
 		$sql = "UPDATE users SET( id = ?, name = ?, idade = ?, colors_id = ?) WHERE id=?";
 		$query = $connection->prepare($sql);
 		$query->bindParam(1, $id);
		$query->bindParam(2, $nome);
		$query->bindParam(3, $idade);
		$query->bindParam(4, $idCor);
 		$stmt = $query->execute();
		header('Location: ../index.php');
	} else {

 		echo "Não cadastrou";

 	}

 
 	
	
  ?> 