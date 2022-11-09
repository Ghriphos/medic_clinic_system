<?php
include_once ('../model/classes/Medico.php');

session_start();

extract($_REQUEST, EXTR_SKIP);

if (isset($acao)) {
    if ($acao == "IncluirMedico") {
        if (
            isset($nome) 
            && isset($phone) && isset($street)
            && isset($cpf) && isset($codMedico)
            && isset($birthDate) && isset($cttemerg)
            && isset($cargo) && isset($PHD) 
            && isset($estadocivil)
        ) {
            $nome = htmlspecialchars_decode(strip_tags($nome));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $street = htmlspecialchars_decode(strip_tags($street));
            $cpf = htmlspecialchars_decode(strip_tags($cpf));
            $birthDate = htmlspecialchars_decode(strip_tags($birthDate));
            $cttemerg = htmlspecialchars_decode(strip_tags($cttemerg));
            $cargo = htmlspecialchars_decode(strip_tags($cargo));
            $PHD = htmlspecialchars_decode(strip_tags($PHD));
            $codMedico = htmlspecialchars_decode(strip_tags($codMedico));
            $estadocivil = htmlspecialchars_decode(strip_tags($estadocivil));
            
            if (
                is_string($nome)&& is_numeric($phone)
                && is_string($street) && is_numeric($cpf) 
                && is_string($birthDate) && is_numeric($cttemerg)
                && is_string($cargo) && is_numeric($PHD) 
                && is_numeric($codMedico) && is_string($estadocivil)
                ) {
                    $medico= new Medico($nome, $phone, $street, $cpf, $birthDate, $cttemerg, $cargo, $PHD, $codMedico, $estadocivil);
                    if ($medico->incluirMedico()){
                        $_SESSION['msg'] = "\n" ."Médico Incluido com sucesso !!";     
                    } else {

                       $_SESSION['msg'] =  "\n" ."Falha no INSERT! Mensagem de erro: '$msg'";
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
            && isset($cpf) && isset($codMedico)
            && isset($birthDate) && isset($cttemerg)
            && isset($cargo) && isset($PHD) 
            && isset($estadocivil)
        ) {
            $nome = htmlspecialchars_decode(strip_tags($nome));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $street = htmlspecialchars_decode(strip_tags($street));
            $cpf = htmlspecialchars_decode(strip_tags($cpf));
            $birthDate = htmlspecialchars_decode(strip_tags($birthDate));
            $cttemerg = htmlspecialchars_decode(strip_tags($cttemerg));
            $cargo = htmlspecialchars_decode(strip_tags($cargo));
            $PHD = htmlspecialchars_decode(strip_tags($PHD));
            $codMedico = htmlspecialchars_decode(strip_tags($codMedico));
            $estadocivil = htmlspecialchars_decode(strip_tags($estadocivil));
            
            if (
                is_string($nome)&& is_numeric($phone)
                && is_string($street) && is_numeric($cpf) 
                && is_string($birthDate) && is_numeric($cttemerg)
                && is_string($cargo) && is_numeric($PHD) 
                && is_numeric($codMedico) && is_string($estadocivil)
                ) {
                    $medico= new Medico($nome, $phone, $street, $cpf, $birthDate, $cttemerg, $cargo, $PHD, $codMedico, $estadocivil);
                    if ($medico->alterarMedico()){
                        $_SESSION['msg'] = "\n" ."Médico alterado com sucesso !!";     
                    } else {
                       $_SESSION['msg'] =  "\n" ."Falha no Alterar! Mensagem de erro: '$msg'";
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