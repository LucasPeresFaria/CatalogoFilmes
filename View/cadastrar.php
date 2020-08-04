<?php include 'header.php'; ?>

<!-- Masthead -->
<header class="masthead text-white text-left" id="home">
  <div class="overlay"></div>
</header>


<section>

  <form class="mb-5 mt-3" method="GET" action="">
    <div class="ml-4 col-11">

      <div class="row ml-1">
        <div class="col-6 mb-3">

          <div class="mb-3">
            <label for="txtTitulo">Título</label>
            <input id="txtTitulo" type="text" class="form-control" aria-describedby="Titulo" placeholder="digite aqui" required name=txtTitulo />
          </div>

          <div class="row">
            <div class="mb-3 col-3">
              <label for="txtDuracao">Duração</label>
              <input id="txtDuracao" type="text" class="form-control" aria-describedby="Duração de tempo do filme" placeholder="digite aqui" required name=txtDuracao />
            </div>
            <div class="mb-3 col-9">
              <label for="txtLancamento">Lançamento</label>
              <input id="txtLancamento" type="text" class="form-control" aria-describedby="Data de lancamento" name="txtLancamento" placeholder="digite aqui" required name=txtLancamento />
            </div>
          </div>

          <div class="row">
            <div class="col mb-3">
              <label for="txtDirecao">Direção</label>
              <input id="txtDirecao" type="text" class="form-control" aria-describedby="Direcao de filmes" name="txtDirecao" placeholder="digite aqui" required name=txtDirecao />
            </div>

            <div class="col mb-3">
              <label for="txtCritica">Crítica</label>
              <input id="txtCritica" type="text" class="form-control" aria-describedby="Avaliacao de filme" name="txtCritica" placeholder="digite aqui" required name=txtCritica />
            </div>
          </div>
        </div>

        <div class="col mt-4">
          <img src="https://www.carsfrombanks.com/frontend/assets/images/placeholder/inventory-full-placeholder.png" alt="..." class="img-thumbnail">
        </div>
      </div>

      <div class="col mb-3">
        <label for="txtDescricao">Descrição</label>
        <textarea class="form-control" id="txtDescricao" rows="7"></textarea>
      </div>

      <div class="col mb-3">
        <label for="txtBanner">Banner</label>

        <div class="custom-file">
          <input type="file" class="custom-file-input" id="txtBanner">
          <label class="custom-file-label" for="txtBanner">Escolha o arquivo</label>
        </div>
      </div>

    </div>

    <div class="row ml-5">
      <button type="submit" onclick="Cadastrar();" id="btnCadastrar" class="btn btn-success ml-2">Cadastrar</a>
    </div>

  </form>


</section>

<?php include 'footer.php'; ?>