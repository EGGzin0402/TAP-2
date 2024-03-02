<?php

namespace App;

class Carro{

    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano){

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;

    }

    public function exibirInformacoes(){
        echo "Marca: $this->marca, modelo: $this->modelo, ano: $this->ano.";
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}