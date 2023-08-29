<?php
session_start();
$logado = $_SESSION["logado"];
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM cadastro WHERE email_cliente = '$logado'");
$resultado = $comando->execute();
$logado = 0;
while ($linhas = $comando->fetch() )
     {
         $logado = $linhas["logado"]; // Nome da coluna XAMPP
     }
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
    <link rel="stylesheet" type="text/css" href="./css/tela_inicial3.css">
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
                <a class="nav-link" href="logado.php"><i class="bi bi-house"></i>Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="conta.php"><i class="bi bi-person"></i>Conta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carrinho.php"><i class="bi bi-list-check"></i>Carrinho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorias.html"><i class="bi bi-collection"></i>Categorias</a>
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

        <img class="logo" id="logo" onclick="Logo1()" src="imagem/RE FIGURE.png">

    </div>
    <div class="nome canto col-md-4">
        <b>Re:Figure <i class="bi bi-tree"></i></b>
    </div>  
    <div class="canto col-md-4 justify-content-end align-itens-center text-align-center">

            <button name="botao" class="btn me-2" onclick="Conta()">
                <p class="paragraph mt-3"> Conta </p>
                <span class="icon-wrapper">
                    <i class="bi bi-person"></i>
                </span>
            </button>
            <button class="btn me-3" name="carrinho" onclick="carrinho()">
                <p class="paragraph mt-3"> Carrinho </p>
                <span class="icon-wrapper">
                    <i class="bi bi-cart2"></i>
                </span>
            </button>
    </div>

</section>

<section id="opcoes" class="opcoes m-0 p-0">

    <div class="alinhamento col-md-3">
        <b onclick="lancamentos()" style="cursor: pointer;">Lançamentos</b>
    </div>
     
    <div class="alinhamento col-md-2">
        <b onclick="categorias()" style="cursor: pointer;">Categorias</b>
    </div>
     
    <div class="alinhamento col-md-2">
        <b onclick="filamento()" style="cursor: pointer;">Filamento</b>
    </div>
     
    <div class="alinhamento col-md-2">
        <b onclick="termos()" style="cursor: pointer;">Termos</b>
    </div>
     
    <div class="alinhamento col-md-3">
        <b onclick="suporte()" style="cursor: pointer;">Suporte</b>
    </div>

</section>

<main id="main">

<div id="produtinho class="container-fluid">
    <div class="row z321">
        <div class="col-md-7">
    <section id="carrosel" class="m-0 p-0">
    <div class="col-md-12">
    <div class="slideshow-container mt-5 ms-4">

        <div class="mySlides fade">
          <img src="imagem/caue.png" style="width:100%; height:100%;">
        </div>
        <div class="mySlides fade">
          <img src="imagem/caue 2.png" style="width:100%; height:100%">
        </div>
        <div class="mySlides fade">
          <img src="imagem/caue 3.png" style="width:100%; height:100%">
        </div>
      
  
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
  
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

    </div>


    </section>
        </div>
        <div class="k321 col-md-5 mt-5">
        <div class="nomee"><b>Pirata Narigudo</b></div>
        <div class="descricao">
            <ul>
                <li>Action Figure do Pirata com o nariz deveraz grande.</li>
                <li>Colorido.</li>
                <li>12cm de altura.</li>
                <li>Barbudo.</li>
            </ul>
        </div>
        <form action="CompraPirata.php" method="post">
        <input placeholder="Quantidade" value="1" name="quantidade" class="input-style" type="number" min="1" max="100">
        <div class="compr">
            <div class="precoo">
                <div class="avista"><ion-icon name="cash-outline"></ion-icon><div class="formatarvalor"><h1>a partir de</h1><h2>R$60,00</h2><br><h3>a vista 10% de desconto</h3></div></div>
                <div class="parcelado"><ion-icon name="card-outline"></ion-icon><div class="formatarvalor"><h4>R$66,00</h4><br><h5>em até 6x de R$ 11,00 sem juros no cartão</h5></div></div>
            </div>
        <div class="comp">
        <button type="submit" class="comprarr" name="comprar">Adicionar ao carrinho</button></FORM>
        <?php
            // Se clicou no botão comprar:
            if(isset($_POST["comprar"]) )
            {
                $quantidade = $_POST["quantidade"];
                $comando = $pdo->prepare("UPDATE produtos SET carrinho=1, qtd_produto='$quantidade' WHERE id_produto = 5;");
                $resultado = $comando->execute();
                ?><script>window.location.replace("carrinho.php");</script><?php
            }
            ?>
        </div>
        </div>
        </div>
    <div>
</div>

<section id="rodape" class="m-0 p-0 mt-5">
          <div class="alinharrow row">
            <div class="alinhamentodalogo col-md-3">
              <img class="logorodape" id="logo" onclick="Logo1()" src="imagem/RE FIGURE.png">
            </div>
            <div class="alinhamentorodape col-md-3">
              <p>Copyright &copy; 2023 - All Rights Reserved - Re:Figure</p>
            </div>
            <div class="delete col-md-3">
              <ul>
                <li>Desenvolvedores:</li>
                <li>Cauê Marchi Foyth</li>
                <li>Jônatas Rocha dos Santos</li>
                <li>Lucas Giovani Fruck</li>
              </ul>
            </div>
            <div class="alinhamentorodape col-md-3">
              <div class="divpai">
                <ul class="insta">
                  <a href="https://instagram.com/caue_foyth" target="_blank"><li><i class="bi bi-instagram"></i>Cauê</li></a>
                  <a href="https://instagram.com/arcaro_jonatas" target="_blank"><li><i class="bi bi-instagram"></i>Jônatas</li></a>
                  <a href="https://instagram.com/lucasgiovanifruck" target="_blank"><li><i class="bi bi-instagram"></i>Lucas</li></a>     
                </ul>
              </div>
            </div>
          </div>

        </section>

</main>


    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/tela_inicial.js"></script>
</body>
</html>