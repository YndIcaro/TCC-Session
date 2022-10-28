<?php

    include("conexao.php");

    if (isset($_POST['form'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuario (nome,sobrenome,telefone,email,senha) VALUES ('$nome','$sobrenome','$telefone','$email','$senha');";

        if ($conn->query($sql)) {
            echo " Registrado com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorInfo();
        }

    }
?>


<form method="POST">

    <input type="hidden" name="form" />
    <h1> Cadastro </h1>

    <label for="n">Nome</label>
        <div class="inputs">
        <input type="text" name="nome" id="nome" placeholder="Nome" />
        </div>

    <label for="s">Sobrenome</label>
        <div class="inputs">
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" />
        </div>

    <label for="t">Telefone</label>
        <div class="inputs">
            <input type="tell" name="telefone" id="telefone" placeholder="(xx) x xxxx-xxxx"/>
        </div>

    <label for="e">Email</label>
        <div class="inputs">
            <input type="email" name="email" id="email" placeholder="Email"/>
        </div>

        <label for="S">Senha</label>
        <div class="inputs">
            <input type="password" name="senha" id="senha" placeholder="senha"/>
        </div>
    
    <input type="submit" value="Salvar" />

</form>
