<?php

    //validação de data, e formatação das mesmas

function validar_data($data)
{
    $v = explode("/", $data);
    if (count($v) == 3) {
        $result = checkdate($v[1], $v[0], $v[2]);
        return $result;
    }
}

function formatardataBancoEnvio($data)
{
    $v = explode("/", $data);
    $dataBanco = $v[2] . '-' . $v[1] . '-' . $v[0];
    return $dataBanco;
}

function formatardataTela($data)
{
    $v = explode('-', $data);
    $dataTela = $v[2] . '/' . $v[1] . '/' . $v[0];
    return $dataTela;
}

function formatarTempoBancoEnvio($tempo){
    $tempo = $tempo . ":00";
    return $tempo;
}
?>