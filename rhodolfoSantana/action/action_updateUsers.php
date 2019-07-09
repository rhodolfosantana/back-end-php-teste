<?php 
	$id = $_GET['id'];
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['id_cor']) && isset($_POST['age'])){
 		

 		$nome = $_POST['nome_usuario'];
		$age = $_POST['age'];
		$idCor = $_POST['id_cor'];


 		

 		$sql = "UPDATE users SET name= :nome_usuario, age= :age, colors_id= :id_cor WHERE id_user= :id";
		$update = $connection->prepare($sql);
		$update->bindParam(':nome_usuario', $nome);
		$update->bindParam(':age', $age);
		$update->bindParam(':id_cor', $idCor);
		$update->bindParam(':id', $id);

		$stmt = $update->execute();
		
 		var_dump($stmt);


		header('Location: ../index.php');
	} else {

 		echo "Erro ao atulizar.";

 	}

 
 	
	
  ?> 