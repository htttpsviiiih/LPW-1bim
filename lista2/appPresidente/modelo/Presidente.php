<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Presidente{
    private $nome;
    private $numero;
    private $anoInicio;
    private $anoFim;

    public function __construct($nome, $numero, $anoInicio, $anoFim) {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->anoInicio = $anoInicio;
        $this->anoFim = $anoFim;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of anoInicio
     */
    public function getAnoInicio()
    {
        return $this->anoInicio;
    }

    /**
     * Set the value of anoInicio
     */
    public function setAnoInicio($anoInicio): self
    {
        $this->anoInicio = $anoInicio;

        return $this;
    }

    /**
     * Get the value of anoFim
     */
    public function getAnoFim()
    {
        return $this->anoFim;
    }

    /**
     * Set the value of anoFim
     */
    public function setAnoFim($anoFim): self
    {
        $this->anoFim = $anoFim;

        return $this;
    }


}