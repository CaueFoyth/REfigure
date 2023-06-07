<?php
include("conecta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re:Figure</title>
    <link rel="icon" href="imagem/RE FIGURE.png">
    <link rel="stylesheet" type="text/css" href="./css/tela_inicial.css">
</head>
<body>
    <div class="cabecalho">
        <a href="index.php">
        <img class="logo" src="imagem/RE FIGURE.png"></a>
        <div class="container-input">
            <input type="text" placeholder="Pesquisar" name="text" class="input">
            <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
              <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
          </svg>
          </div>
          
        <div class="canto">
          <form action="index.php" method="post">
            <button name="botao" type="submit" class="btn">
              <?php 
              // $comando = $pdo->prepare("SELECT * FROM cadastro");
              // $resultado = $comando->execute();
              // $logado = 0;

              // while ($linhas = $comando->fetch() )
              // {
              //   $logado = $linhas["logado"];
              //    $logado_final="Entrar";
              //    if($logado == "1"){
              //      $logado_final="Conta";
              //    }
              // }
              ?>
                <p class="paragraph"> <?php echo("Entrar"); ?> </p>
                <span class="icon-wrapper">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </span>
              </button></form>
              <?php 
              if(isset($_POST["botao"]) )
              {
                ?><script>window.location.replace("login.php");</script><?php
              }
              ?>
              <form action="carrinho.php">
                <button class="btn">
                  <p class="paragraph"> Carrinho </p>
                  <span class="icon-wrapper">
                      <ion-icon name="cart-outline"></ion-icon>
                  </span>
                </button></form>
        </div>
    </div>
    <div class="opcoes">
        <nav class="opcoes_texto">
                <ul>
                  <li><a href="lancamentos.html"> <b> Lançamentos</a> </b></li>
                  <li><a href="categorias.html"> <b> Categorias </a></b>
                    <ul>
                      <li><a href="categoria_animal.html"> <b> Animais</a></b></li>
                      <li><a href="categoria_pb.html"> <b> P&B</a></b></li>
                      <li><a href="categoria_colorido.html"> <b> Coloridos</a></b></li>
                    </ul>
                  </li>
                  <li><a href="filamento.html"> <b> Filamento</a></b></li>
                  <li><a href="termos.html"> <b> Termos</a></b></li>
                  <li><a href="suporte.html"> <b> Suporte</a></b></li>
                </ul>
        </nav>
    </div>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <a href="filamento.html">
        <img src="imagem/fundo_fila.png" style="width:100%">
      </div></a>
      <a href="#">
      <div class="mySlides fade">
        <img src="imagem/promocoes.png" style="width:100%">
      </div></a>
      <a href="lancamentos.html">
      <div class="mySlides fade">
        <img src="imagem/lacamentos.png" style="width:100%">
      </div></a>
    

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="titulo">
    <h1>PRODUTOS</h1>
    </div>
    <div class="corpo">
      <div class="catalogo">
        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem1.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Urubu preto e branco</h3>
            <h2 class="preco">R$<small>70.00</small></h2>
            <a href="compraUrubu.php" class="comprar">Comprar</a>
          </div>
        </div>

        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem2.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Burguês preto e branco</h3>
            <h2 class="preco">R$<small>60.00</small></h2>
            <a href="CompraBurgues.php" class="comprar">Comprar</a>
          </div>
        </div>

        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem3.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Heroí Picanha</h3>
            <h2 class="preco">R$<small>130.00</small></h2>
            <a href="CompraCapitao.php" class="comprar">Comprar</a>
          </div>
        </div>

      </div>

      <div class="catalogo">
        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem4.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Mago cósmico</h3>
            <h2 class="preco">R$<small>150.00</small></h2>
            <a href="CompraMago.php" class="comprar">Comprar</a>
          </div>
        </div>

        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem5.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Pirata narigudo</h3>
            <h2 class="preco">R$<small>140.00</small></h2>
            <a href="CompraPirata.php" class="comprar">Comprar</a>
          </div>
        </div>

        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem6.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Robo calcinha</h3>
            <h2 class="preco">R$<small>69.69</small></h2>
            <a href="CompraRobo.php" class="comprar">Comprar</a>
          </div>
        </div>
      </div>

      <div class="catalogo">
        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem7.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Dino Spino</h3>
            <h2 class="preco">R$<small>170.00</small></h2>
            <a href="CompraDino.php" class="comprar">Comprar</a>
          </div>
        </div>

        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem8.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Mamute Manny</h3>
            <h2 class="preco">R$<small>140.00</small></h2>
            <a href="CompraMamute.php" class="comprar">Comprar</a>
          </div>
        </div>

        <div class="card">
          <div class="imgBox">
            <img src="imagem/personagem9.png" class="figure">
          </div>
          <div class="contentBox">
            <h3>Paulo Ruivo</h3>
            <h2 class="preco">R$<small>200.00</small></h2>
            <a href="CompraRuivo.php" class="comprar">Comprar</a>
          </div>
        </div>

      </div>
      <div class="rodape">
      <img class="logo_rodape" src="imagem/RE FIGURE.png">
      <ul>
        <a href="filamento.html"><li>Filamento</li></a>
        <a href="lancamentos.html"><li>Lançamentos</li></a>
        <a href="termos.html"><li>Termos</li></a>
      </ul>
      <ul>
        <li>Desenvolvedores:</li>
        <li>Cauê Marchi Foyth</li>
        <li>Jônatas Rocha dos Santos</li>
        <li>Lucas Giovani Fruck</li>
      </ul>
      <div class="contatos">
        <ul>
          <a href="https://instagram.com/caue_foyth" target="_blank"><li><ion-icon name="logo-instagram"></ion-icon>Cauê</li></a>
          <a href="https://instagram.com/arcaro_jonatas" target="_blank"><li><ion-icon name="logo-instagram"></ion-icon>Jônatas</li></a>
          <a href="https://instagram.com/lucasgiovanifruck" target="_blank"><li><ion-icon name="logo-instagram"></ion-icon>Lucas</li></a>
        </ul>
      </div>
      </div>  
      
    </div>
  </div>
    
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="js/tela_inicial.js" class="fundo"></script>
</body>
</html>