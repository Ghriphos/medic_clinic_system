<?php
#Todos os acessos ao site estarão aqui, fazendo com que qualquer banco possa ser usado
#Ela foi criada para fazer conexão com o banco de dados
include_once ('../model/classes/Paciente.php');

class PacienteDao
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

    public function incluirPaciente($paciente)
    {
        $sql = "INSERT INTO paciente (tiposanguineo, alergia, deficiencia, convenio, codPaciente, nome, street, cpf, birthDate, cttemerg, estadocivil, phone) 
        VALUES ('" . #Aspas simples pois isso vem do banco de dados. E aspas duplas porque estamos botando valores
        $paciente->getTiposanguineo()."','".
        $paciente->getAlergia()."','".
        $paciente->getDeficiencia()."','".
        $paciente->getConvenio()."','".
        $paciente->getCodPaciente()."','".
        $paciente->getNome()."','".
        $paciente->getStreet()."','".
        $paciente->getCpf()."','".
        $paciente->getBirthDate()."','".
        $paciente->getCttemerg()."','".
        $paciente->getEstadocivil()."','".
        $paciente->getPhone()."');";

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

    public function alterarPaciente($paciente)
    {
        $sql=
        "UPDATE paciente SET ".
        "nome = '".$paciente->getNome()."',".
        "phone = '".$paciente->getPhone()."',".
        "street = '".$paciente->getStreet()."',".
        "birthDate = '".$paciente->getBirthDate()."',".
        "cttemerg = '".$paciente->getCttemerg()."',".
        "tiposanguineo = '".$paciente->getTiposanguineo()."',".
        "alergia = '".$paciente->getAlergia()."',".
        "deficiencia = '".$paciente->getDeficiencia()."',".
        "convenio = '".$paciente->getConvenio()."',".
        "cpf = '".$paciente->getCpf()."',".
        "estadocivil = '".$paciente->getEstadocivil()."'".
        " WHERE ". " codPaciente = '".$paciente->getCodPaciente()."';"; 

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
