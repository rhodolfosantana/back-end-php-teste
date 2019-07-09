<?php
    require_once('../action/action_connection.php');
    $id = $_GET['id'];


    $query = $connection->prepare("SELECT * FROM users WHERE id_user = ?");
    $query->bindParam(1, $id);
    $query->execute();


    $dados = $query->fetch();
    $name_user = $dados['name'];
    $idade = $dados['idade'];
    $idCor = $dados['colors_id'];



    ?>




<center>
    
    <div >
       <h1> Cadastro de usuários </h1>
        <div >
            <form method="POST" action="../action/action_updateUsers.php?id=<?=$id?>" enctype="multipart/form-data">
                <div>
                    <label for="text">Nome do Usuário:</label>
                    <input type="text" name="nome_usuario">
                </div>

                <div>
                    <label for="text">Idade:</label>
                    <input type="text" name="age">
                </div>
                <div><br/>
                    <label for="sel1">Selecione a cor</label>

                    <select name="id_cor">
                        <option value="" selected disabled hidden>Escolha a cor</option>
                        <option value="1">      Azul</option>
                        <option value="2">      Vermelho</option>
                        <option value="3">      Amarelo</option>
                        <option value="4">      Verde</option>
                    </select>
                </div><br/><br/>
                <div>    
                   <input type="submit" value="Salvar" >
                    <button><a href="../index.php">Voltar</a></button>
                </div>


            </form>
        </div>
    </div>
</center>
