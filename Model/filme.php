<?php
class Filme {
    private $idFilme;
    private $idDiretor;
    private $titulo;
    private $descricao;
    private $lancamento;
    private $duracao;
    private $critica;
    private $faixaEtaria;
    private $imagem;
    private $trailer;
    
    function inserirFilme($idFilme, $idDiretor, $titulo, $descricao, $lancamento, $duracao, $critica, $faixaEtaria, $imagem, $trailer) {
        $this->idFilme = $idFilme;
        $this->idDiretor = $idDiretor;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->lancamento = $lancamento;
        $this->duracao = $duracao;
        $this->critica = $critica;
        $this->faixaEtaria = $faixaEtaria;
        $this->imagem = $imagem;
        $this->trailer = $trailer;
    }
    
    function getIdFilme() {
        return $this->idFilme;
    }

    function getIdDiretor() {
        return $this->idDiretor;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getlancamento() {
        return $this->lancamento;
    }

    function getDuracao() {
        return $this->duracao;
    }

    function getCritica() {
        return $this->critica;
    }

    function getFaixaEtaria() {
        return $this->faixaEtaria;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getTrailer()
    {
        return $this->trailer;
    }

/*------------------------------------------------------------*/

    function setidFilme ($idFilme) {
        $this->idFilme = $idFilme;
    }

    function setIdDiretor ($idDiretor) {
        $this->idDiretor = $idDiretor;
    }

    function setTitulo ($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setlancamento ($lancamento) {
        $this->lancamento = $lancamento;
    }

    function setDuracao ($duracao) {
        $this->duracao = $duracao;
    }

    function setCritica ($critica) {
        $this->critica = $critica;
    }

    function setFaixaEtaria($faixaEtaria)
    {
        $this->faixaEtaria = $faixaEtaria;
    }

    function setimagem ($imagem) {
        $this->imagem = $imagem;
    }

    function setTrailer ($trailer) {
        $this->trailer = $trailer;
    }
    
}
