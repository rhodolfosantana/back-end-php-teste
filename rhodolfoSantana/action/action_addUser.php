<?php 
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['id_cor']) && isset($_POST['age'])){
 		

 		$nome = $_POST['nome_usuario'];
		$age = $_POST['age'];
		$idCor = $_POST['id_cor'];

 		
 		$sql = "INSERT INTO users (name, age, colors_id) 
						VALUES( :nome, :age, :idCor)";
 		$query = $connection->prepare($sql);
 		$query->bindParam(':nome', $nome);
		$query->bindParam(':age', $age);
		$query->bindParam(':idCor', $idCor);
 		$stmt = $query->execute();
		header('Location: ../index.php');
	} else {

 		echo "Não cadastrou";

 	}
	
  ?> 