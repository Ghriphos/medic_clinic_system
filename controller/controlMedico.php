<?php
include_once ('../model/classes/Medico.php');

session_start();

extract($_REQUEST, EXTR_SKIP);

if (isset($acao)) {
    if ($acao == "IncluirMedico") {
        if (
            isset($nome) 
            && isset($phone) && isset($street)
            && isset($idade) && isset($cpf)
            && isset($datanasct) && isset($cttemerg)
            && isset($cargo) && isset($PHD)
            && isset($codMedico)
        ) {
            $nome = htmlspecialchars_decode(strip_tags($nome));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $street = htmlspecialchars_decode(strip_tags($street));
            $idade = htmlspecialchars_decode(strip_tags($idade));
            $cpf = htmlspecialchars_decode(strip_tags($cpf));
            $datanasct = htmlspecialchars_decode(strip_tags($datanasct));
            $cttemerg = htmlspecialchars_decode(strip_tags($cttemerg));
            $cargo = htmlspecialchars_decode(strip_tags($cargo));
            $PHD = htmlspecialchars_decode(strip_tags($PHD));
            $codMedico = htmlspecialchars_decode(strip_tags($codMedico));
            
            if (
                is_string($nome)&& is_numeric($phone)
                && is_string($street) && is_numeric($idade)
                && is_numeric($cpf) && is_string($datanasct)
                && is_numeric($cttemerg) && is_numeric($cargo) && is_numeric($PHD) && is_numeric($codMedico)
                ) {
                    $medico= new Medico($nome, $phone, $street, $idade, $cpf, $birthDate, $cttemerg, $cargo, $PHD, $codMedico);
                    if ($medico->incluirMedico()){
                        $_SESSION['msg'] = "\n" ."Médico Incluido com sucesso !!";     
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
    if ($acao == "AlterarMedico") {
        if (
            isset($nome) 
            && isset($phone) && isset($street)
            && isset($cpf) && isset($datanasct) 
            && isset($cttemerg) && isset($cargo) 
            && isset($PHD) && isset($codMedico)
        ) {
            $nome = htmlspecialchars_decode(strip_tags($nome));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $street = htmlspecialchars_decode(strip_tags($street));
            $cpf = htmlspecialchars_decode(strip_tags($cpf));
            $datanasct = htmlspecialchars_decode(strip_tags($datanasct));
            $cttemerg = htmlspecialchars_decode(strip_tags($cttemerg));
            $cargo = htmlspecialchars_decode(strip_tags($cargo));
            $PHD = htmlspecialchars_decode(strip_tags($PHD));
            
            if (
                is_string($nome)&& is_numeric($phone)
                && is_numeric($cpf) && is_string($datanasct)
                && is_numeric($cttemerg) && is_numeric($cargo) && is_numeric($PHD)
                && is_string($street)
                ) {
                    $medico= new Medico($nome, $phone, $street, $cpf, $birthDate, $cttemerg, $cargo, $PHD, $codMedico);
                    if ($medico->incluirMedico()){
                        $_SESSION['msg'] = "\n" ."Médico Incluido com sucesso !!";     
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