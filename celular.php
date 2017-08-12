<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Celular
 *
 * @author leonardo
 */
class Celular {
    var $nome;
    var $marca;
    var $tamanhoTela;
    var $memoriaInterna;
    var $memoriaRAM;
    var $preco;

    function Celular($nome, $marca, $tamanhoTela, $memoriaInterna, $memoriaRAM, $preco){
        $this-> nome = $nome;
        $this-> marca = $marca;
        $this-> tamanhoTela = $tamanhoTela;
        $this-> memoriaInterna = $memoriaInterna;
        $this-> memoriaRAM = $memoriaRAM;
        $this-> preco = $preco;
    }
    
    function ImprimeValor(){
        echo $this->nome."&nbsp";
        echo $this->marca."&nbsp";
        echo $this->tamanhoTela."&nbsp";
        echo $this->memoriaInterna."&nbsp";
        echo $this->memoriaRAM."&nbsp";
        echo $this->preco."<br>";
    }
    
}
