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
            Digite o nome do paciente: <input type="text" name="codConsulta" size="20" />
            <br /><br />
            Digite o nome do médico: <input type="text" name="nomePaciente" size="20" />
            <br /><br />
            Digite a data e hora da consulta: <input type="text" name="nomeMedico" size="40" />
            <br /><br />
            Digite o tipo da consulta: <input type="text" name="dataConsulta" size="20" />
            <br /><br />
            Digite o encaminhamento para o paciente: <input type="text" name="tipoConsulta" size="20" />
            <br /><br />
            Digite o retorno do encaminhamento (caso ja tenha algo encaminhado a ser visualizado de consultas passadas): <input type="text" name="encaminhamento" size="20" />
            <br /><br />
            Digite a descrição da consulta: <input type="text" name="descricao" size="20" />
            <br /><br />
            <input type="hidden" name="acao" value="IncluirPront">
            <input type="submit" value="IncluirPront" />
        </form>

        <form action="../controller/controlProntuario.php" method="post">
        <br /><br />
            Alterar Prontuario
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
            <input type="hidden" name="acao" value="AlterarPront">
            <input type="submit" value="AlterarPront" />
        </form>
    </body>
</html>