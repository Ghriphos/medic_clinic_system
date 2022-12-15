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
                is_string($dataehora) && is_numeric($stats)
                && is_string($descricao) && is_string($codConsulta)
                ) {
                    $agenda = new Agenda($dataehora, $stats, $descricao, $codConsulta);
                    if ($agenda->incluirAgenda()){
                        $_SESSION['msg'] = "\n" ."Agenda Incluída com sucesso !!";     
                    } else {

                        $_SESSION['msg'] =  "\n" ."Falha no INSERT! Mensagem de erro: '$msg'";
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
                is_string($dataehora) && is_numeric($stats)
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

if(isset($acao)){
    if ($acao == 'ConsultarAgenda'){
        if (isset($codConsulta)){
            $codConsulta = htmlspecialchars_decode(strip_tags($codConsulta));
            if (is_numeric($codConsulta)){
                $agenda = new Agenda("","","", $codConsulta);
                $lista=$agenda->consultar();
                $_SESSION['linha'] = array();
                $_SESSION['linha'] ['dataehora'] = $agenda->getDataehora();
                $_SESSION['linha'] ['stats'] = $agenda->getStats();
                $_SESSION['linha'] ['descricao'] = $agenda->getDescricao();
                $_SESSION['linha'] ['codConsulta'] = $agenda->getCodConsulta();
            }else{
                $_SESSION['msg'] = "Parametros informados invalidos em consulta agenda!!";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}

if (isset($acao)){
    if ($acao == "consultarFullagenda"){
        $agenda = new Agenda("","","",""); #os "" são a quantidade de campos da tabela
        $lista=array();
        $lista=$agenda->consultarLista();
        $qtdLinhas= count($lista);
        echo "<hr>". $qtdLinhas;
        $listaArray = array();
        for($i=0; $i<$qtdLinhas; $i++){
            $listaArray[$i] = $lista[$i]->toArray();
        }
        $_SESSION['lista'] = $listaArray;

        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}

if(isset($acao)){
    if($acao == 'Limpar'){
        session_destroy();
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}
    
?>