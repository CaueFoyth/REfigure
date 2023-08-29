<?php
session_start();
include("conecta.php");

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title>Re:Figure</title>
    <link rel="icon" href="imagem/RE FIGURE.png">
    <link rel="stylesheet" type="text/css" href="./css/login2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    
<section id="cabecalho" class="cabecalho alinhamento m-0 p-0">

    <div class="cantologo col-md-4 d-flex justify-content-start align-itens-center text-align-center">

        <img class="logo" id="logo" onclick="Logo()" src="imagem/RE FIGURE.png">

    </div>
    <div class="nome canto col-md-4">
        <b>Re:Figure <i class="bi bi-tree"></i></b>
    </div>  
    <div class="canto col-md-4 justify-content-end align-itens-center text-align-center">

    </div>

</section>

<main id="main">
    
    <section id="logar">
        <div class="container">
            <div class="cresce row">
                <form class="login col-md-12" action="login.php" method="post"> 
                    <div class="row b321">
                        <div class="col-md-12">
                            <h2 class="logintitulo"><ion-icon class="icones" name="log-in-outline"></ion-icon>Login</h2>
                        </div>
                    </div>
                    <div class="row b321">
                        <div class="col-md-12">
                            <div class="loginbox">
                                <span> <ion-icon class="imgs" name="mail-outline"></ion-icon><b>Email</b></span>
                                <input type="email" name="confirmar_email" class="formatar" placeholder ="Coloque seu email">      
                            </div>
                        </div>
                    </div>
                    <div class="row b321">
                        <div class="col-md-12">
                            <div class="loginbox">
                                <span><ion-icon class="imgs" name="lock-closed-outline"></ion-icon><b>Senha</b></span>
                                <input type="password" name="confirmar_senha" class="formatar" placeholder="Coloque sua senha">
                            </div>
                        </div>
                    </div>
                    <div class="row b321">
                        <div class="col-md-12">
                            <a class="esqueceu" href="senhaEsqueceu.php"><b>Esqueceu sua senha?</b></a>
                        </div>
                    </div>
                    <div class="row b321">
                        <div class="col-md-12">
                        <a class="conta" href="Cadastro.html"><b>Não tem conta?</b></a>
                        </div>
                    </div>
                    <div class="row b321">
                        <div class="b321 col-md-12">
                            <button name="entrar" type="submit" class="entrarbotao" onclick="exibeAlert()">Entrar</button>
                        </div>
</form>
                </div>
            </div>
        </div>
    </section>

</main>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/login.js"></script>
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
            $_SESSION["logado"] = $confirmar_email;
            header("Location:adm_page.html");
        }
        else{
            $_SESSION["logado"] = $confirmar_email;
            header("Location:logado.php");
        }
    }
}

?>