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
    <link rel="stylesheet" type="text/css" href="css/Compra.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
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
          <form action="Cadastro.html">
            <button class="btn">
                <p class="paragraph"> Entrar </p>
                <span class="icon-wrapper">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </span>
              </button></form>
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
    <div class="tudo">
    <div class="esquerda">
        <div class="outros">
            <div class="outros1"> <img src="imagem/calcinha 2.png" width="100%"></div>
            <div class="outros2"> <img src="imagem/calcinha 3.png" width="70%"></div>
            <div class="outros3"> <img src="imagem/calcinha 4.png" width="100%"></div>
        </div>
        <div class="imagemprincipal"><img src="imagem/Calcinha.png" width="100%"></div>
    </div>
    <div class="direita">
        <div class="nome"><b>Robo Calcinha</b></div>
        <div class="descricao">
            <ul>
                <li>Action Figure de um robo, olhos acendem. </li>
                <li>Colorido.</li>
                <li>9cm de altura.</li>
            </ul>
        </div>
        <div class="compr">
            <div class="preco">
                <div class="avista"><ion-icon name="cash-outline"></ion-icon><div class="formatarvalor"><h1>a partir de</h1><h2>R$69,69 </h2><h3>a vista 10% de desconto</h3></div></div>
                <div class="parcelado"><ion-icon name="card-outline"></ion-icon><div class="formatarvalor"><h4>R$76,38</h4><h5>em até 6x de R$ 12.73 sem juros no cartão</h5></div></div>
            </div>
        <div class="comp">
        <form action="compraRobo.php" method="post"><button type="submit" class="comprar" name="comprar">Comprar</button></form>
        <?php

            // Se clicou no botão comprar:
            if(isset($_POST["comprar"]) )
            {
                $comando = $pdo->prepare("INSERT INTO `produtos` (`nome_produto`, `preco_produto`, `qtd_produto`, `carrinho`)VALUE('Robo Calcinha', '69.69', '1', '1')");
                $resultado = $comando->execute();
                ?><script>window.location.replace("carrinho.php");</script><?php
            }
            ?>
        </div>
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
</body>
</html>