<?php
class Personagem {
    private $idPersonagem;
    private $idAtor;
    private $personagem_nome;


    function inserirAtor($idPersonagem, $idAtor, $personagem_nome) {
        $this->idPersonagem = $idPersonagem;
        $this->idAtor = $idAtor;
        $this->personagem_nome = $personagem_nome;
    }
    
    function getIdPersonagem() {
        return $this->idPersonagem;
    }

    function getIdAtor() {
        return $this->idAtor;
    }

    function getPersonagemNome(){
        return $this->personagem_nome;
    }
    

    /*------------------------------------------------------*/


    function setPersonagem($idPersonagem) {
        $this->idPersonagem = $idPersonagem;
    }

    function setIdAtor($idAtor) {
        $this->idAtor = $idAtor;
    }

    function setPersonagemNome($personagem_nome){
        $this->personagem_nome = $personagem_nome;
    }

}
