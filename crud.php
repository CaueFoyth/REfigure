<?php
include("conecta.php");
$nome = $_POST["nome_cliente"];
$cpf = $_POST["cpf_cliente"];
$email = $_POST["email_cliente"];
$celular = $_POST["celular_cliente"];
$senha_cliente = $_POST["senha_cliente"];



// Se clicou no botão INSERIR:
if(isset($_POST["inserir"]) )
{
    $comando = $pdo->prepare("INSERT INTO `cadastro` (`nome_cliente`, `cpf_cliente`, `email_cliente`, `celular_cliente`, `senha_cliente`, `admin`, `logado`) VALUE('$nome', '$cpf', '$email', '$celular', '$senha_cliente','0','0')");
    $resultado = $comando->execute();
    header("Location: Cadastro.html");
    header("Location: login.php"); exit;
}

// Se clicou no botão excluir:
// if(isset($_POST["excluir"]) )
// {
//     $comando = $pdo->prepare("DELETE FROM alunos WHERE matricula=$matricula");
//     $resultado = $comando->execute();
//     header("Location: index.html");
// }

// // Se clicou no botão ALTERAR:
// if(isset($_POST["alterar"]) )
// {
//     $comando = $pdo->prepare("UPDATE alunos SET nome='$nome', idade=$idade WHERE matricula=$matricula");
//     $resultado = $comando->execute();
//     header("Location: index.html");
// }

// // Se clicou no botão LISTAR:
// if(isset($_POST["listar"]) )
// {
//     $comando = $pdo->prepare("SELECT * FROM alunos");
//     $resultado = $comando->execute();

//     while ($linhas = $comando->fetch() )
//     {
//         $m = $linhas["matricula"]; // Nome da coluna XAMPP
//         $n = $linhas["nome"]; // Nome da coluna XAMPP
//         $i = $linhas["idade"]; // Nome da coluna XAMPP
//         echo("Matricula: $m Nome: $n Idade: $i <br>");
//     }
// }

?>  