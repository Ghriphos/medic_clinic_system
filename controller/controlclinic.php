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
            $nome = htmlspecialchars_decode(strip_tags($nome));
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
                    $clinic = new Clinic($nome,$cnpj,$email,$street,$street_number,$street_complement,$district,$phone,$open_hour,$close_hour);
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

if (isset($acao)) {
    if ($acao == "Alterar") {
        if (
            isset($nome) &&
            isset($cnpj) && isset($email)
            && isset($street) && isset($street_number)
            && isset($street_complement) && isset($district)
            && isset($phone) && isset($open_hour)
            && isset($close_hour)
        ) {
            $nome = htmlspecialchars_decode(strip_tags($nome));
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
                is_string($nome)&& 
                is_numeric($cnpj)
                && is_string($email) && is_string($street)
                && is_numeric($street_number) && is_string($street_complement)
                && is_string($district) && is_numeric($phone)
                ) {
                    $clinic = new Clinic($nome,$cnpj,$email,$street,$street_number,$street_complement,$district,$phone,$open_hour,$close_hour);
                    if ($clinic->alterarClinic()){
                        $_SESSION['msg'] = "\n" ."Clínica alterada com sucesso !!";     
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