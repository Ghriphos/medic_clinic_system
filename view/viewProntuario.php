<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastrar Prontuario</title>
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

        <form action="../controller/controlProntuario.php" method="post">
            Incluir Prontuario
            <br /><br />
            Digite a Vacina: <input type="text" name="vacina" size="20" />
            <br /><br />
            Digite o Exame pedido: <input type="text" name="examepedido" size="20" />
            <br /><br />
            Digite o Exame visto: <input type="text" name="examevisto" size="40" />
            <br /><br />
            Digite a cirurgia: <input type="text" name="cirurgia" size="20" />
            <br /><br />
            Digite a receita: <input type="text" name="receita" size="20" />
            <br /><br />
            Digite o codigo prontuario: <input type="text" name="codProntuario" size="20" />
            <br /><br />
            <br /><br />
            <input type="hidden" name="acao" value="IncluirPront">
            <input type="submit" value="IncluirPront" />
        </form>
    </body>
</html>