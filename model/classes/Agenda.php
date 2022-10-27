<?php

include_once ('../model/dao/ClinicDao.php');
//get = pessoa pode ver     set = pessoa pode alterar
//baixando php get e setters e php debbug
class Agenda{
    private $data_e_hora;
    private $status;
    private $descricao;
    private $cod_agenda;

    //construtor
    public function _construct($data_e_hora, $status, $descricao, $cod_agenda) {
        $this -> setData_e_hora($data_e_hora);
        $this -> setStatus($status);
        $this -> setDescricao($descricao);
        $this -> setCod_agenda($cod_agenda);
        
    }

}

    ?>