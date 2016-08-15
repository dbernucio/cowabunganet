<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $site = $_POST['site'];
    $message = $_POST['message'];
    // $to = 'contato@cowabunganet.esy.es';
    $to = 'diane.bernucio@gmail.com';
    $subject = 'Nova mensagem de contato';

    $body ="Nome: $name\nEmail: $email\nSite: $site\n\n\nMensagem:\n\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Preencha com o seu nome';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Preencha com o seu email';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Escreva a sua mensagem';
    }

    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage) {
      if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Obrigado! Entraremos em contato com você!</div>';
      }
      else {
        $result='<div class="alert alert-danger">Ocorreu um erro ao enviar a sua mensagem. Tente novamente.</div>';
      }
    }
  }
?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cowabunga</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/base.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/mobile.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css">
    <link rel="icon" href="assets/images/logo-small.png">
  </head>
  <body>
    <header>
      <nav class="main-nav">
        <img src="assets/images/logo-small.png" class="logo-small" alt="Cowabunga">
        <div class="menu-stripe">
          <span class="stripe"></span>
          <span class="stripe"></span>
          <span class="stripe"></span>
        </div>
        <ul class="menu" id="floating-menu">
          <li><a href="#media">Mídias</a></li>
          <li><a href="#contact">Contato</a></li>
          <li><a href="#who">Quem somos</a></li>
        </ul>
        <ul class="mobile-menu">
          <li><a href="#media">Mídias</a></li>
          <li><a href="#contact">Contato</a></li>
          <li><a href="#who">Quem somos</a></li>
        </ul>
      </nav>
    </header>

    <!-- Header -->

     <section id="header-logo" class="full-section">
      <img src="assets/images/logo-big.png" class="big-logo" alt="Cowabunga Networking">
    </section>

    <!-- Media -->

    <div id="media">
      <section>
        <div class="row row-centered">
          <div class="card card-definitivo">
            <div class="row">
              <div class="col-md-12 media-logo">
                <!--<img src="assets/images/logo-definitivo.png">-->
                <div class="soon">Em breve</div>
              </div>
            </div>
            <div class="row row-centered networks">
              <a href="" target="_blank">
                <i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i>
              </a>
              <a href="https://www.facebook.com/CanalDefinitivo/?fref=ts" target="_blank">
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
              </a>
            </div>
            <div class="row">
              <div class="col-md-12 media-title">CANAL DEFINITIVO</div>
            </div>
            <div class="row">
              <div class="col-md-12 media-slogan">
                O Canal Definitivo do YouTube Brasil! Assista se quiser, pare se conseguir!
              </div>
            </div>
          </div>

          <div class="card card-trio">
            <div class="row">
              <div class="col-md-12 media-logo">
                <img src="assets/images/logo-trio.png">
              </div>
            </div>
            <div class="row row-centered networks">
              <a href="http://trioent.com.br/" target="_blank" class= "network-img">
                <i class="fa fa-globe fa-2x" aria-hidden="true"></i>
              </a>
              <a href="https://www.facebook.com/trioLtda/" target="_blank">
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
              </a>
            </div>
            <div class="row">
              <div class="col-md-12 media-title">TRIO ENTRETENIMENTO</div>
            </div>
            <div class="row">
              <div class="col-md-12 media-slogan">
                Diversão e Entretenimento, provavelmente nada interessante...
              </div>
            </div>
          </div>

          <div class="card card-ouvikings">
            <div class="row">
              <div class="col-md-12 media-logo">
                <img src="assets/images/logo-ouvikings.png">
              </div>
            </div>
            <div class="row row-centered networks">
              <a href="http://www.ouvikings.com.br/" target="_blank">
                <i class="fa fa-globe fa-2x" aria-hidden="true"></i>
              </a>
              <a href="https://www.facebook.com/ouvikings/" target="_blank">
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
              </a>
            </div>
            <div class="row">
              <div class="col-md-12 media-title">OUVIKINGS</div>
            </div>
            <div class="row">
              <div class="col-md-12 media-slogan">
                Um bando de Nerds, falando de assuntos igualmente Nerds.
                Aqui você encontrará Podcasts e muita diversão.
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Contact -->

    <div id="contact">
      <section>
        <div class="row title">
          CONTATO
        </div>
        <div class="row subtitle">
          Também é um criador de conteúdo? Entre em contato conosco!
        </div>
        <div class="row row-centered">
          <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
              <div class="col-sm-12">
                <input type="text" class="form-control" id="name" name="name"
                  placeholder="Nome" value="">
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <input type="email" class="form-control" id="email" name="email"
                  placeholder="Email" value="">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <input type="text" class="form-control" id="site" name="site"
                  placeholder="Seu site ou página" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <textarea class="form-control" rows="4" id="message" name="message"
                  placeholder="Mensagem"></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <input id="submit" name="submit" type="submit" value="Enviar"
                  class="btn btn-primary">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 col-sm-offset-2">
                <?php echo $result; ?>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>

    <!-- Who -->

    <section id="who">
      <div class="comming-soon">
        <img src="assets/images/comming-soon.png">
        <br />Em construção
      </div>
      <div class="row title">
        Somos a Cowabunga
      </div>
      <div class="row">
        <div class="col-xs-12 description">
          As Tartarugas Ninja (Teenage Mutant Ninja Turtles no original, frequentemente abreviado como
          TMNT), é um grupo de quatro tartarugas antropomórficas, a quem lhes foi dado o nome de quatro artistas
          italianos do Renascimento e treinadas na arte do ninjutsu por um rato sensei antropomórfico com o nome
          Splinter. A partir de sua casa, os esgotos de Nova Iorque, batalham contra criminosos, senhores
          demoníacos, criaturas mutantes e alienígenas invasores, enquanto que ao mesmo tentam tempo
          permanecer escondidos da sociedade.
        </div>
      </div>
      <div class="row members">
        <div class="row row-centered images">
          <div class="col-xs-4">
            <img src="assets/images/ninja-turtle-1.png">
            <div class="name">Donatelo</div>
            <div class="organization">TMNT</div>
          </div>
          <div class="col-xs-4">
            <img src="assets/images/ninja-turtle-2.png">
            <div class="name">Michelangelo</div>
            <div class="organization">TMNT</div>
          </div>
          <div class="col-xs-4">
            <img src="assets/images/ninja-turtle-3.png">
            <div class="name">Rafael</div>
            <div class="organization">TMNT</div>
          </div>
        </div>
        <div class="row row-centered images">
          <div class="col-xs-4">
            <img src="assets/images/ninja-turtle-3.png">
            <div class="name">Rafael</div>
            <div class="organization">TMNT</div>
          </div>
          <div class="col-xs-4">
            <img src="assets/images/ninja-turtle-1.png">
             <div class="name">Donatelo</div>
            <div class="organization">TMNT</div>
          </div>
          <div class="col-xs-4">
            <img src="assets/images/ninja-turtle-2.png">
            <div class="name">Michelangelo</div>
            <div class="organization">TMNT</div>
          </div>
        </div>
      </div>
    </section>

    <!--Footer -->

    <div id="footer">
      <a href="https://www.facebook.com/CowabungaNet/?fref=ts" target="_blank">
        <i class="fa fa-facebook-square fa-2x"></i>
      </a>
    </div>

    <script src="assets/javascripts/jquery.min.js"></script>
    <script src="assets/javascripts/jquery.scrollTo.min.js"></script>
    <script src="assets/javascripts/base.js"></script>
  </body>
</html>

