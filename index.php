<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="img/logo-COR.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/Clinica.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=12">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=12">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- MDB Bootstrap-->
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->

  <title>Brilho Radiante</title>
  <!--favicon-->
  <link rel="icon" href="img/BB.png"> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
  <!--Inicio do interprete em Libras-->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <!--Fim do Interprete-->
  <h1 id="home"></h1>
  <div class="container" id="nav-container">
    <nav class="navbar navbar-expand-lg fixed-top">
    <header style="margin-left:2%;">
      <img class="logoADM" src="img/logoFinal.png" height="60px" width="200px">

   </header>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggle-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
        <div class="navbar-nav">
          <a class="nav-item nav-link" id="home-menu" href="#home">Home</a>
          <a class="nav-item nav-link" id="Tratamento-menu" href="#Tratamento"> Tratamentos</a>
          <a class="nav-item nav-link" id="Sobre-menu" href="#Sobre">Sobre</a>

          <a class="nav-item nav-link" id="contato-menu" href="#contato">Contato</a>

          </select></a>
          <a class="nav-item nav-link" id="modal-logar" button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>


        </div>
      </div>
    </nav>
  </div>
  </header>
  <script src="js/main.js"></script>

  <!-- Modal do login adm ( n mexer !!!!) -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form name="login" method="post" action="valida-acesso.php">
            <label >Email </label><br>

            <input type="text" name="login"> <br>

            <label>Senha </label> <br>

            <input type="password" name="senha"> <br><br>




        </div>
        <div class="modal-footer">
          <p style="color:white">
            <input type="submit" value="Logar" style="background-color: white;">
          </p>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal da Escolha do usuário!!!! ( n mexer !!!!) -->

  <div class="modal fade" id="exampleModal1" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastra Profissional</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <a href="form-profissional.php"><input id="modal-logar" value="Profisonal" button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalProfissional"></a>
          <a href="form-paciente.php"><input id="modal-logar" value="Paciente" button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalProfissional"></a>


        </div>
      </div>
    </div>
  </div>

  <!-- Modal do Profissional( n mexer !!!!) -->





  <br><br><br>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color:#353D41"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:#353D41"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:#353D41"></button>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="img/familia.png" class="algo w-100" alt="100">

      </div>
      <div class="carousel-item">
        <img src="img/2.png" class="algo w-100" alt="100">
      </div>

      <div class="carousel-item">
        <img src="img/1.png" class="algo w-100" alt="100">
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>




  <!-- card -->
  <!-- card -->
  <!-- card -->
  <!-- card -->
  <br>
    <h1 class="tratamento"id="Tratamento"> Tratamentos</h1>
  
  <div class="container-2">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card" style="margin-left: 20%;">
            <img class="card-img-top" src="./img/dente_2.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Clareamento Dental</h5>
              <p class="card-text">Tirar a tonalidade amarelada dos dentes e devolver a cor natural branca que foi perdida por desgaste.</p>
           
            <div class="vejaMais">
              <input type="button" class="btn-primary" value="Veja Mais">
              </div>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card" style="margin-left: 20%;">
            <img class="card-img-top" src="./img/bracadeira.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Aparelho Ortodôntico</h5>
              <p class="card-text" text-align=center>Corrigir problemas de oclusão <br> e dores, além de tornar o sorriso esteticamente mais agradável, melhorando a mastigação.</p>
            </div>
            <div class="vejaMais1">
              <input type="button" class="btn-primary" value="Veja Mais">

            </div>

          </div>
        </div>
        <div class="col">
          <div class="card" style="margin-left: 20%;">
            <img class="card-img-top" src="./img/folheado-dentario.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Lentes e Facetas</h5>
              <p class="card-text">As facetas e as lentes são soluções mais rápidas para quem deseja melhorar a estética sem alterar a estrutura dentária.</p>
              <div class="vejaMais">
                <input type="button" class="btn-primary" value="Veja Mais">

              </div>


            </div>
          </div>
        </div>
      </div>
      <br>


    </div>
  </div>


  </div>




  <!-- sobre -->
  <!-- sobre -->
  <!-- sobre -->
  <!-- sobre -->


  <h1 class="sobre" id="Sobre">Sobre nós</h1>
<center>
  <div class="w-75 p-3">

    <div class="card3- mb-8">
      <div class="row- g-0">
        <div class="col1-md-4">
        <img src="img/medico1.jpeg" class="medico-sorrindo" alt="..." >

        </div>
        <div class="col-md-8">
          <div class="brilho" id="brilho">

            <p class="Alinhador"> <br><br> Nós, da Brilho radiante, nascemos com o propósito de trazer tranquilidade e qualidade de vida,<br>
              por meio do cuidado com a saúde bucal. Para exercer a Odontologia com qualidade diferenciada <br>
              é preciso ter uma equipe especialista que compartilhe do mesmo propósito, o de transformar vidas. <br>
              Também somos conhecidos pelos resultados obtidos por cada especialista do nosso time, <br>
              sempre visando segurança e conforto.
            </p>
          
          </div>
        </div>
      </div>
    </div>
  </div>






  <!-- Footer -->
  <!-- Footer -->
  <!-- Footer -->
  <!-- Footer -->



  <br>
  <br>
  <br>
  <br>
  <br>


  <footer id="contato">
    <div class="text-center " height="384px" style="background-color:#4682B4">
      <p style="color:white">
      <H1 style="color:white ;"> Contatos</p>
      </h1>

      </i>
      <h5 style="color:white"> Atendimento Online</h5>
      </h6><br>
      <p style="color:white ;">
        Para marcar sua consulta, nosso atendimento está disponível de Segunda a Sexta, das 8h às 19h. Sábado das 10h às 18h, exceto feriados.
      </p>



      <div class="container">
        <div class="row align-items-start">
          <div class="col">

            <img src="img/mensage.png" href="#" width="60" height="60" style="object-fit: contain;">
            <p style="color:white"> brilhodonto@gmail.com </p>

          </div>
          <div class="col">
            <img src="img/zap.png" href="#" width="60" height="60" style="object-fit: contain;">
            <p style="color:white">(11) 97584-5745</p>
          </div>
          <div class="col">

            <img src="img/tel.png" href="#" width="35" height="36" style="object-fit: contain;">
            <p style="color:white"> <br> (11) 2485-7537</p>

          </div>
        </div>
  </footer>



  </div>
</body>

</html>