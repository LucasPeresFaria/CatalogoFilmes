<?php

include_once "../Model/Conexao.php";

class DiretorDAO
{
  public function __construct(Conexao $db)
  {
    $this->db = $db;
  }

  public function Listar(diretor $diretor)
  {

    $conn = new Conexao();

    if ($diretor->getIdDiretor() != NULL) {

      $query = $this->db->getConection()->query("SELECT * FROM tbdiretor WHERE id_diretor ='" . $diretor->getIdDiretor() . "';");
      $reg = $query->fetch_array();

      $diretor->inserirdiretor(
        $reg['idDiretor'],
        $reg['nome'],
        $reg['nacionalidade'],
        $reg['nasc'],
        $reg['idade']
      );

      return $diretor;
    }
  }
}
