<?php
class Diretor {
    private $idDiretor;
    private $nome;
    private $nacionalidade;
    private $nasc;
    private $idade;

    function inserirDiretor($idDiretor, $nome, $nacionalidade, $nasc, $idade) {
        $this->idDiretor = $idDiretor;
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->nasc = $nasc;
        $this->idade = $idade;
    }
    
    function getIdDiretor() {
        return $this->idDiretor;
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }
    
    function getNasc(){
        return $this->nasc;
    }

    function getIdade(){
        return $this->idade;
    }

    /*------------------------------------------------------*/


    function setIdDiretor($idDiretor) {
        $this->idDiretor = $idDiretor;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setNasc($nasc){
        $this->nasc = $nasc;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }
}
