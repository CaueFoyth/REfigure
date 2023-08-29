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
    <link rel="stylesheet" type="text/css" href="css/senha.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>

<section id="cabecalho" class="cabecalho alinhamento m-0 p-0">

  <div class="cantologo col-md-4 d-flex justify-content-start align-itens-center text-align-center">

      <img class="logo" id="logo" onclick="Logo1()" src="imagem/RE FIGURE.png">

  </div>
  <div class="nome canto col-md-4">
      <b>Re:Figure <i class="bi bi-tree"></i></b>
  </div>  
  <div class="canto col-md-4 justify-content-end align-itens-center text-align-center">
  </div>
</section>

<section id="opcoes" class="opcoes m-0 p-0">

  <div class="alinhamento col-md-3">
      <b onclick="suporte()" style="cursor: pointer;">Suporte</b>
  </div>

</section>

<div class="informacao mt-5">
    <form class="area" action="editar.php" method="post">
        <div class="minhaconta"><h1 ><ion-icon class="icone" name="person-circle-outline"></ion-icon><b>Editar Informações</b></h1></div>
        <h2 class="fs-4 mt-4 d-flex justify-content-center"><b>Insira o seu CPF e altere sua senha</b></h2>
        <div class="informacoes">
        <input maxlength="14" id="cpf" onkeyup="ValidarCPF();" placeholder="Insira seu CPF" name="cpf_alterar" class="input-style" type="text">
        <input placeholder="Insira o novo nome" name="nome_novo" class="input-style" type="text">
        <input placeholder="Insira o novo email" name="email_novo" class="input-style" type="text">
        <input placeholder="Insira o novo telefone" name="telefone_novo" class="input-style" maxlength="13" type="text" id="Telefone" onkeyup="ValidarTelefone();">
        </div>
        <br> <br>
        <div class="botoesalterar">
        <button class="btn1" type="submit" name="editar"><b>Editar</b></button>
        </div>
    </form>
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

    }

       if(isset($_POST["editar"]) )
       {
          $cpf_alterar = $_POST["cpf_alterar"];
          $nome_novo = $_POST["nome_novo"];
          $email_novo = $_POST["email_novo"];
          $telefone_novo = $_POST["telefone_novo"];
          if($nome_novo == ""){
            $nome_novo = $nome;
          }
          if($email_novo == ""){
            $email_novo = $email;
          }
          if($telefone_novo == ""){
            $telefone_novo = $celular;
          }
           $comando = $pdo->prepare("UPDATE cadastro SET nome_cliente='$nome_novo', email_cliente='$email_novo', celular_cliente='$telefone_novo' WHERE cpf_cliente='$cpf_alterar'");
           $resultado = $comando->execute();
           header("Location:conta.php");
       }
    ?>   

</div>

<footer>
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
</footer>
<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/conta.js"></script>
</body>
</html>