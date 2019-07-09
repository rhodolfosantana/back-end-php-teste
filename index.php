
  <!DOCTYPE html>
  <html>
    <head>
    </head>
    <body>
      <center>
        <h1 id="titulo_cadastro"> Usuários </h1>
          <div>
          
            <form class="pesquisa-ponto form-inline" action="view/view_search.php" method="POST">     
                                
              <input type="text" name="search" id="form-controlpesq" class="form-control pesq" placeholder="Pesquise um usuário!" autocomplete="on">
              <button type="submit" class="btn btn-primary pesq">Pesquisar</button><br/><br/>

            </form> 
          </div>

        <div>
          <?php 
            require "action/action_connection.php";
          //$users      = $connection->query('SELECT * FROM users');
          //$users->setFetchMode(PDO::FETCH_INTO, new stdClass);
            $sql     = 'SELECT * FROM users LEFT JOIN colors ON "users.colors_id" = "colors.id_color"';
            $stmt = $connection->prepare($sql);

            $result = $stmt->execute();
            $colors = $stmt->fetchAll(PDO::FETCH_ASSOC);


           //ar_dump($colors);


          //foreach($users as $user) {

           // echo sprintf("<li>ID %s - NAME: %s / IDADE: %s</li>",
            //            $user->id, $user->name, $user->idade);

          //}

          //$con = null;

          //var_dump($colors);
          ?>
        
     

          
          <table border="1px">
            <?php foreach($colors as $color): ?>
              <tr>
                <th>Nome</th>
                <td><?php echo $color['name']; ?></td>
                <th>Idade</th>
                <td><?php echo $color['idade']; ?></td>
                <th>Cor</th>
                <?php if ($color['colors_id']==1) :?> 
                <td><?php echo "Azul"?></td>
                <?php endif;?>
                <?php if ($color['colors_id']==2) :?> 
                <td><?php echo "Amarelo"?></td>
                <?php endif;?>
                <?php if ($color['colors_id']==3) :?> 
                <td><?php echo "Vermelho"?></td>
                <?php endif;?>
                <?php if ($color['colors_id']==4) :?> 
                <td><?php echo "Verde"?></td>
                <?php endif;?>
              


                <td><a href="action/action_updateUsers.php?id=<?=$color['id_user']?>">Editar</a></td>
                <td><a href="action/action_deleteUsers.php?id=<?=$color['id_user']?>">Excluir</a></td>
              </tr>
            <?php endforeach; ?>
    
          </table><br/><br/>
          <button><a href="view/view_cadastrar.php">Cadastrar</a></button>
      
        </center>
      </div>
  
    </body>
  </html>