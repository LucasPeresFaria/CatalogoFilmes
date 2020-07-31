<?php include 'header.php'; ?>

<!-- Masthead -->
<header class="masthead text-white text-left" id="home">
  <div class="overlay"></div>
</header>


<section>

  <form class="mb-5 mt-3" method="POST" action="">
    <div class="ml-4 col-11">

      <div class="row ml-1">
        <div class="col-6 mb-3">

          <div class="mb-3">
            <label for="txtNome">Título</label>
            <input id="txtNome" type="text" class="form-control" aria-describedby="nome" placeholder="digite aqui" required name=txtNome />
          </div>

          <div class="row">
            <div class="mb-3 col-3">
              <label for="txtNome">Duração</label>
              <input id="txtNome" type="text" class="form-control" aria-describedby="nome" placeholder="digite aqui" required name=txtNome />
            </div>
            <div class="mb-3 col-9">
              <label for="txtEmail">Lançamento</label>
              <input id="txtEmail" type="email" class="form-control" aria-describedby="e-mail" name="txtEmail" placeholder="digite aqui" required name=txtEmail />
            </div>
          </div>

          <div class="row">
            <div class="col mb-3">
              <label for="txtEmail">Direção</label>
              <input id="txtEmail" type="email" class="form-control" aria-describedby="e-mail" name="txtEmail" placeholder="digite aqui" required name=txtEmail />
            </div>

            <div class="col mb-3">
              <label for="txtEmail">Crítica</label>
              <input id="txtEmail" type="email" class="form-control" aria-describedby="e-mail" name="txtEmail" placeholder="digite aqui" required name=txtEmail />
            </div>
          </div>
        </div>

        <div class="col mt-4">
          <img src="https://www.carsfrombanks.com/frontend/assets/images/placeholder/inventory-full-placeholder.png" alt="..." class="img-thumbnail">
        </div>
      </div>

      <div class="col mb-3">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
      </div>

      <div class="col mb-3">
        <label for="txtEmail">Banner</label>

        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Escolha o arquivo</label>
        </div>
      </div>

    </div>
  </form>


</section>

<?php include 'footer.php'; ?>