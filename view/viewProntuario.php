<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Medic Clinic LRV</title>
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
                <li class="nav-item">
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


                <form action="../controller/controlProntuario.php" method="post">
                <b>Incluir Prontuario</b>
                    <br /><br />
                    <b>Digite o Código do Prontuario:</b> <input type="text" name="codProntuario" size="20" />
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
                    <input type="hidden" name="acao" value="IncluirPront">
                    <input type="submit" class="btn btn-dark" value="IncluirPront" />
                </form>

                <form action="../controller/controlProntuario.php" method="post">
                <br /><br />
                <b>Alterar Prontuario</b>
                    <br /><br />
                    <b>Digite o Código do Prontuario:</b> <input type="text" name="codProntuario" size="20" />
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
                    <input type="submit" class="btn btn-dark" value="AlterarPront" />
                </form>

                <form action="../controller/controlProntuario.php" method="post">
                    <br /><br />
                    <b>Consultar Prontuário</b>
                    <br /><br />
                    <b>Digite o Codigo do prontuario:</b> <input type="text" name="codProntuario" size="20" />
                    <br /><br />
                    <input type="hidden" name="acao" value="ConsultarProntuario">
                    <input type="submit" class="btn btn-dark" value="ConsultarProntuario" />
                </form>

                <form action="../controller/controlAgenda.php">
                <input type="hidden" name="acao" value="Limpar" />
                    <input type="submit" class="btn btn-dark" value="Limpar" />
                    <br><br>
                </form>

                <form action="../controller/controlProntuario.php" method="post">
                <b>Consultar Full Prontuário</b>
                    <br /><br />
                    <input type="hidden" name="acao" value="consultarFullProntuario">
                    <input type="submit" class="btn btn-dark" value="consultarFullProntuario" />
                </form>

                <form action="../controller/controlAgenda.php">
                    <input type="hidden" name="acao" value="Limpar" />
                    <input type="submit" class="btn btn-dark" value="Limpar" />
                    <br><br>
                </form>

        <table border="1">
            <tr>
                <td><b>Codigo do prontuario</b></td>
                <td><b>Vacina</b></td>
                <td><b>Exame pedido</b></td>
                <td><b>Exame visto</b></td>
                <td><b>cirurgia</b></td>
                <td><b>receita</b></td>
            </tr>

            <?php
            if (isset($_SESSION)){
                foreach ($_SESSION as $linha => $value){
                    echo '<tr>';
                    foreach ($_SESSION[$linha] as $campo){
                        echo '<td>' . $campo . '</td>';
                    }
                    echo '<tr>';
                }
            }
            ?>

            <?php
            include_once('../model/classes/Prontuario.php');

            if (!empty($_SESSION['lista'])) {
                $listaArray = $_SESSION['lista'];
                $qtdLinhas = count ($listaArray);

                for ($i=0; $i < $qtdLinhas; $i++) {
                    $lista[$i] = new Prontuario (
                        $listaArray[$i]['codProntuario'],
                        $listaArray[$i]['vacina'],
                        $listaArray[$i]['examepedido'],
                        $listaArray[$i]['examevisto'],
                        $listaArray[$i]['cirurgia'],
                        $listaArray[$i]['examepedido']
                    );
                }

                for ($i=0; $i < $qtdLinhas; $i++) {
                    echo '<tr>';
                    echo '<td>' . $lista[$i] -> getCodProntuario() . '</td>';
                    echo '<td>' . $lista[$i] -> getVacina() . '</td>';
                    echo '<td>' . $lista[$i] -> getExamePedido() . '</td>';
                    echo '<td>' . $lista[$i] -> getExameVisto() . '</td>';
                    echo '<td>' . $lista[$i] -> getCirurgia() . '</td>';
                    echo '<td>' . $lista[$i] -> getReceita() . '</td>';
                    echo '</tr>';

                }
            }
            ?>
        </table>

        </html>
        <br><br>
        </section>

        <div class="text-center p-3 footerlrv">
            © Medic Clinic LRV
          </div>
        </footer>
    </body>
</html>