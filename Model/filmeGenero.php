<?php
class FilmeGenero {
    private $idFilme;
    private $idGenero;


    function inserirFilmeGenero($idFilme, $idGenero) {
        $this->idFilme = $idFilme;
        $this->idGenero = $idGenero;
    }
    
    function getIdFilme() {
        return $this->idFilme;
    }

    function getGenero() {
        return $this->idGenero;
    }

  /*------------------------------------------------------*/

    function setIdFilme($idFilme) {
        $this->idFilme = $idFilme;
    }

    function setGenero($idGenero) {
        $this->idGenero = $idGenero;
    }

}
