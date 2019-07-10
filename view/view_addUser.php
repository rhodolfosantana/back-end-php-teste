<?php
require_once('../action/action_connection.php');

?>

<center>
    
    <div>
	   <h1> Cadastro de usuários </h1>
        <div >
	        <form method="POST" action="../action/action_addUser.php" enctype="multipart/form-data">
                <div>
                    <label for="text">Nome do Usuário:</label>
                    <input type="text" name="nome_usuario">
                </div>

                <div>
                    <label for="text">Idade:</label>
                    <input type="text"  name="age">
                </div>
                <div><br/>
                    <label for="sel1">Selecione a cor</label>

                    <select  name="id_cor">
                        <option value="" selected disabled hidden>Escolha a cor</option>
                        <option value="1">      Azul</option>
                        <option value="2">      Vermelho</option>
                        <option value="3">      Amarelo</option>
                        <option value="4">      Verde</option>
                    </select>
                </div><br/><br/>
                <div>    
    	           <input type="submit" value="Cadastrar" >
                    <button><a href="../index.php">Voltar</a></button>
    	        </div>


	        </form>
        </div>
    </div>
</center>

