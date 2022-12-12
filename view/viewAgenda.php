<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medic Clinic LRV</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<?php session_start();
error_reporting(E_ERROR | E_PARSE);
?>



<!-- Caixa para a mensagem de erro que pode ser sido armazenada na sessão -->

<nav class="navbar navbar-expand-lg bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="viewAgenda.php">Agenda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewClinic.php">Clinica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewMedico.php">Médico</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewPaciente.php">Paciente</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewProntuario.php">Prontuario</a>
        </li>
        </li><li class="nav-item">
            <a class="nav-link" href="viewRecepcionista.php">Recepcionista</a>
        </li>
    </ul>
</nav>

<center>
    <b>
        <?php if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            $_SESSION['msg'] = "";
        }?>
    </b>
</center>

<section>
    <form action="../controller/controlAgenda.php" method="post">
        Incluir Agenda
        <br/><br/>
        Digite a Data e hora: <input type="text" name="dataehora" size="20" />
        <br /><br />
        Digite o Status: <input type="text" name="stats" size="20" />
        <br /><br />
        Digite a Descricao: <input type="text" name="descricao" size="40" />
        <br /><br />
        Digite o Codigo da consulta: <input type="text" name="codConsulta" size="20" />
        <br /><br />
        <input type="hidden" name="acao" value="IncluirAgenda">
        <input type="submit" class="btn btn-dark" value="IncluirAgenda" />
    </form>

    <form action="../controller/controlAgenda.php" method="post">
        <br /><br />
        Alterar Agenda
        <br /><br />
        Digite a Data e hora: <input type="text" name="dataehora" size="20" />
        <br /><br />
        Digite o Status: <input type="text" name="stats" size="20" />
        <br /><br />
        Digite a Descricao: <input type="text" name="descricao" size="40" />
        <br /><br />
        Digite o Codigo da consulta: <input type="text" name="codConsulta" size="20" />
        <br /><br />
        <input type="hidden" name="acao" value="AlterarAgenda">
        <input type="submit" class="btn btn-dark" value="AlterarAgenda" />
    </form>






    <form action="../controller/controlAgenda.php" method="post">
        <br /><br />
        Consultar Agenda
        <br /><br />
        Digite o Codigo da consulta: <input type="text" name="codConsulta" size="20" />
        <br /><br />
        <input type="hidden" name="acao" value="ConsultarAgenda">
        <input type="submit" class="btn btn-dark" value="ConsultarAgenda" />
    </form>

    <form action="../controller/controlAgenda.php">
        <input type="hidden" name="acao" value="Limpar" />
        <input type="submit" class="btn btn-dark" value="Limpar" />
    </form>

    <form action="../controller/controlAgenda.php" method="post">
        <br /><br />
        Consultar Full Agenda
        <br /><br />
        <input type="hidden" name="acao" value="consultarFullagenda">
        <input type="submit" class="btn btn-dark" value="consultarFullagenda" />
    </form>

    <form class="formmm" action="../controller/controlAgenda.php">
        <input type="hidden" name="acao" value="Limpar">
        <input type="submit" class="btn btn-dark" value="Limpar" />
    </form>
    <br/><br/>

    <table border="1">
        <tr>
            <td><b>Data e hora</b></td>
            <td><b>Status</b></td>
            <td><b>Descricao</b></td>
            <td><b>Codigo da consulta</b></td>
        </tr>

        <?php
        include_once('../model/classes/Agenda.php');

        if (!empty($_SESSION['lista'])) {
            $listaArray = $_SESSION['lista'];
            $qtdLinhas = count ($listaArray);

            for ($i=0; $i < $qtdLinhas; $i++) {
                $lista[$i] = new Agenda (
                    $listaArray[$i]['dataehora'],
                    $listaArray[$i]['stats'],
                    $listaArray[$i]['descricao'],
                    $listaArray[$i]['codConsulta']
                );
            }

            for ($i=0; $i < $qtdLinhas; $i++) {
                    echo '<tr>';
                    echo '<td>' . $lista[$i] -> getDataehora() . '</td>';
                    echo '<td>' . $lista[$i] -> getStats() . '</td>';
                    echo '<td>' . $lista[$i] -> getDescricao() . '</td>';
                    echo '<td>' . $lista[$i] -> getCodConsulta() . '</td>';
                    echo '</tr>';

            }
        }
        ?>
    </table>
    <br><br>
</section>

<div class="text-center p-3 footerlrv">
    © Medic Clinic LRV
</div>
</footer>
</body>
</html>