<?php
#Todos os acessos ao site estarão aqui, fazendo com que qualquer banco possa ser usado
#Ela foi criada para fazer conexão com o banco de dados
include_once ('../model/classes/Recepcionista.php');

class RecepcionistaDao
{
    private $c; #É o atributo que tem a conexão (Abre ele) com o banco de dados que eu estiver trabalhando, no nosso caso Mysql
    public function __construct()
    {
        $this->c = mysqli_connect("localhost", "root", "", "medic_clinic");
        if (mysqli_connect_errno() == 0)
        {
            echo "\n" . "Conexão ok!";
        }
        else
        {
            $msg = mysqli_connect_error();
            echo "\n" . "Erro na conexão SQL!";
            echo "\n" . "O Mysql retornou a seguinte mensagem" . $msg;
        }
    }

    public function incluirRecepcionista($recepcionista)
    {
        $sql = "INSERT INTO recepcionista (codRecepcionista, horario, nome, street, cpf, birthdate, cttemerg, estadocivil, phone) 
        VALUES ('" . #Aspas simples pois isso vem do banco de dados. E aspas duplas porque estamos botando valores
        $recepcionista->getCodRecepcionista()."','".
        $recepcionista->getHorario()."','".
        $recepcionista->getNome()."','".
        $recepcionista->getStreet()."','".
        $recepcionista->getCpf()."','".
        $recepcionista->getBirthDate()."','".
        $recepcionista->getCttemerg()."','".
        $recepcionista->getEstadocivil()."','".
        $recepcionista->getPhone()."');";

        $result = mysqli_query($this->c, $sql);
        if ($result == true)
        {
            echo "\n" . "Execução bem sucedida do INSERT!";
            return true;
        }
        else
        {
            $msg = mysqli_error($this->c);
            $_SESSION['msg'] = "\n" . "Falha no INSERT! Mensagem de erro: '$msg'";
            return false;
        }
    }

    public function alterarrecepcionista($recepcionista)
    {
        $sql=
        "UPDATE recepcionista SET ".
        "nome = '".$recepcionista->getNome()."',".
        "phone = '".$recepcionista->getPhone()."',".
        "street = '".$recepcionista->getStreet()."',".
        "birthdate = '".$recepcionista->getBirthDate()."',".
        "cttemerg = '".$recepcionista->getCttemerg()."',".
        "horario = '".$recepcionista->getHorario()."',".
        "cpf = '".$recepcionista->getCpf()."',".
        "estadocivil = '".$recepcionista->getEstadocivil()."'".
        " WHERE ". " codRecepcionista = '".$recepcionista->getCodRecepcionista()."';"; 

        $result = mysqli_query($this->c,$sql);
        if (mysqli_affected_rows($this->c) == 0) {
            return false;
        }else {
            return true;
        }
    }
}

#Se eu quero usar um atributo de uma classe, devo usar "This"

?>
