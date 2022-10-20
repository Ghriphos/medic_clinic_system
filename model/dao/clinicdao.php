<?php
include_once('../classes/clinic.php');

class ClinicDao{

    private $c;

    public function _construct(){
        $this -> c = mysqli_connect("localhost", "root", "", "medic_clinic");
        if (mysqli_connect_errno() == 0){
            echo "\n" . "Conexão ok!";
        } else {
            $msg = mysqli_connect_error();
            echo "\n" . "Erro na conexão SQL!";
            echo "\n" . "O MySQL retornou a seguinte mensagem";
        }
    }

    public function IncluirClinic($clinic){
        print_r($clinic);
        $sql = "INSERT INTO clinic (name, cnpj, email, street, street_number, street_complement, district, phone, open_hour, close_hour) VALUES ('". /* aspa simples (') é para concatenar o valor que está dentro da "" (concatenar tipo o .)*/
        $clinic -> getName()."','".
        $clinic -> getCnpj()."','".
        $clinic -> getEmail()."','".
        $clinic -> getStreet()."','".
        $clinic -> getStreet_number()."','".
        $clinic -> getStreet_complement()."','".
        $clinic -> getDistrict()."','".
        $clinic -> getPhone()."','".
        $clinic -> getOpen_hour()."','".
        $clinic -> getClose_hour()."')";
        $result = mysqli_query($this -> c, $sql);
        if ($result == true){
            echo "\n" . "Execução bem sucedida do INSERT! ";
            return true;
        }else{
            $msg = mysqli_error($this -> c);
            $_SESSION['msg'] = "\n" . "Falha no INSERT! Mensagem de erro: '$msg'";
            return false;
        }
    }   
}
?>