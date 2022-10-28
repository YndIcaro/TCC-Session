<?php session_start(); 
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
            if(isset($_POST['acao'])) {

                $email = ['email'];//Variavel no banco
                $senha = ['senha'];// Variavel no banco

                $loginForm = $_POST['login'];
                $SenhaForm = $_POST['Senha'];

                if($login == $loginForm && $senha == $senhaForm) {
                    $_SESSION['login']= $login;
                    header('Location: index.php');
                }else{
                    echo 'Dados incorretos';
                }


            }
            include('login.php');
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('index.php');
        }

    ?>
    
</body>
</html> ?>