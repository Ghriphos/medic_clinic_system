<!doctype html>
<html lang="pt-br">
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medic Clinic LRV</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>


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

<section>
<form action="../controller/controlclinic.php" method="post">
    Incluir Clínica
    <br /><br />
    Digite o codigo clinica: <input type="text" name="cod_clinic" size="20" />
    <br /><br />
    Digite o Nome: <input type="text" name="nome" size="20" />
    <br /><br />
    Digite o CNPJ: <input type="text" name="cnpj" size="20" />
    <br /><br />
    Digite o Email: <input type="text" name="email" size="40" />
    <br /><br />
    Digite a Rua: <input type="text" name="street" size="20" />
    <br /><br />
    Digite o Número da Rua: <input type="text" name="street_number" size="20" />
    <br /><br />
    Digite o Complemento: <input type="text" name="street_complement" size="20" />
    <br /><br />
    Digite o Bairro: <input type="text" name="district" size="20" />
    <br /><br />
    Digite o Telefone: <input type="text" name="phone" size="20" />
    <br /><br />
    Digite o Horário de Abertura: <input type="text" name="open_hour" size="20" />
    <br /><br />
    Digite o Horário de Fechamento: <input type="text" name="close_hour" size="20" />
    <br /><br />
    <input type="hidden" name="acao" value="Incluir">
    <input type="submit" class="btn btn-dark" value="Incluir" />
    <br><br>
</form>

<form action="../controller/controlclinic.php" method="post">
    Alterar Clínica
    <br /><br />
    Digite o codigo clinica: <input type="text" name="cod_clinic" size="20" />
    <br /><br />
    Digite o Nome: <input type="text" name="nome" size="20" />
    <br /><br />
    Digite o CNPJ: <input type="text" name="cnpj" size="20" />
    <br /><br />
    Digite o Email: <input type="text" name="email" size="40" />
    <br /><br />
    Digite a Rua: <input type="text" name="street" size="20" />
    <br /><br />
    Digite o Número da Rua: <input type="text" name="street_number" size="20" />
    <br /><br />
    Digite o Complemento: <input type="text" name="street_complement" size="20" />
    <br /><br />
    Digite o Bairro: <input type="text" name="district" size="20" />
    <br /><br />
    Digite o Telefone: <input type="text" name="phone" size="20" />
    <br /><br />
    Digite o Horário de Abertura: <input type="text" name="open_hour" size="20" />
    <br /><br />
    Digite o Horário de Fechamento: <input type="text" name="close_hour" size="20" />
    <br /><br />
    <input type="hidden" name="acao" value="AlterarClinic">
    <input type="submit" class="btn btn-dark" value="AlterarClinic" />
</form>
<br><br>
</section>

<div class="text-center p-3 footerlrv">
    © Medic Clinic LRV
  </div>
</footer>
</html>