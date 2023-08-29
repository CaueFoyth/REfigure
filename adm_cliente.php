<?php
include("conecta.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>ERP-Re:Figure</title>
    <link rel="stylesheet" type="text/css" href="css/adm_cliente.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>
    <nav class="menu-sidebar">
        <ul>
            <li>
                <a href="adm_page.html">
                    <i class="icon icon-home icon-text"></i>
                    <span class="menu-texto">
                        Página Inícial
                    </span>
                </a>
              
            </li>
            
            <li class="has-subnav">
                <a href="adm_cliente.php">
                   <i class="icon icon-camera icon-text"></i>
                    <span class="menu-texto">Clientes <ion-icon name="people-circle-outline"></ion-icon></span>
                </a>
                
            </li>
        </ul>
        <ul class="logout">
            
            <li>
               <a href="logado.php">
                    <i class="icon icon-plug icon-text"></i>
                    <span class="menu-texto"> Sair <ion-icon name="log-out-outline"></ion-icon></span>
                </a>
            </li>
        </ul>
    </nav>
      
    <div class="cabecalho">
        <div class="divlogo"><img src="imagem/RE FIGURE.png" class="logo"></div>
    </div>

    <div class="corpo">
        <br>
        <h1>Base de clientes</h1>
        <br> <br>
        <div class="tudotabela">
            <table class="tabela"> 
        <div class="caue2">
          <div class="nome"> <b>Nome</b> </div>
          <div class="cpf"> <b>CPF</b> </div>
          <div class="email"> <b>E-mail</b> </div>
          <div class="celular"> <b>Celular</b> </div>
          <div class="acoes"> <b>Ações</b> </div>
        </div> 
        <?php 
             $comando = $pdo->prepare("SELECT * FROM cadastro");
             $resultado = $comando->execute();

             while ($linhas = $comando->fetch() )
             {
                 $nome = $linhas["nome_cliente"]; // Nome da coluna XAMPP
                 $cpf = $linhas["cpf_cliente"]; // Nome da coluna XAMPP
                 $email = $linhas["email_cliente"]; // Nome da coluna XAMPP
                 $celular = $linhas["celular_cliente"]; // Nome da coluna XAMPP
                ?>
                <tr>
                <td class="primeiracoluna"><?php echo($nome); ?></td>
                <td><?php echo($cpf); ?></td>
                <td><?php echo($email); ?></td>
                <td><?php echo($celular); ?></td>
                <td class="ultimacoluna"> 
                    <a href="editarcliente.php"><button class="btn">Editar</button></a> 
                    <a href="excluir.php"><button class="btn">Excluir</button></a> 
                </td>
                </tr>
            <?php } ?> 
      </table> 
      </div>
    </body> 
        
    </div>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>   
<script  src="js/adm_cliente.js"></script>
</body>
</html>