<?php

include_once "../Model/Conexao.php";

class FilmeDAO
{
    public function __construct(Conexao $db)
    {
        $this->db = $db;
    }

    public function Listar(Filme $filme)
    {

        $conn = new Conexao();

        if ($filme->getIdfilme() == NULL) {

            $query = $this->db->getConection()->query("SELECT * FROM tbfilme WHERE idfilme ='" . $filme->getIdfilme() . "';");
            $arrayQuery = array();

            while ($reg = $query->fetch_array()) {

                $filme = new Filme();
                $idDiretor = new Diretor();
                $diretorDAO = new DiretorDAO($conn);

                $idDiretor->setIdDiretor($reg['idDiretor']);
                $diretorDAO->Listar($idDiretor);

                $filme->inserirFilme(
                    $reg['idfilme'],
                    $reg['idDiretor'],
                    $reg['titulo'],
                    $reg['descricao'],
                    $reg['lancamento'],
                    $reg['duracao'],
                    $reg['critica'],
                    $reg['faixaEtaria'],
                    $reg['imagem'],
                    $reg['trailer']
                );

                $filme->setIdDiretor($idDiretor);

                $arrayQuery[] = $filme;
            }

            return $arrayQuery;
        } else {

            $query = $this->db->getConection()->query("SELECT * FROM tbfilme WHERE idfilme ='" . $filme->getIdfilme() . "';");

            $reg = $query->fetch_array();

            $idDiretor = new diretor();
            $diretorDAO = new diretorDAO($conn);

            $idDiretor->setIddiretor($reg['idDiretor']);
            $diretorDAO->Listar($idDiretor);

            $filme->inserirFilme(
                $reg['idfilme'],
                $reg['idDiretor'],
                $reg['titulo'],
                $reg['descricao'],
                $reg['lancamento'],
                $reg['duracao'],
                $reg['critica'],
                $reg['faixaEtaria'],
                $reg['imagem'],
                $reg['trailer']
            );
            $filme->setIdDiretor($idDiretor);

            return $filme;
        }
    }
}
