<?php
include_once('../model/classes/Clinic.php');

class ClinicDao{

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

    public function IncluirClinic($clinic){
        $sql = "INSERT INTO clinic (cod_clinic, nome, cnpj, email, street, street_number, street_complement, district, phone, open_hour, close_hour) VALUES ('". /* aspa simples (') é para concatenar o valor que está dentro da "" (concatenar tipo o .)*/
        $clinic -> getCod_clinic()."','".
        $clinic -> getNome()."','".
        $clinic -> getCnpj()."','".
        $clinic -> getEmail()."','".
        $clinic -> getStreet()."','".
        $clinic -> getStreet_number()."','".
        $clinic -> getStreet_complement()."','".
        $clinic -> getDistrict()."','".
        $clinic -> getPhone()."','".
        $clinic -> getOpen_hour()."','".
        $clinic -> getClose_hour()."')";
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

    public function alterarClinic($clinic){
        $sql=
        "UPDATE clinic SET ".
        "nome = '".$clinic->getNome()."',".
        "cnpj = '".$clinic->getCnpj()."',".
        "email = '".$clinic->getEmail()."',".
        "street = '".$clinic->getStreet()."',".
        "street_number = '".$clinic->getStreet_number()."',".
        "district = '".$clinic->getDistrict()."',".
        "phone = '".$clinic->getPhone()."',".
        "open_hour = '".$clinic->getOpen_hour()."',".
        "close_hour = '".$clinic->getClose_hour()."'".
        " WHERE ". " cod_clinic = '".$clinic->getCod_clinic()."';"; 

        $result = mysqli_query($this->c,$sql);
        if (mysqli_affected_rows($this->c) == 0) {
            return false;
        }else {
            return true;
        }
    }
}
?>