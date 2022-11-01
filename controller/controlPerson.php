<?php
#crtl : comenta
include_once ('../model/classes/Person.php');

session_start();

extract($_REQUEST, EXTR_SKIP);
if (isset($acao))
{
    if ($acao == "IncluirPerson")
    {
        if (isset($nome) && isset($phone) && isset($street) && isset($cpf) && isset($datanasct) && isset($cttemerg) && isset($estadocivil))
        {
            $nome = htmlspecialchars_decode(strip_tags($nome));
            $phone = htmlspecialchars_decode(strip_tags($phone));
            $street = htmlspecialchars_decode(strip_tags($street));
            $cpf = htmlspecialchars_decode(strip_tags($cpf));
            $datanasct = htmlspecialchars_decode(strip_tags($datanasct));
            $cttemerg = htmlspecialchars_decode(strip_tags($cttemerg));
            $estadocivil = htmlspecialchars_decode(strip_tags($estadocivil));

            if (is_string($phone) && is_string($street) && is_string($cpf) && is_string($datanasct) && is_string($cttemerg) && is_string($estadocivil))
            {
                $person = new Person($nome, $phone, $street, $cpf, $datanasct, $cttemerg, $estadocivil);
                
                // $person = new Person();

                $person -> setNome($nome);
                $person -> setPhone($phone);
                $person  -> setStreet($street);
                $person  -> setCpf($cpf);
                $person  -> setDatanasct($datanasct);
                $person  -> setCttemerg($cttemerg);
                $person  -> setEstadocivil($estadocivil);

                if ($person->incluirPerson())
                {
                    $_SESSION['msg'] = "\n" . "Person Incluído com sucesso !!";
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

