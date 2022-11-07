<?php
include_once ('../model/classes/Agenda.php');

session_start();

extract($_REQUEST, EXTR_SKIP);

if (isset($acao)) {
    if ($acao == "IncluirAgenda") {
        if (
            isset($dataehora) 
            && isset($stats) && isset($descricao)
            && isset($codConsulta)
        ) {
            $dataehora = htmlspecialchars_decode(strip_tags($dataehora));
            $stats = htmlspecialchars_decode(strip_tags($stats));
            $descricao = htmlspecialchars_decode(strip_tags($descricao));
            $codConsulta = htmlspecialchars_decode(strip_tags($codConsulta));
            
            if (
                is_numeric($stats)
                && is_string($descricao) && is_string($codConsulta)
                ) {
                    $agenda = new Agenda($dataehora, $stats, $descricao, $codConsulta);
                    if ($agenda->incluirAgenda()){
                        $_SESSION['msg'] = "\n" ."Agenda Incluída com sucesso !!";     
                    } else {

                    //    $_SESSION['msg'] =  "\n" ."Falha no INSERT! Mensagem de erro: '$msg'";
                    }
            } else {
                $_SESSION['msg'] = "Parametros informados são invalidos!!";
                
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}

if (isset($acao)) {
    if ($acao == "AlterarAgenda") {
        if (
            isset($dataehora) 
            && isset($stats) && isset($descricao)
            && isset($codConsulta)
        ) {
            $dataehora = htmlspecialchars_decode(strip_tags($dataehora));
            $stats = htmlspecialchars_decode(strip_tags($stats));
            $descricao = htmlspecialchars_decode(strip_tags($descricao));
            $codConsulta = htmlspecialchars_decode(strip_tags($codConsulta));
            
            if (
                is_numeric($stats)
                && is_string($descricao) && is_string($codConsulta)
                ) {
                    $agenda = new Agenda($dataehora, $stats, $descricao, $codConsulta);
                    if ($agenda->alterarAgenda()){
                        $_SESSION['msg'] = "\n" ."Agenda Alterada com sucesso !!";     
                    } else {

                    //    $_SESSION['msg'] =  "\n" ."Falha no INSERT! Mensagem de erro: '$msg'";
                    }
            } else {
                $_SESSION['msg'] = "Parametros informados são invalidos!!";
                
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}
    
?>