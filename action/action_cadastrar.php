<?php 
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['id_cor']) && isset($_POST['idade'])){
 		

 		$nome = $_POST['nome_usuario'];
		$idade = $_POST['idade'];
		$idCor = $_POST['id_cor'];

 		
 		$sql = "INSERT INTO users (name, idade, colors_id) 
						VALUES( ?, ?, ?)";
 		$query = $connection->prepare($sql);
 		$query->bindParam(1, $nome);
		$query->bindParam(2, $idade);
		$query->bindParam(3, $idCor);
 		$stmt = $query->execute();
		header('Location: ../index.php');
	} else {

 		echo "Não cadastrou";

 	}
	
  ?> 