<!doctype html>
<html lang="en">
  <head>
    <title>ImmoMilla l'immobilier à neuf</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-3 ">
              <div class="site-logo">
                <a href="/">ImmoMilla</a>
              </div>
            </div>
            <div class="col-9 text-right">
              <span class="d-inline-block d-lg-none">
              <a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white">
              <span class="icon-menu h3 text-white"></span>
              </a>
              </span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/" class="nav-link">Accueil</a></li>
                  <li class="{{ Request::path() === 'habiter' ? 'active' : '' }}"><a href="/habiter" class="nav-link">Habiter</a></li>
                  <li class="{{ Request::path() === 'investir' ? 'active' : '' }}"><a href="/investir" class="nav-link">Investir</a></li>
                  <li class="{{ Request::path() === 'infos' ? 'active' : '' }}"><a href="/infos" class="nav-link">À Propos</a></li>
                  <li class="{{ Request::path() === 'contact' ? 'active' : '' }}"><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      @yield('content')
    <footer class="site-footer p-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h1 class="footer-heading mb-3">ImmoMilla</h1>
            <p>petite phrase de slogant ou jsp quoi a trouver</p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Liens utiles</h2>
                <ul class="list-unstyled">
                  <li><a href="/infos">À Propos</a></li>
                  <li><a href="#">Conditions d'utilisations</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Envoyer" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </footer>
    </div>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-migrate-3.0.0.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>

