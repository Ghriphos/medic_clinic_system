<?php
class Paciente{
    private $tiposanguineo;
    private $alergia;
    private $deficiencia;
    private $convenio;
    private $codPaciente;

    /**
     * Get the value of tiposanguineo
     */ 
    public function getTiposanguineo()
    {
        return $this->tiposanguineo;
    }

    /**
     * Get the value of alergia
     */ 
    public function getAlergia()
    {
        return $this->alergia;
    }

    /**
     * Set the value of alergia
     *
     * @return  self
     */ 
    public function setAlergia($alergia)
    {
        $this->alergia = $alergia;

        return $this;
    }

    /**
     * Get the value of deficiencia
     */ 
    public function getDeficiencia()
    {
        return $this->deficiencia;
    }

    /**
     * Set the value of deficiencia
     *
     * @return  self
     */ 
    public function setDeficiencia($deficiencia)
    {
        $this->deficiencia = $deficiencia;

        return $this;
    }

    /**
     * Get the value of convenio
     */ 
    public function getConvenio()
    {
        return $this->convenio;
    }

    /**
     * Set the value of convenio
     *
     * @return  self
     */ 
    public function setConvenio($convenio)
    {
        $this->convenio = $convenio;

        return $this;
    }

    /**
     * Get the value of codPaciente
     */ 
    public function getCodPaciente()
    {
        return $this->codPaciente;
    }
}
?>