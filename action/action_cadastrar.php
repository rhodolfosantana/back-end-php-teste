<?php 
 	require "action_connection.php";
 	if(isset($_POST['nome_usuario']) && isset($_POST['idade'])){
 		

 		$nome = $_POST['nome_usuario'];
		$idade = $_POST['idade'];
		var_dump($nome);
		var_dump($idade);


 		
 		$sql = "INSERT INTO users (name, idade) 
						VALUES( ?, ?)";
 		$query = $connection->prepare($sql);
 		$query->bindParam(1, $nome);
		$query->bindParam(2, $idade);
 		$stmt = $query->execute();
		header('Location: ../index.php');
	} else {

 		echo "Não cadastrou";

 	}
	
  ?> 