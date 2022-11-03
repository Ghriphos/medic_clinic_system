<?php

#Todos os acessos ao site estarão aqui, fazendo com que qualquer banco possa ser usado
#Ela foi criada para fazer conexão com o banco de dados
include_once ('../classes/Medico.php');

class MedicoDao
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

    public function incluirMedico($medico)
    {
        $sql = "INSERT INTO medico (cargo, PHD, codMedico) 
        VALUES ('" . #Aspas simples pois isso vem do banco de dados. E aspas duplas porque estamos botando valores
        $medico->getCargo()."','".
        $medico->getPHD()."','".
        $medico->getcodMedico()."');";

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

}

#Se eu quero usar um atributo de uma classe, devo usar "This"

?>
