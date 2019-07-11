
  <!DOCTYPE html>
  <html>
    <head>
    </head>
    <body>
      <center>
        <h1 id="titulo_cadastro"> Usuários </h1>
          <div>
          
            <form action="view/view_search.php" method="POST">     
                                
              <input type="text" name="search"  placeholder="Pesquise um usuário..." autocomplete="off">
              <button type="submit" >Pesquisar</button><br/><br/>

            </form> 
          </div>

        <div>
          <?php 
            require "action/action_connection.php";
          //$users      = $connection->query('SELECT * FROM users');
          //$users->setFetchMode(PDO::FETCH_INTO, new stdClass);
            $sql     = 'SELECT users.*, colors.name_colors FROM users LEFT JOIN colors ON users.colors_id = colors.id_color';
            $stmt = $connection->prepare($sql);

            $result = $stmt->execute();
            $colors = $stmt->fetchAll(PDO::FETCH_ASSOC);




          //foreach($users as $user) {

           // echo sprintf("<li>ID %s - NAME: %s / age: %s</li>",
            //            $user->id, $user->name, $user->age);

          //}

          //$con = null;

          //var_dump($colors);
          ?>
        
          <table border="1px">
              <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Cor</th>
              </tr>
              
                <?php foreach($colors as $color): ?>
                  <tr>
                    <td><?php echo $color['name']; ?></td>
                    <td><?php echo $color['age']; ?></td>
                    <td><?php echo $color['name_colors']; ?></td>
                    <td><a href="view/view_updateUser.php?id=<?=$color['id_user']?>">Editar</a></td>
                    <td><a href="action/action_deleteUsers.php?id=<?=$color['id_user']?>">Excluir</a><br/></td>
                  </tr>
                <?php endforeach; ?>
    
          </table>
          <br/><br/>
          <button><a href="view/view_addUser.php">Cadastrar</a></button>
      
        </center>
      </div>
  
    </body>
  </html>