function loadFilms() {

  let saida = '';
  let films = [];

  $.getJSON("js/json/Catalogo.json", function (data) {
    films = data.films;

    for (i = 0; i < films.length; i++) {

      saida += '<div class="container">';
        saida += '<div class="row ml-5">';

            saida += '<div class="col-4">';
              saida += '<img src="' + films[i].img + '" width="290" height="490">';
            saida += '</div>';

            saida += '<div class="col-5">';
              saida += '<h4>"' + films[i].titulo + '"</h4>';
              saida += '<p>"' + films[i].descricao + '"</p>';

                saida += ' <div class="row">';
                  saida += '<img class="mt-1 ml-2 mr-5" src="https://image.flaticon.com/icons/svg/1146/1146634.svg" width="50" height="50">';
                  saida += '<p class="mt-3 ml-5"><strong>Direção: </strong>' + films[i].direcao + '"</p>';
                saida += '</div>';

                saida += '<p class="mt-1">"' + films[i].critica + '"</p>';
              saida += '</div>';  //col-5

        saida += '</div>'; //row ml-5

          saida += ' <div class="row ml-5">';
            saida += '<img class="ml-3 mt-1" src="https://cdn.icon-icons.com/icons2/37/PNG/512/clock_theapplication_2900.png" width="25" height="25">';
            saida += '<p class="mt-1 ml-2">"' + films[i].duracao + '" | </p>';
            saida += '<p class="mt-1 ml-2">" Lançamento: ' + films[i].lancamento + '"</p>';
          saida += '</div>';

      saida += '</div>';

    }

    document.getElementById('tela').innerHTML = saida;
  });
}


function Pesquisa() {

  let saida = '';
  let search = document.getElementById('txtFilme').value;
  let flag = 0;

  $.getJSON("js/json/Catalogo.json", function (data) {
    films = data.films;

    for (i = 0; i < films.length; i++) {

      if (films[i].titulo == search){

          flag = 1;

          saida += '<div class="container">';
            saida += '<div class="row ml-5">';

                saida += '<div class="col-4">';
                  saida += '<img src="' + films[i].img + '" width="290" height="490">';
                saida += '</div>';

                saida += '<div class="col-5">';
                  saida += '<h4>"' + films[i].titulo + '"</h4>';
                  saida += '<p>"' + films[i].descricao + '"</p>';

                  saida += ' <div class="row">';
                    saida += '<img class="mt-1 ml-2 mr-5" src="https://image.flaticon.com/icons/svg/1146/1146634.svg" width="50" height="50">';
                    saida += '<p class="mt-3 ml-5"><strong>Direção: </strong>' + films[i].direcao + '"</p>';
                  saida += '</div>';

                  saida += '<p class="mt-1">"' + films[i].critica + '"</p>';
                saida += '</div>';  //col-5

            saida += '</div>'; //row

            saida += ' <div class="row ml-5">';
              saida += '<img class="ml-3 mt-1" src="https://cdn.icon-icons.com/icons2/37/PNG/512/clock_theapplication_2900.png" width="25" height="25">';
              saida += '<p class="mt-1 ml-2">"' + films[i].duracao + '" | </p>';
              saida += '<p class="mt-1 ml-2">" Lançamento: ' + films[i].lancamento + '"</p>';
            saida += '</div>';

          saida += '</div>';
      }

        document.getElementById('tela').innerHTML = saida;
     
    }

    if(flag==0){
      let notfound = '';
        
        notfound += '<div class="jumbotron jumbotron-fluid">';
          notfound += '<div class="container">';
            notfound += '<h1 class="display-4">Filme não encontrado :(</h1>';
            notfound += '<p class="lead">Não foi possível encontrar o filme que está pesquisando...</p>';
          notfound += '</div>';
        notfound += '</div>';

      document.getElementById('tela').innerHTML = notfound;
    }

  });
}

function Cadastrar() {

      let titulo = document.getElementById('txtTitulo').value;
      let descricao = document.getElementById('txtDescricao').value;
      let duracao = document.getElementById('txtDuracao').value;
      let lancamento = document.getElementById('txtLancamento').value;
      let direcao = document.getElementById('txtDirecao').value;
      let critica = document.getElementById('txtCritica').value;
      let img = document.getElementById('txtBanner').value;

  $.getJSON("js/json/Catalogo.json", function (data) {
        let filme = { titulo: titulo, descricao: descricao, duracao: duracao, lancamento: lancamento, direcao: direcao, critica: critica, img: img }; // criando o objeto com as propriedades    
        data.push(filme);
    });
}
