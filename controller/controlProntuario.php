<?php

include_once ('../model/classes/Prontuario.php');

session_start();

extract($_REQUEST, EXTR_SKIP);

if (isset($acao))
{
    if ($acao == "IncluirPront")
    {
        if (isset($vacina) && isset($examepedido) && isset($examevisto) && isset($cirurgia) && isset($receita))
        {
            $vacina = htmlspecialchars_decode(strip_tags($vacina));
            $examepedido = htmlspecialchars_decode(strip_tags($examepedido));
            $examevisto = htmlspecialchars_decode(strip_tags($examevisto));
            $cirurgia = htmlspecialchars_decode(strip_tags($cirurgia));
            $receita = htmlspecialchars_decode(strip_tags($receita));

            if (is_string($vacina) && is_string($examepedido) && is_string($examevisto) && is_string($cirurgia) && is_string($receita))
            {
                $prontuario = new Prontuario($vacina, $examepedido, $examevisto, $cirurgia, $receita);
                
                // $prontuario = new Prontuario();

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
    }
    $path = $_SERVER['HTTP_REFERER'];
    header("Location: $path");
}

