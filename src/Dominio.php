<?php

final Class Dominio {

    public $dominio;

    public $dominiosRegistrados;

    public function __construct($dominio)
    {
        $this->dominio = $dominio;
        $this->dominiosRegistrados = array (
            'kinghost.com.br',
            'kinghost.com',
            'gmail.com',
            'google.com.br',
            'bah.poa.br',
            'hotmail.com',
            'facebook.com'
        );
    }

    /** Valida se a string foi passada vazia */
    public function validaDominioVazio() {
        return empty($this->dominio);
    }

    /** Retire espaços em branco da string */
    public function retiraEspacos() {
        $formater = str_replace(' ', '',$this->dominio);
        return $formater;

    }

    /** Valida quantidade minima de 2 caracteres */
    public function minimoCaracteres() {
        if (strlen($this->dominio) > 2) {
            return false;
        }

        return true;
    }

    /** Valida quantidade maxima de 26 caracteres */
    public function maximoCaracteres() {
        if (strlen($this->dominio) < 26) {
            return false;
        }

        return true;
    }

    /** Não pode conter somente números  */
    public function somenteNumeros() {
        return is_numeric($this->dominio);
    }

    /** Não pode ser um domínio já registrado */
    public function verificarDominioRegistrado() {
        if (in_array($this->dominio, $this->dominiosRegistrados)) {
            return false;
        }

        return true;
    }
}