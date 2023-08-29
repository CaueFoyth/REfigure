<?php
session_start();
include("conecta.php");
$logado = $_SESSION["logado"];
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM cadastro WHERE email_cliente = '$logado'");
$resultado = $comando->execute();
$logado = 0;
$admpage = "none";
while ($linhas = $comando->fetch() )
     {
         $logado = $linhas["logado"]; // Nome da coluna XAMPP
         $n = 1;
         $admin = $linhas["admin"];
         

     }
     if($admin == 1){
      $admpage = "fixed";
    } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title>Re:Figure</title>
    <link rel="stylesheet" type="text/css" href="css/conta.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<style>
  .adm {
  display: <?php echo $admpage ?>;
  width: fit-content;
  min-width: 100px;
  height: 50px;
  padding: 8px;
  border-radius: 5px;
  border: 2.5px solid hwb(165 61% 34%, 50%);
  box-shadow: 0px 0px 20px -20px;
  cursor: pointer;
  background-color: hsl(120, 64%, 47%, 50%);;
  transition: all 0.2s ease-in-out 0ms;
  user-select: none;
  font-family: 'Poppins', sans-serif;
  font-size: small;
  margin-left: 5%;
}

.adm:hover {
  background-color: #F2F2F2;
  box-shadow: 0px 0px 20px -18px;
}

.adm:active {
  transform: scale(0.95);
}

</style>
<body>
    
<section id="cabecalho" class="cabecalho alinhamento m-0 p-0">

  <div class="cantologo col-md-4 d-flex justify-content-start align-itens-center text-align-center">

      <img style="cursor: pointer;" class="logo" id="logo" onclick="Logo1()" src="imagem/RE FIGURE.png">

  </div>
  <div class="nome canto col-md-4">
      <b>Re:Figure <i class="bi bi-tree"></i></b>
  </div>  
  <div class="canto col-md-4 justify-content-end align-itens-center text-align-center">

  </div>

</section>

  <section id="opcoes" class="opcoes m-0 p-0">

    <div class="alinhamento col-md-12">
      <b onclick="suporte()" style="cursor: pointer;">Suporte</b>
    </div>

</section>

    <?php
    $comando = $pdo->prepare("SELECT * FROM cadastro where logado = 1");
    $resultado = $comando->execute();
        while ($linhas = $comando->fetch() )
             {
                 $nome = $linhas["nome_cliente"]; // Nome da coluna XAMPP
                 $cpf = $linhas["cpf_cliente"]; // Nome da coluna XAMPP
                 $email = $linhas["email_cliente"]; // Nome da coluna XAMPP
                 $celular = $linhas["celular_cliente"]; // Nome da coluna XAMPP
                 $rua = $linhas["rua"]; // Nome da coluna XAMPP
                 $numero = $linhas["numero_local"]; // Nome da coluna XAMPP
                 $complementos = $linhas["complementos"]; // Nome da coluna XAMPP
                 $estado = $linhas["estado"]; // Nome da coluna XAMPP
                 $cidade = $linhas["cidade"]; // Nome da coluna XAMPP
                 $pais = $linhas["pais"]; // Nome da coluna XAMPP
                 $bairro = $linhas["bairro"]; // Nome da coluna XAMPP
                 $admin = $linhas["admin"]; // Nome da coluna XAMPP

             }?>

<div class="informacao mt-5">
    <form class="area" method="post">
        <div class="minhaconta"><h1 ><ion-icon class="icone" name="person-circle-outline"></ion-icon><b>Minha Conta</b></h1></div>
        <div class="informacoes">
        <h2><b>Informações de Acesso</b></h2>
        <h3><?php echo($nome); ?></h3>
        <h4><?php echo($email); ?></h4>
        </div>
        <div class="botoesalterar">
        <button class="btn1" name="editar"><b>Editar</b></button>
        <br>
        <button class="btn1" name="senha"><b>Mudar Senha</b></button>
          <br>
        <button class="adm" name="adminp"><b>Admin</b></button>
        </div>
        <?php

          if(isset($_POST["editar"]) )
          {
            header("Location:editar.php");
          }
          if(isset($_POST["senha"]) )
          {
            header("Location:senha.php");
          }
          if(isset($_POST["adminp"]) )
          {
            header("Location:adm_page.html");
          }
        ?>
        <br> <br> <br>
        <div class="enderecotitulo"><ion-icon class="icone" name="location-outline"></ion-icon><b>Endereços Cadastrados</b><button class="btn2" name="endereco" type="subimt"><b>Gerenciar Endereços</b></button></div>
        <br>
        <div class="enderecos">
            <h1><b>Endereço de Cobrança Padrão</b></h1>
            <h2><?php echo($nome); ?></h2>
            <h2>(<?php echo($rua); ?>, <?php echo($numero); ?>, <?php echo($complementos); ?>, <?php echo($bairro); ?>)</h2>
            <h2>(<?php echo($cidade); ?>, <?php echo($estado); ?>, <?php echo($pais); ?>)</h2>
            <h2>Tel: <?php echo($celular); ?></h2>
        </div>
        <?php 
          if(isset($_POST["endereco"]) )
          {
            header("Location:enderecos.php");
          }
        ?>
        <br>
        <button class="sair" name="sair" o><b>Sair</b></button>
        <?php 
          if(isset($_POST["sair"]) )
          {
            $comando = $pdo->prepare("UPDATE cadastro SET logado=0");
            $resultado = $comando->execute();
              header("Location:index.html");
          }
        ?>

        <br>
        
    </form>
</div>

<main>
<section id="rodape" class="m-0 p-0 mt-5">
          <div class="alinharrow row">
            <div class="alinhamentodalogo col-md-3">
              <img class="logorodape" id="logo" onclick="Logo()" src="imagem/RE FIGURE.png">
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
<script src="./js/conta.js"></script>
</body>
</html>