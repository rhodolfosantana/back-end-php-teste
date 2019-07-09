<?php 
	require "action/action_connection.php";
	$users      = $connection->query('SELECT * from users');

    $users->setFetchMode(PDO::FETCH_INTO, new stdClass);

    foreach($users as $user) {

        echo sprintf("<li>ID %s - NAME: %s / IDADE: %s</li>",
                        $user->id, $user->name, $user->idade);

    }

    $con = null;


  ?>
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  
  <form class="pesquisa-ponto form-inline" action="view/view_search.php" method="POST">     
                                
            <input type="text" name="search" id="form-controlpesq" class="form-control pesq" placeholder="Pesquise um usuário!" autocomplete="on">

            <button type="submit" class="btn btn-primary pesq">Pesquisar</button> 
    </form> 
    <button><a href="view/view_cadastrar.php">Cadastrar</a></button>
  </body>
  </html>