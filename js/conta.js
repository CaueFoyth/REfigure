function Logo()
{
  window.location.replace("index.html")
};

function Logo1()
{
  window.location.replace("logado.php")
};

function senha()
{
  window.location.replace("senha.php")
};

function carrinho()
{
  window.location.replace("carrinho.php")
};

function suporte()
{
  window.location.replace("suporte.html")
};

function ValidarCPF()
    {
        //ACESSE O SITE regex101.com
        expressao = /[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/g;
        texto = cpf.value;
        if (texto.length==3)
        {
            cpf.value = texto + ".";
        }
        if (texto.length==7)
        {
            cpf.value = texto + ".";
        }
        if (texto.length==11)
        {
            cpf.value = texto + "-";
        }
        resposta = expressao.test(texto);
    }
    function ValidarTelefone()
    {
        //ACESSE O SITE regex101.com
        expressao = /[0-9]{2} [0-9]{5}-[0-9]{4}$/g;
        texto = Telefone.value;
        if (texto.length==2)
        {
            Telefone.value = texto + " "
        }
        if (texto.length==8)
        {
            Telefone.value = texto + "-"
        }
        resposta = expressao.test(texto);
    }