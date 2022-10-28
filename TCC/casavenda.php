<?php
//Fazendo a conexao com o banco
include("conexao.php");

    if (isset($_POST['form'])){

    //Atribuindo valores em variaveis SE a confirmação do form for acionada.
        $casa_tamanho = $_POST['casa_tamanho'];
        $casa_localizacao = $_POST['casa_localizacao'];
        $casa_quarto = $_POST['casa_quarto'];
        $casa_banheiro  = $_POST['casa_banheiro'];
        $casa_suite = $_POST['casa_suite'];
        $casa_garagem = $_POST['casa_garagem'];
        $casa_sotao = $_POST['casa_sotao'];
        $casa_porao = $_POST['casa_porao'];
        $casa_mobilia = $_POST['casa_mobilia'];
        $casa_sala = $_POST['casa_sala'];
        $casa_cozinha  = $_POST['casa_cozinha'];
        $casa_preco = $_POST['casa_preco'];
        $fk_status = $_POST['fk_status'];
    //Inserindo valores ao banco
$sql = "INSERT INTO casa (casa_localizacao,casa_quarto,casa_banheiro,casa_suite,casa_garagem,casa_sotao,casa_porao,casa_mobilia,casa_sala,casa_cozinha)
VALUES('$casa_tamanho','$casa_localizacao','$casa_quarto','$casa_banheiro','$casa_suite','$casa_garagme','$casa_sotao','$casa_porao','$casa_mobilia','$casa_sala','$casa_cozinha');";
    //Verificação se o banco recebeu o valor
            if ($conn->query($sql)) {
                echo " Casa registrada com sucesso";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->errorInfo();
        }

}   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Venda de Casa</title>
    <link rel="stylesheet" href="telavendacasa.css">
</head>
<body>
  <form method="POST">
  <input type="hidden" name="form" />
        <div class="input-box">
            <label for="">Digite o tamanho da casa em M²</label>
            <input type="text" name="casa_tamanho">
        </div>
        <div class="input-box">
            <label for="">Digite a localização</label>
            <input type="text" name="casa_localizacao">
        </div>
        <div class="input-box">
            <label for="">Digite a quantidade de quartos</label>
            <input type="text" name="casa_quarto">
        </div>
        <div class="input-box">
            <label for="">Digite a quantidade de banheiros</label>
            <input type="text" name="casa_banheiro">
        </div>
        <div class="input-box">
            <label for="">Digite a quantidade de sótãos</label>
            <input type="text" name="casa_sotao">
        </div>
        <div class="input-box"> 
            <label for="">Digite a quantidade de suites</label>
            <input type="text" name="casa_suite">
        </div>
        <div class="input-box">
            <label for="">A casa é mobiliada?</label>
            
            <input type="radio" name="casa_mobilia">
                <label for="yes">Sim</label>
            <input type="radio" name="casa_mobilia"> 
                <label for="no">Não</label>
        </div>
        <div class="input-box">
            <label for="">Digite a quantidade de salas</label>
            <input type="text" name="casa_sala">
        </div>
        <div class="input-box">
            <label for="">Digite a quantidade de cozinhas</label>
            <input type="text" name="casa_cozinha">
        </div>
        <div class="input-box">
            <label for="">Digite a quantidade de cozinhas</label>
            <input type="text" name="casa_cozinha">
        </div>
    </div>
    <div class="button-salvar">
           <input type="submit" value="Salvar" name="salvar"/>
        </div>
  </form>  
</body>
</html>
