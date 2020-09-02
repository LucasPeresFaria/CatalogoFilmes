<?php include 'header.php'; 

include_once "../Model/conexao.php";

include_once "../Model/filme.php";
include_once "../Model/diretor.php";

include_once "../Controller/FilmeDAO.php";
include_once "../Controller/DiretorDAO.php";

$conn = new Conexao();

$filme = new Filme();
$diretor = new Diretor();

$filmeDAO = new FilmeDAO($conn);
$diretorDAO = new DiretorDAO($conn);

/*---------------------------------------------------------------------*/



?>

<!-- Masthead -->
<header class="masthead text-white text-left" id="home">
  <div class="overlay"></div>

  <div class="form-group ml-5 mb-5">
    <form action=".">
      <label for="txtFilme">Pesquisa</label>
      <div class="row col-12">
        <input type="text" class="form-control col-7" id="txtFilme" value="<?= $_GET['txtFilme']; ?>">
        <a type="submit" onclick="Pesquisa();" class="btn btn-primary ml-2">Pesquisar</a>
        <a type="submit" onclick="loadFilms();" class="btn btn-primary ml-2">Ver todos</a>
       <!-- <a type="button" href="cadastrar.php" class="btn btn-success ml-2">Cadastrar</a>-->
      </div>
    </form>
  </div>

</header>


<section>

  <div class="mt-5" id="tela"></div>

</section>

<?php include 'footer.php'; ?>