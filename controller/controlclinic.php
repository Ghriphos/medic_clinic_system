<?php
include_once ('../model/classes/Clinic.php');

session_start();

extract($_REQUEST, EXTR_SKIP);

if (isset($acao)) {
    if ($acao == "Incluir") {
        if (
            isset($nome) 
            && isset($cnpj) && isset($email)
            && isset($street) && isset($street_number)
            && isset($street_complement) && isset($district)
            && isset($phone) && isset($open_hour)
            && isset($close_hour)
        ) {
<<<<<<< HEAD
            $name = htmlspecialchars_decode(strip_tags($nome));
=======
            $nome = htmlspecialchars_decode(strip_tags($nome));
>>>>>>> 468e986a99c453e79ca6aa84fe90ab36a56f533a
            $cnpj = htmlspecialchars_decode(strip_tags($cnpj));
            $email = htmlspecialchars_decode(strip_tags($email));
            $street = htmlspecialchars_decode(strip_tags($street));
            $street_number = htmlspecialchars_decode(strip_tags($street_number));
            $street_complement = htmlspecialchars_decode(strip_tags($street_complement));
            $district = htmlspecialchars_decode(strip_tags($district));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $open_hour = htmlspecialchars_decode(strip_tags($open_hour));
            $close_hour = htmlspecialchars_decode(strip_tags($close_hour));
            
            if (
                is_string($nome)&& is_numeric($cnpj)
                && is_string($email) && is_string($street)
                && is_numeric($street_number) && is_string($street_complement)
                && is_string($district) && is_numeric($phone)
                ) {
<<<<<<< HEAD
                    $clinic = new Clinic($nome,$cnpj,$email,$street,$street_number,$street_complement,$district,$phone,$open_hour,$close_hour);
=======
                    $clinic = new Clinic($nome,$cnpj,$email,$street,$street_number,$street_complement,$district,$phone);
>>>>>>> 468e986a99c453e79ca6aa84fe90ab36a56f533a
                    if ($clinic->incluirClinic()){
                        $_SESSION['msg'] = "\n" ."Clínica Incluido com sucesso !!";     
                    } else {

                    //    $_SESSION['msg'] =  "\n" ."Falha no INSERT! Mensagem de erro: '$msg'";
                    }
            } else {
                $_SESSION['msg'] = "Parametros informados são invalidos!!";
                
            }
        }
    }
}
    $path = $_SERVER['HTTP_REFERER'];
    header("Location: $path");
?>