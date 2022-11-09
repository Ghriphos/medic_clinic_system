<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastrar Paciente</title>
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

        <form action="../controller/controlPaciente.php" method="post">
            Incluir Paciente
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
            Digite o Tipo sanguineo: <input type="text" name="tiposanguineo" size="20" >
            <br /><br />
            Digite a Alergia: <input type="text" name="alergia" size="20" >
            <br /><br />
            Digite a Deficiencia: <input type="text" name="deficiencia" size="20" >
            <br /><br />
            Digite o Convenio: <input type="text" name="convenio" size="20" >
            <br /><br />
            Digite o Código do Paciente: <input type="text" name="codPaciente" size="20" >
            <br /><br />
            Digite o estado civil: <input type="text" name="estadocivil" size="20" >
            <br /><br />
            <input type="hidden" name="acao" value="IncluirPaciente">
            <input type="submit" value="IncluirPaciente" />
            <br><br>
        </form>

        <form action="../controller/controlPaciente.php" method="post">
            Alterar Paciente
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
            Digite o Tipo sanguineo: <input type="text" name="tiposanguineo" size="20" >
            <br /><br />
            Digite a Alergia: <input type="text" name="alergia" size="20" >
            <br /><br />
            Digite a Deficiencia: <input type="text" name="deficiencia" size="20" >
            <br /><br />
            Digite o Convenio: <input type="text" name="convenio" size="20" >
            <br /><br />
            Digite o Código do Paciente: <input type="text" name="codPaciente" size="20" >
            <br /><br />
            Digite o estado civil: <input type="text" name="estadocivil" size="20" >
            <br /><br />
            <input type="hidden" name="acao" value="AlterarPaciente">
            <input type="submit" value="AlterarPaciente" />
        </form>
    </body>
</html>