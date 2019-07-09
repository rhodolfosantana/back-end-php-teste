<?php
require_once('../action/action_connection.php');

?>

<center>
    
    <div class="div1">
	   <h1 id="titulo_cadastro"> Cadastro de usuários </h1>
        <div class="form">
	        <form method="POST" action="../action/action_cadastrar.php" class="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text">Nome do Usuário:</label>
                    <input type="text" class="form-control" name="nome_usuario">
                </div>

                <div class="form-group">
                    <label for="text">Idade:</label>
                    <input type="text" class="form-control" name="idade">
                </div>
                <div class="form-group"><br/>
                    <label for="sel1">Selecione a cor</label>

                    <select class="form-control" name="id_cor">
                        <option value="1">      Azul</option>
                        <option value="2">      Amarelo</option>
                        <option value="3">      Vermelho</option>
                        <option value="4">      Verde</option>
                    </select>
                </div><br/><br/>
                <div class="form-group">    
    	           <input type="submit" value="Cadastrar" class="btn btn-primary">
                    <button><a href="../index.php">Voltar</a></button>
    	        </div>


	        </form>
        </div>
    </div>
</center>

