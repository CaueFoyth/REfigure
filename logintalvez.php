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

 <i class="bi bi-list menu-mobile"></i>

<aside id="aside"> <!--Menu lateral-->
    <section class="profile"> <!--Seção da foto de perfil, nome, e social-links-->
        <img src="./imagem/RE FIGURE.png" alt="Foto refigure"> <!--Foto pessoal-->
        <h1>Re:Figure</h1>
    </section>

    <nav id="navbar" class="nav-menu"> <!--navbar lateral-->
        <ul class="nav flex-column"> <!--Lista em column-->
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="bi bi-house"></i>Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro.html"><i class="bi bi-person"></i>Criar Conta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="cursor: pointer;" onclick="myFunction()"><i class="bi bi-list-check"></i>Carrinho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="cursor: pointer;" onclick="myFunction()"><i class="bi bi-collection"></i>Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="filamento.html"><i class="bi bi-recycle"></i>Filamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="termos.html"><i class="bi bi-newspaper"></i>Termos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="suporte.html"><i class="bi bi-question-circle"></i>Suporte</a>
            </li>
        </ul>
    </nav>
</aside>
    
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

<section id="area">

            <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form action="logintalvez.php" method="post" class="login">
            <H1>Login</H1>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" name="confirmar_email" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="confirmar_senha" class="login__input" placeholder="Senha">
				</div>
				<button name="entrar" type="submit" class="button login__submit">
					<span class="button__text">Entrar agora</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
                </form>
                <div class="olar">
                    <button onclick="esqueceu()" class="button login__submit">
					<span class="button__text">Esqueceu sua senha?</span>
					<i class="button__icon fas fa-chevron-right"></i>
                    <button onclick="cadastro()" class="button login__submit">
					<span class="button__text">Não tem conta?</span>
					<i class="button__icon fas fa-chevron-right"></i>
                </div>				
			

		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

</section>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/tela_inicial.js"></script>
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
        $_SESSION["logado"] = $confirmar_email;
        if($admin == "1")
        {
            header("Location:adm_page.html");
        }
        else{
            header("Location:logado.php");
        }
    }
}

?>