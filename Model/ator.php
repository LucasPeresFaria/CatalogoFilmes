<?php
class Ator {
    private $idAtor;
    private $nome;
    private $nacionalidade;
    private $nasc;
    private $idade;

    function inserirAtor($idAtor, $nome, $nacionalidade, $nasc, $idade) {
        $this->idAtor = $idAtor;
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->nasc = $nasc;
        $this->idade = $idade;
    }
    
    function getIdAtor() {
        return $this->idAtor;
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


    function setIdAtor($idAtor) {
        $this->idAtor = $idAtor;
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
