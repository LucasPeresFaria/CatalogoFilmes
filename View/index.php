<?php

include 'header.php';

if(isset($_GET['txtFilme'])) { //verificando se há algum valor digitado no input
  echo "filme: ". $_GET['txtFilme'] . "<br />";
  }

?>

<!-- Masthead -->
<header class="masthead text-white text-left" id="home">
  <div class="overlay"></div>

  <!-- Lançamentos -->
  <section>
    <div class="container">

      <div class="form-group">
        <form method="GET" action="infofilme.php">
          <label for="txtFilme">Pesquisar</label>
          <div class="row col-8">
            <input type="text" class="form-control col-8" id="txtFilme" name="txtFilme">
            <button type="submit" id="btnPesquisar" class="btn btn-primary ml-2">Pesquisar</button>
            <button type="submit" class="btn btn-success ml-2">Cadastrar</a>

          </div>
        </form>
      </div>


      <div class="display-4 mb-2">Lançamentos
      </div>

      <div class="nowrap">
        <div class="cardFilme mt-4" style="z-index: 1">
          <div class="bar">
            <img src="design/img/f1.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <div class="cardFilme mt-4" style="z-index: 2">
          <div class="bar">
            <img src="design/img/f2.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <div class="cardFilme mt-4" style="z-index: 3">
          <div class="bar">
            <img src="design/img/f3.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <div class="cardFilme mt-4" style="z-index: 4">
          <div class="bar">
            <img src="design/img/f4.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <div class="cardFilme mt-4" style="z-index: 5">
          <div class="bar">
            <img src="design/img/f5.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <div class="cardFilme mt-4" style="z-index: 6">
          <div class="bar">
            <img src="design/img/f6.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <div class="cardFilme mt-4" style="z-index: 7">
          <div class="bar">
            <img src="design/img/f7.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <div class="cardFilme mt-4" style="z-index: 8">
          <div class="bar">
            <img src="design/img/f8.jpg" width="250" height="400" alt="...">
          </div>
        </div>

        <a class="carousel-control-prev" onclick="plusSlides(-1)" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" role="button" onclick="plusSlides(1)" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
      <!--Row -->
    </div>
  </section>

</header>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var stream = document.querySelector('.nowrap');
    var items = document.querySelectorAll('.cardFilme');
    var prev = document.querySelector('.carousel-control-prev');
    var next = document.querySelector('.carousel-control-next');

    prev.addEventListener('click', function() {
      stream.insertBefore(items[items.length - 1], items[0]);
      items = document.querySelectorAll('.cardFilme');
    });

    next.addEventListener('click', function() {
      stream.appendChild(items[0]);
      items = document.querySelectorAll('.cardFilme');
    });
  });
</script>

<?php include 'footer.php'; ?>