<html>
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

<form action="../controller/controlAgenda.php" method="post">
    Incluir Agenda
    <br /><br />
    Digite a Data e hora: <input type="text" name="dataehora" size="20" />
    <br /><br />
    Digite o Status: <input type="text" name="stats" size="20" />
    <br /><br />
    Digite a Descricao: <input type="text" name="descricao" size="40" />
    <br /><br />
    Digite o Codigo da consulta: <input type="text" name="codConsulta" size="20" />
    <br /><br />
    <br /><br />
    <input type="hidden" name="acao" value="IncluirAgenda">
    <input type="submit" value="IncluirAgenda" />
</form>