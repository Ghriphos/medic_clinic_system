<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastrar Recepcionista</title>
      <link rel="stylesheet" href="style.css">
   </head>
    <body>
        <?php session_start(); ?>

            <!-- Caixa para a mensagem de erro que pode ser sido armazenada na sessão -->
            <center>
                <b>
                    <?php if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        $_SESSION['msg'] = "";
                    }?>
                </b>
            </center>

        <form action="../controller/controlRecepcionista.php" method="post">
            Incluir Recepcionista
            <br /><br />
            Digite o Nome: <input type="text" name="nome" size="20" />
            <br /><br />
            Digite o Telefone: <input type="text" name="phone" size="20" />
            <br /><br />
            Digite a Rua: <input type="text" name="street" size="40" />
            <br /><br />
            Digite o CPF: <input type="text" name="cpf" size="20" />
            <br /><br />
            Digite a Data de nascimento: <input type="text" name="birthDate" size="20" />
            <br /><br />
            Digite o Contato emergencial: <input type="text" name="cttemerg" size="20" >
            <br /><br />
            Digite o Codigo da recepcionista: <input type="text" name="codRecepcionista" size="20" >
            <br /><br />
            Digite o Horário da recepcionista: <input type="text" name="horario" size="20" >
            <br /><br />
            Digite o estado civil: <input type="text" name="estadocivil" size="20" >
            <br /><br />
            <input type="hidden" name="acao" value="IncluirRecepcionista">
            <input type="submit" value="IncluirRecepcionista" />
            <br><br>
        </form>

        <form action="../controller/controlRecepcionista.php" method="post">
            Alterar Recepcionista
            <br /><br />
            Digite o Nome: <input type="text" name="nome" size="20" />
            <br /><br />
            Digite o Telefone: <input type="text" name="phone" size="20" />
            <br /><br />
            Digite a Rua: <input type="text" name="street" size="40" />
            <br /><br />
            Digite o CPF: <input type="text" name="cpf" size="20" />
            <br /><br />
            Digite a Data de nascimento: <input type="text" name="birthDate" size="20" />
            <br /><br />
            Digite o Contato emergencial: <input type="text" name="cttemerg" size="20" >
            <br /><br />
            Digite o Codigo da recepcionista: <input type="text" name="codRecepcionista" size="20" >
            <br /><br />
            Digite o Horário da recepcionista: <input type="text" name="horario" size="20" >
            <br /><br />
            Digite o estado civil: <input type="text" name="estadocivil" size="20" >
            <br /><br />
            <input type="hidden" name="acao" value="AlterarRecepcionista">
            <input type="submit" value="AlterarRecepcionista" />
        </form>
    </body>
</html>