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
    <link rel="icon" href="imagem/RE FIGURE.png">
    <link rel="stylesheet" type="text/css" href="css/carrinho.css">
</head>
<body>

    <div class="cabecalho">   <!-- Este é o cabeçalho -->
        <div class="divvoltar"><a href="index.php"><img src="imagem/RE FIGURE.png" class="logo"></div></a>
        <div class="invisivel"></div> <!-- Div invisivel serve apenas para alinhar e ajustar a responsividade -->
    </div>
    <div class="corpo">
        <div class="esquerda">
        <div class="meucarrinho" style="font-size: 25px;"><b>Meu Carrinho</b></div>
        <div class="alinharr">
    <div class="juntartabela">
        <div class="tebela1">
            <div class="produto"><b>Produto</b></div>
            <div class="preco"><b>Preço</b></div>
            <div class="quantidade"><b>Quantidade</b></div>
            <div class="total"><b>Total</b></div>
        </div>
    <table>
        <?php 
             $comando = $pdo->prepare("SELECT * FROM produtos");
             $resultado = $comando->execute();

             while ($linhas = $comando->fetch() )
             {
                 $nome = $linhas["nome_produto"]; // Nome da coluna XAMPP
                 $preco = $linhas["preco_produto"]; // Nome da coluna XAMPP
                 $qtd = $linhas["qtd_produto"]; // Nome da coluna XAMPP
                 $final= $preco * $qtd;
                 $total = number_format($final, 2, ',', ' ');
                ?>
                <tr class="giovani">
                <td><?php echo($nome); ?></td>
                <td><p>R$</p><?php echo($preco); ?></td>
                <td><?php echo($qtd); ?> </td>
                <td><p>R$</p><?php echo($total); ?></td>
                </tr>
            <?php } ?> 
        </table>
    </div>
    <div class="alinharentrega">
        <div class="entrega"><b>Entrega</b> <br>
            <form action=""> 
                <div class="styleinput"><input type="number" placeholder="000000.000"></div>
                <div class="styleinput1"><input type="submit" value="Calcular"></div>
            </form>
                <h3>Saiba se você tem Frete Gratis</h3>
        </div>
        <div class="aplicar"><b>Aplicar código de cupom</b> <br>
            <form action="">
                <div class="styleinput"><input type="text" placeholder="Cupom"></div>
                <div class="styleinput1"><input type="submit" value="Aplicar"></div>
            </form>
            <div class="divinvisivell"></div>
        </div>
        </div>
    </div>
        </div>
        <div class="direita">
            <div class="invisible"></div>
            <div class="tabela3">
                <div class="resumo"><b>Resumo do Pedido</b></div>
                <div class="subtotal">
                    <div class="sub">Subtotal</div>
                    <div class="valor1">R$:0,00</div>
                </div>
                <div class="entrega1">
                    <div class="entr">Entrega</div>
                    <div class="valor2">R$:0,00</div>
                </div>
                <div class="total2">
                    <div class="tot">Total</div>
                    <div class="valor3">
                        <div class="valor4">R$:0,00</div>
                        <div class="valor5">R$<?php echo($total); ?></div>
                    </div>
                </div>
            </div>
            <div class="finalizar">
                <div class="adicionarmais"><input type="submit" value="Adicionar mais produtos"></div>
                <div class="fecharpedido"><input type="submit" value="Fechar Pedido"></div>
            </div>
        </div>
    </div>
    
</body>
</html>