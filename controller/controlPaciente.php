<?php
include_once ('../model/classes/Paciente.php');

session_start();

extract($_REQUEST, EXTR_SKIP);

if (isset($acao)) {
    if ($acao == "IncluirPaciente") {
        if (
            isset($nome) 
            && isset($phone) && isset($street)
            && isset($cpf) && isset($codPaciente)
            && isset($birthDate) && isset($cttemerg)
            && isset($tiposanguineo) && isset($alergia) 
            && isset($estadocivil) && isset($deficiencia) && isset($convenio)  
        ) {
            $nome = htmlspecialchars_decode(strip_tags($nome));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $street = htmlspecialchars_decode(strip_tags($street));
            $cpf = htmlspecialchars_decode(strip_tags($cpf));
            $birthDate = htmlspecialchars_decode(strip_tags($birthDate));
            $cttemerg = htmlspecialchars_decode(strip_tags($cttemerg));
            $tiposanguineo = htmlspecialchars_decode(strip_tags($tiposanguineo));
            $alergia = htmlspecialchars_decode(strip_tags($alergia));
            $codPaciente = htmlspecialchars_decode(strip_tags($codPaciente));
            $estadocivil = htmlspecialchars_decode(strip_tags($estadocivil));
            $deficiencia = htmlspecialchars_decode(strip_tags($deficiencia));
            $convenio = htmlspecialchars_decode(strip_tags($convenio));
            
            if (
                is_string($nome)&& is_numeric($phone)
                && is_string($street) && is_numeric($cpf) 
                && is_string($birthDate) && is_numeric($cttemerg)
                && is_string($tiposanguineo) && is_string($alergia) 
                && is_numeric($codPaciente) && is_string($estadocivil)
                && is_string($deficiencia) && is_string($convenio)
                ) {
                    $paciente= new Paciente($nome, $phone, $street, $cpf, $birthDate, $cttemerg, $tiposanguineo, $alergia, $codPaciente, $estadocivil, $deficiencia, $convenio);
                    if ($paciente->incluirPaciente()){
                        $_SESSION['msg'] = "\n" ."Paciente Incluido com sucesso !!";     
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
    if ($acao == "AlterarPaciente") {
        if (
            isset($nome) 
            && isset($phone) && isset($street)
            && isset($cpf) && isset($codPaciente)
            && isset($birthDate) && isset($cttemerg)
            && isset($tiposanguineo) && isset($alergia) 
            && isset($estadocivil)
        ) {
            $nome = htmlspecialchars_decode(strip_tags($nome));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $street = htmlspecialchars_decode(strip_tags($street));
            $cpf = htmlspecialchars_decode(strip_tags($cpf));
            $birthDate = htmlspecialchars_decode(strip_tags($birthDate));
            $cttemerg = htmlspecialchars_decode(strip_tags($cttemerg));
            $tiposanguineo = htmlspecialchars_decode(strip_tags($tiposanguineo));
            $alergia = htmlspecialchars_decode(strip_tags($alergia));
            $codPaciente = htmlspecialchars_decode(strip_tags($codPaciente));
            $estadocivil = htmlspecialchars_decode(strip_tags($estadocivil));
            
            if (
                is_string($nome)&& is_numeric($phone)
                && is_string($street) && is_numeric($cpf) 
                && is_string($birthDate) && is_numeric($cttemerg)
                && is_string($tiposanguineo) && is_numeric($alergia) 
                && is_numeric($codPaciente) && is_string($estadocivil)
                ) {
                    $paciente= new Paciente($nome, $phone, $street, $cpf, $birthdate, $cttemerg, $tiposanguineo, $alergia, $deficiencia, $convenio, $codPaciente, $estadocivil);
                    if ($medico->alterarPaciente()){
                        $_SESSION['msg'] = "\n" ."Paciente alterado com sucesso !!";     
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