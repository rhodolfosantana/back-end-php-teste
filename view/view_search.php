<div class="container resultados">
	<h1>Todos os resultados:</h1>
	<?php
		require "../action/action_connection.php";
		if (isset($_POST["search"])){
			$dado = $_POST["search"];

			$output = '';



			$checking=("SELECT * FROM users WHERE name LIKE :pesquisa");


			$queryOne = $connection->prepare($checking);
			$queryOne->bindValue(':pesquisa', '%'.$dado.'%');
			$return = $queryOne -> execute();
			
			
				$stmt = $queryOne->fetchAll();
				if ($stmt!=null){
				
				
				for ($i = 0; $i < sizeof($stmt); $i++){
					$id = $stmt[$i]['id'];
					//$output .= "<a href='../index.php?id=$id'>";
					$output .= '<div class="container panel panel-default">';
					$output .= '<h3>'.$stmt[$i]['name']." - ". $stmt[$i]['idade'].'</h3>';
					$output .= '</div></a>';
				
				}
			}
				else { 
					$output .= '<div class="container panel panel-default">';
					$output .= '<h3> Nada Encontrado</h3>';
					$output .= '</div>';
			
			}
			echo $output;
		}
?>
<button><a href="../index.php">Voltar</a></button>
</div>
