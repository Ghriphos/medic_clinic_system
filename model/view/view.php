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

<form action="../controller/controlclinic.php" method="post">
    Incluir Clínica
    <br /><br />
    Digite o Nome: <input type="text" name="name" size="20" />
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
    <br /><br />
    <input type="hidden" name="acao" value="Incluir">
    <input type="submit" value="Incluir" />
</form>