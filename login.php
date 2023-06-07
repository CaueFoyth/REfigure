<?php
include("conecta.php");
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RE:Figure</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>
    <div class="cabecalho">
        <a href="index.php"><h3><ion-icon class="back" name="arrow-back-circle-outline"></ion-icon></h3></a>
        <a href="index.php">
        <img class="logo" src="imagem/RE FIGURE.png"></a>
        <h1 class="refi">RE:Figure</h1>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    </div>
    <div class="loginmeio">
        <img class="fundo" src="imagem/fundo.png">
        <form action="login.php" method="post">
            <div class="login">
                <h2 class="logintitulo"><ion-icon class="icones" name="log-in-outline"></ion-icon>Login</h2>
                <div class="loginbox">
                    <span> <ion-icon class="imgs" name="mail-outline"></ion-icon><b>Email</b></span>
                    <input type="email" name="confirmar_email" class="formatar" placeholder ="Coloque seu email">      
                </div>
                <div class="loginbox">
                    <span><ion-icon class="imgs" name="lock-closed-outline"></ion-icon><b>Senha</b></span>
                    <input type="password" name="confirmar_senha" class="formatar" placeholder="Coloque sua senha">
                </div>
                <a class="esqueceu" href="#"><b>Esqueceu sua senha?</b></a>
                <a class="conta" href="Cadastro.html"><b>Não tem conta?</b></a>
                <button name="entrar" type="submit" class="entrarbotao" onclick="exibeAlert()">Entrar</button>
            </div>
        </form>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>    
</body>
</html>

<?php
$confirmar_email = $_POST["confirmar_email"];
$confirmar_senha = $_POST["confirmar_senha"];
if(isset($_POST["entrar"]) )
{
    $comando = $pdo->prepare("SELECT * FROM cadastro where email_cliente='$confirmar_email' and senha_cliente='$confirmar_senha'");
    $resultado = $comando->execute();
    $n = 0;
    $admin = 0;
    while ($linhas = $comando->fetch() )
    {
        $n = 1;
        $admin = $linhas["admin"];
        $comando = $pdo->prepare("UPDATE cadastro SET logado=1 WHERE email_cliente='$confirmar_email'");
        $resultado = $comando->execute();
    }
    if($n==0)
    {
        echo '<script>
        function exibeAlert(){
        alert("Email e/ou senha inválidos!");}
        </script>';


    }

    if($n==1)
    {
        if($admin == "1")
        {
            header("Location:adm_page.html");
        }
        else{
            header("Location:index.php");
        }
    }
}

?>