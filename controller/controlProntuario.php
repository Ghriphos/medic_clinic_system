<?php

include_once ('../model/classes/Prontuario.php');

session_start();

extract($_REQUEST, EXTR_SKIP);

if (isset($acao))
{
    if ($acao == "IncluirPront")
    {
        if (isset($codProntuario) && isset($vacina) && isset($examepedido) && isset($examevisto) && isset($cirurgia) && isset($receita))
        {
            $codProntuario = htmlspecialchars_decode(strip_tags($codProntuario));
            $vacina = htmlspecialchars_decode(strip_tags($vacina));
            $examepedido = htmlspecialchars_decode(strip_tags($examepedido));
            $examevisto = htmlspecialchars_decode(strip_tags($examevisto));
            $cirurgia = htmlspecialchars_decode(strip_tags($cirurgia));
            $receita = htmlspecialchars_decode(strip_tags($receita));

            if (is_numeric($codProntuario) && is_string($vacina) && is_string($examepedido) && is_string($examevisto) && is_string($cirurgia) && is_string($receita))
            {
                $prontuario = new Prontuario($codProntuario, $vacina, $examepedido, $examevisto, $cirurgia, $receita);
                
                // $prontuario = new Prontuario();

                $prontuario -> setCodProntuario($codProntuario);
                $prontuario -> setVacina($vacina);
                $prontuario  -> setExamepedido($examepedido);
                $prontuario  -> setExamevisto($examevisto);
                $prontuario  -> setCirurgia($cirurgia);
                $prontuario  -> setReceita($receita);

                if ($prontuario->incluirProntuario())
                {
                    $_SESSION['msg'] = "\n" . "Prontuário Incluído com sucesso !!";
                }
                else
                {

                    $_SESSION['msg'] =  "\n" ."Falha no INSERT! Mensagem de erro: '$msg'";
                    
                }
            }
            else
            {
                $_SESSION['msg'] = "Parametros informados são invalidos!!";

            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}

if (isset($acao))
{
    if ($acao == "AlterarPront")
    {
        if (isset($codProntuario) && isset($vacina) && isset($examepedido) && isset($examevisto) && isset($cirurgia) && isset($receita))
        {
            $codProntuario = htmlspecialchars_decode(strip_tags($codProntuario));
            $vacina = htmlspecialchars_decode(strip_tags($vacina));
            $examepedido = htmlspecialchars_decode(strip_tags($examepedido));
            $examevisto = htmlspecialchars_decode(strip_tags($examevisto));
            $cirurgia = htmlspecialchars_decode(strip_tags($cirurgia));
            $receita = htmlspecialchars_decode(strip_tags($receita));

            if (is_numeric($codProntuario) && is_string($vacina) && is_string($examepedido) && is_string($examevisto) && is_string($cirurgia) && is_string($receita))
            {
                $prontuario = new Prontuario($codProntuario, $vacina, $examepedido, $examevisto, $cirurgia, $receita);
                
                // $prontuario = new Prontuario();

                $prontuario -> setCodProntuario($codProntuario);
                $prontuario -> setVacina($vacina);
                $prontuario -> setExamepedido($examepedido);
                $prontuario -> setExamevisto($examevisto);
                $prontuario -> setCirurgia($cirurgia);
                $prontuario -> setReceita($receita);

                if ($prontuario->alterarProntuario())
                {
                    $_SESSION['msg'] = "\n" . "Prontuário Alterado com sucesso !!";
                }
                else
                {

                    $_SESSION['msg'] =  "\n" ."Falha no INSERT! Mensagem de erro: '$msg'";
                    
                }
            }
            else
            {
                $_SESSION['msg'] = "Parametros informados são invalidos!!";

            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}


if(isset($acao)){
    if ($acao == 'ConsultarProntuario'){
        if (isset($codProntuario)){
            $codProntuario = htmlspecialchars_decode(strip_tags($codProntuario));
            if (is_numeric($codProntuario)){
                $prontuario = new prontuario($codProntuario, "", "", "", "", "");
                $lista=$prontuario->consultar();
                $_SESSION['linha'] = array();
                $_SESSION['linha'] ['codProntuario'] = $prontuario->getCodProntuario();
                $_SESSION['linha'] ['vacina'] = $prontuario->getVacina();
                $_SESSION['linha'] ['examepedido'] = $prontuario->getExamepedido();
                $_SESSION['linha'] ['examevisto'] = $prontuario->getExamevisto();
                $_SESSION['linha'] ['cirurgia'] = $prontuario->getCirurgia();
                $_SESSION['linha'] ['receita'] = $prontuario->getReceita();
            }else{
                $_SESSION['msg'] = "Parametros informados invalidos em consulta prontuario!!";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}

if (isset($acao)){
    if ($acao == "consultarFullProntuario"){
        $prontuario = new Prontuario("","","","", "", ""); #os "" são a quantidade de campos da tabela
        $lista=array();
        $lista=$prontuario->consultarLista();
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
