<!doctype html>
<html lang="pt-br">
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
            <input type="submit" class="btn btn-dark" value="IncluirPaciente" />
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
            <input type="submit" class="btn btn-dark" value="AlterarPaciente" />
        </form>
    </body>
</html>
<br><br>
</section>

<div class="text-center p-3 footerlrv">
    © Medic Clinic LRV
  </div>
</footer>
</html>