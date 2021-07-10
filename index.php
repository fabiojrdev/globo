<?php

require('modules.class.php');


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo($titulo); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body>
      <div class="divisoria-baixo">
    <div class="container-sm" style="">
    <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="#"> <i id="navbartolbar" class="bi bi-list"></i></a>
  <a class="navbar-brand" id="logo" href="#">globo<br>.com</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" id="g1" href="#">g1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ge" href="#">ge</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="gshow" href="#">gshow</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="globoplay" href="#">globoplay</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="globo" href="#">o globo</a>
      </li>
    </ul>
  </div>
<div class="alinhar-direita">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
         <div class="menu-direito"> 
           <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(119, 119, 119);">
            E-MAIL
          </a></div>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">globomail free</a></li>
            <li><a class="dropdown-item" href="#">globomail pro</a></li>
          </ul>
          <div class="menu-direito">
          <a class="nav-link" id="cinza" href="#">BUSCA</a><i id="icons" class="bi bi-search"></i>
          <a class="nav-link" id="cinza" href="#">CONTA GLOBO</a><i id="icons" class="bi bi-person"></i>
          </div>
        </li>
      </ul>
    </div>
</nav>



    </div>
      </div>

<!-- <div class="container">
    <div class="divisoria">
      <div class="col-4 col-sm-12">
        <h1 id="title-main">Após ameaças, oito partidos defendem sistema eleitoral</h1>
        <li id="subtitle-main">'Não posso tomar conta de tudo', diz Bolsonaro sobre caso Covaxin</li>
        <li id="subtitle-main">Auxílio Emergencial: 1,1 milhão de benefícios foram cancelados</li>
        <div class="margem-news"></div>
      <div class="divisoria-baixo"></div>
        <div class="col-2 col-sm-12">
          <img src="/globo/imagens/bolsanaro.jpeg" class="img-fluid" id="tamanho">
          <img src="/globo/imagens/cpi.jpeg" class="img-fluid" id="tamanho">
          <img src="/globo/imagens/lambda.jpeg" class="img-fluid" id="tamanho">
        </div>
        <div class="col-4 col-sm-4">
          <h1 id="titulo-menor">Analistas: CPI e suspeitas atingem popularidade</h1>
          <h4 id="texto-menor"><li>Bolsonaro participa de passeio de moto</li></h4>

          <h1 id="titulo-menor">CPI ganha ajuda das redes sociais nos trabalhos</h1>
          <h4 id="texto-menor"><li>Análise: negacionismo à ciência ameaça direitos</li></h4>
          
          <h1 id="titulo-menor">Entenda o que já se sabe sobre a variante Lambda</h1>
          <h4 id="texto-menor"><li>Malta é o 1º país a se fechar a não-vacinados</li></h4>
 
        </div>
    </div>
  </div>
</div> -->

<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="divisoria">
    <h1 id="title-main">Após ameaças, oito partidos defendem sistema eleitoral</h1>
        <li id="subtitle-main">'Não posso tomar conta de tudo', diz Bolsonaro sobre caso Covaxin</li>
        <li id="subtitle-main">Auxílio Emergencial: 1,1 milhão de benefícios foram cancelados</li>
        <div class="margem-news"></div>
        <div class="divisoria-baixo"></div>

        <div class="col-4" style="display:inline;">
        <div class="margem-news"></div>
        
        <a href="#"><img class="image" src="/globo/imagens/bolsanaro.jpeg"  id="tamanho"></a>
        <a href="#"><img src="/globo/imagens/cpi.jpeg"  id="tamanho"></a>
        <a href="#"><img src="/globo/imagens/lambda.jpeg" id="tamanho"></a>
        
          <div class="col-12 col-sm-12">
          <div class="row">
          
          <div class="col-4">
            <h1 id="titulo-menor"><?php echo($noticiatitulo1); ?></h1>
            <h4 id="texto-menor"><li><?php echo($noticiatexto1); ?></li></h4>
          </div>

          <div class="col-4">
            <h1 id="titulo-menor"><?php echo($noticiatitulo2); ?></h1>
            <h4 id="texto-menor"><li><?php echo($noticiatexto2); ?></li></h4>
          </div>

          <div class="col-4">
            <h1 id="titulo-menor"><?php echo($noticiatitulo3); ?></h1>
            <h4 id="texto-menor"><li><?php echo($noticiatexto3); ?></li></h4>
          </div>
          <div class="margem-news"></div>
          <div class="divisoria-baixo"></div>
          <div class="margem-news"></div>

          <div class="col-4">
            <h1 id="titulo-menor"><?php echo($noticiatitulo4); ?></h1>
            <h4 id="texto-menor"><li><?php echo($noticiatexto4); ?></li></h4>
          </div>

          <div class="col-4">
            <h1 id="titulo-menor"><?php echo($noticiatitulo5); ?></h1>
            <h4 id="texto-menor"><li><?php echo($noticiatexto5); ?></li></h4>
          </div>

          <div class="col-4">
            <h1 id="titulo-menor"><?php echo($noticiatitulo6); ?></h1>
            <h4 id="texto-menor"><li><?php echo($noticiatexto6); ?></li></h4>
          </div>

          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3" style="margin-top: 20px; margin-bottom: 20px; border-right: 1px solid rgb(190, 190, 190);">
      <a href="#"><img src="/globo/imagens/praia.jpeg"  id="tamanho2"></a>
      <h1 id="titulo-menor-verde"><?php echo($noticiatituloverde1); ?></h1>
          <h4 id="texto-menor-verde"><li><?php echo($noticiatextoverde1); ?></li></h4>
          <h4 id="texto-menor-verde"><li><?php echo($noticiatextoverde01); ?></li></h4>

          <div class="margem-news"></div>

          <h1 id="titulo-menor-verde"><?php echo($noticiatituloverde2); ?></h1>
          <h4 id="texto-menor-verde"><li><?php echo($noticiatextoverde2); ?></li></h4>

          <div class="margem-news"></div>

          <a href="#"> <img src="/globo/imagens/guerreiro.jpeg"  id="tamanho2"></a>
          <h1 id="titulo-menor-verde"><?php echo($noticiatituloverde3); ?></h1>
          <h4 id="texto-menor-verde"><li><?php echo($noticiatextoverde3); ?></li></h4>

    </div>
    <div class="col-3" style="margin-top: 20px; margin-bottom: 20px; ">
    <a href="#"><img src="/globo/imagens/bebe.jpeg"  id="tamanho2"></a>
      <h1 id="titulo-menor-amarelo"><?php echo($noticiatituloamarelo1); ?></h1>

          <div class="margem-news"></div>

          <a href="#"><img src="/globo/imagens/casal.jpeg"  id="tamanho2"></a>
          <h1 id="titulo-menor-amarelo"><?php echo($noticiatituloamarelo2); ?></h1>

          <div class="margem-news"></div>

          <a href="#"><img src="/globo/imagens/mulher.jpeg"  id="tamanho2"></a>
          <h1 id="titulo-menor-amarelo"><?php echo($noticiatituloamarelo3); ?></h1>
          <h4 id="texto-menor-amarelo"><li><?php echo($noticiatextoamarelo3); ?></li></h4>

    </div>
  </div>
</div>


    <div class="footer">
      <div class="margem">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-6">

            <a id="two" class="navbar-brand" href="#">globo.com</a>

          </div>
    <div class="col-8 col-sm-6">

      <div class="footer-links">
        <a href="">Princípios editoriais</a>
        <a href="">Política de privacidade</a>
        <a href="">Minha conta</a>
        <a href="">Anuncie conosco</a>
      </div>
    </div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>

    <!-- <div class="col-6 col-sm-4">.col-6 .col-sm-4</div> -->
    <div class="col-6 col-sm-8">
      <p id="direitos">© Copyright 2000-2021 Globo Comunicação e Participações S.A.</p>

    </div>
        </div>
  </div>
</div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
</html>