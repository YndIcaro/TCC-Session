
<?php
// Fazendo conexao com o banco
include("conexao.php");

    if (isset($_POST['form'])){
    //Atribuindo valores em variaveis SE a confirmação do form for acionada.
        $apart_tamanho = $_POST['apart_tamanho'];
        $apart_localizacao = $_POST['apart_localizacao'];
        $apart_quarto = $_POST['apart_quarto'];
        $apart_banheiro  = $_POST['apart_banheiro'];
        $apart_suite = $_POST['apart_suite'];
        $apart_garagem = $_POST['apart_garagem'];
        $apart_sotao = $_POST['apart_sotao'];
        $apart_porao = $_POST['apart_porao'];
        $apart_mobilia = $_POST['apart_mobilia'];
        $apart_sala = $_POST['apart_sala'];
        $apart_cozinha  = $_POST['apart_cozinha'];
        $apart_preco = $_POST['apart_preco'];

    //Inserindo valores ao banco
$sql = "INSERT INTO apartamento(apart_localizacao,apart_quarto,apart_banheiro, apart_suite,apart_sala,apart_cozinha,apart_tamanho,apart_preco) 
VALUES ('$apart_localizacao','$apart_quarto','$apart_banheiro','$apart_suite','$apart_sala','$apart_cozinha','$apart_tamanho','$apart_preco')";
    //Verificação se o banco recebeu o valor
        if ($conn->query($sql)) {
            echo " Apartamento registrado com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorInfo();
        }

}
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="telavendaapartamento.css">

<title> Cadastro de Usuário </title>
</head>

<body>   
    <form method="POST">
     <input type="hidden" name="form" />
        <div class="input-box">
            <label  >Digite o tamanho do apartamento em M²</label>
            <input type="text"    name="apart_tamanho" id="apart_tamanho">
        </div>
        <div class="input-box">
            <label  >Digite a localização</label>
            <input type="text"    name="apart_localizacao" id="apart_localizacao">
        </div>
        <div class="input-box">
            <label  >Digite a quantidade de quartos</label>
            <input type="text"    id="apart_quarto" name="apart_quarto">
        </div>
        <div class="input-box">
            <label  >Digite a quantidade de banheiros</label>
            <input type="text"  name="apart_banheiro" id="apart_banheiro">
        </div>
        <div class="input-box">
            <label  >Digite a quantidade de sótãos</label>
            <input type="text"  name="apart_sotao" id="apart_sotao">
        </div>
        <div class="input-box"> 
            <label  >Digite a quantidade de suites</label>
            <input type="text"    name="apart_suite">
        </div>
        <div class="input-box">
            <label  >A casa é mobiliada?</label>
            
            <input type="radio"     name="apart_mobilia">
                <label for="yes">Sim</label>
            <input type="radio"    name="apart_mobilia"> 
                <label for="no">Não</label>
        </div>
        <div class="input-box">
            <label  >Digite a quantidade de salas</label>
            <input type="text"    name="apart_sala">
        </div>
        <div class="input-box">
            <label  >Digite a quantidade de cozinhas</label>
            <input type="text"     name="apart_cozinha">
        </div>
        <div class="input-box">
            <label  >Digite o preço do apartamento</label>
            <input type="text"     name="apart_preco">
        </div>
        <div class="button-salvar">
           <input href="A.html" type="submit" value="Salvar" name="salvar" />
        </div>
    </form>  
    
</body>
</html>