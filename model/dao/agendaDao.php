<?php
include_once('../classes/Agenda.php');

class AgendaDao{

    private $c;

    public function __construct()
    {
    
        $this->c = mysqli_connect("localhost", "root","", "medic_clinic");
        if (mysqli_connect_errno() == 0){
            echo "\n" . "Conexão ok!";
        } else {
            $msg = mysqli_error($this->c);
            $_SESSION['msg'] = "\n" . "Falha na conexão '$msg'";
        }
    }

    public function IncluirAgenda($agenda){
        $sql = "INSERT INTO agenda (dataehora, stats, descricao, codConsulta) VALUES ('". /* aspa simples (') é para concatenar o valor que está dentro da "" (concatenar tipo o .)*/
        $agenda -> getDataehora()."','".
        $agenda -> getStats()."','".
        $agenda -> getDescricao()."','".
        $agenda -> getCodConsulta()."')";
        $result = mysqli_query($this->c, $sql);
        if ($result == true){
            echo "\n" . "Execução bem sucedida do INSERT! ";
            return true;
        }else{
            $msg = mysqli_error($this->c);
            $_SESSION['msg'] = "\n" . "Falha no INSERT! Mensagem de erro: '$msg'";
            return false;
        }
    }   

    public function alterarAgenda($agenda){
        $sql=
        "UPDATE agenda SET ".
        "dataehora = '".$agenda->getDataehora()."',".
        "stats = '".$agenda->getStats()."',".
        "descricao = '".$agenda->getDescricao()."'".
        " WHERE ". " codConsulta = '".$agenda->getCodConsulta()."';"; 

        $result = mysqli_query($this->c,$sql);
        if (mysqli_affected_rows($this->c) == 0) {
            return false;
        }else {
            return true;
        }
    }
}
?>