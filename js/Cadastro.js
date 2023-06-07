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
        if (resposta==true)
        {
            cpf.classList.remove("errado");
            cpf.classList.add("certo");
        }
        if (resposta==false)
        {
            cpf.classList.add("errado");
            cpf.classList.remove("certo");
        }
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
        if (resposta==true)
        {
            Telefone.classList.remove("errado1");
            Telefone.classList.add("certo1");
        }
        if (resposta==false)
        {
            Telefone.classList.add("errado1");
            Telefone.classList.remove("certo1");
        }
    }
    function ValidarNome()
    {
        expressao = /[a-z A-Z]{6}$/g;
        texto = Nome.value;

        resposta = expressao.test(texto);
        if (resposta==true)
        {
            Nome.classList.remove("errado2");
            Nome.classList.add("certo2");
        }
        if (resposta==false)
        {
            Nome.classList.add("errado2");
            Nome.classList.remove("certo2");
        }
    }
    function ValidarEmail()
    {
        expressao = /[a-z @ . _ 0-9 A-Z]{16}$/g;
        texto = Email.value;

        resposta = expressao.test(texto);
        if (resposta==true)
        {
            Email.classList.remove("errado3");
            Email.classList.add("certo3");
        }
        if (resposta==false)
        {
            Email.classList.add("errado3");
            Email.classList.remove("certo3");
        }
    }
    function ValidarSenha()
    {
        texto = Senha.value;
        if (Senha.value == Senha1.value)
        {
            Senha.classList.remove("errado4");
            Senha.classList.add("certo4");
        }
        else
        {
            Senha.classList.add("errado4");
            Senha.classList.remove("certo4");
        }

        if (Senha.value == Senha1.value)
        {
            Senha1.classList.remove("errado4");
            Senha1.classList.add("certo4");
        }
        else
        {
            Senha1.classList.add("errado4");
            Senha1.classList.remove("certo4");
        }
    }
