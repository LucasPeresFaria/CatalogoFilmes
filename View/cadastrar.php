<?php include 'header.php'; ?>

<!-- Masthead -->
<header class="masthead text-white text-left" id="home">
  <div class="overlay"></div>
</header>


<section>

  <form class="mb-5 mt-3" method="POST" action="">

    <div class="form-group ml-5 col-6">

      <label for="txtNome">Título</label>
      <input id="txtNome" type="text" class="form-control" aria-describedby="nome" placeholder="digite aqui" required name=txtNome />

      <div class="input-group mt-2 ml-1 row">
        <div class="input-group-prepend">
          <span class="input-group-text">Descrição</span>
        </div>
        <textarea rows="20" class="form-control" aria-label="With textarea"></textarea> 
      </div>
    </div>

    <div class="form-group ml-5 col-5">
      <label for="txtCpf">CPF</label>
      <input id="txtCpf" type="text" class="form-control" aria-describedby="data" name="txtCpf" placeholder="digite aqui" required name=txtCpf />
    </div>
    <div class="form-group ml-5 col-5 mb-5">
      <label for="txtEmail">E-mail</label>
      <input id="txtEmail" type="email" class="form-control" aria-describedby="e-mail" name="txtEmail" placeholder="digite aqui" required name=txtEmail />
    </div>

</section>

<?php include 'footer.php'; ?>