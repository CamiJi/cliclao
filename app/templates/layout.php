<!doctype html> 
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $this->e($title) ?></title>
        <meta name="description" content="Voyage sur mesure sur tout les continents - Cliclao.com vous met en relation avec des agences locales francophones à l'autre bout du monde pour vous aider à organiser vos voyages sur mesure. ">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href= "<?= $this->assetUrl('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap-theme.min.css') ?>">
        <!-- Chargement de FontAwesome https://fortawesome.github.io/Font-Awesome/get-started/ -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= $this->assetUrl('css/main.css') ?>">

        <script src="<?= $this->assetUrl('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 
        <!-- Start Nav Bar  -->
        <nav id="nav-main" role="navigation" class="navbar navbar-default navbar-fixed-top">

          <!-- Star DivNavBar 1 -->
          <div class="row" id="rowNavBar1">
            <div class="container">
              <div class="col-md-4"><p>Voyages individuels crées par des agences locales</p></div>
              <div class="col-md-4"><a href="#">DEMANDE DE DEVIS</a></div>
              <div class="col-md-4"><p>ESPACE CLIENT :  <a href="#">SE CONNECTER </a> | <a href="#">  S'INSCRIRE</a></p></div>            
            </div><!--  end Container -->
          </div><!--  end navBar1Row -->

          <div class="container">
            <div class="row" id="rowNavBar2">
              <div class="col-md-3">
                <img src="<?= $this->assetUrl('img/logo_cliclao-v1.png') ?>">
              </div>
              <div class="col-md-9">  
                <ul class="nav navbar-nav">
                  <li><a id="btnDestination" href="<?= $this->url('destination'); ?>">LES DESTINATIONS</a></li>
                  <li><a href="">OU PARTIR ?</a></li>
                  <li><a href="">COMMENT CA MARCHE ?</a></li>
                </ul>     

              </div>          
            </div><!--  end navBar2Row -->

            
            <!-- Start Menu des pays s'affichant avec le hover sur le #btnDestination "Les Destinations"  -->
            <div id="navDestination" class="container-country">
              <div class="container">
                <div class="row">
                  <ul class="col-md-3">
                    <li><a href="#" class="continentsListePays">EUROPE</a></li>
                    <li><a href="#">Espagne</a></li>
                    <li><a href="#">Italie</a></li>
                    <li><a href="#">Irlande</a></li>
                    <li><a href="#">Ecosse</a></li>
                    <li><a href="#">Pays de Galle</a></li>
                    <li><a href="#">Russie</a></li>
                    <li><a href="#">Grèce</a></li>
                    <li><a href="#">Croatie</a></li>
                    <li><a href="#">Portugal</a></li>
                    <li><a href="#">Irlande</a></li>
                    <li><a href="#">Bulgarie</a></li>
                    <li><a href="#">Norvège</a></li> 
                    <li><a href="#">Islande</a></li>
                    <li><a href="#">Suède</a></li>
                    <li><a href="#">Finlande</a></li>
                    <li><a href="#">Turquie</a></li>
                  </ul>
                  <ul class="col-md-3">
                    <li><a href="#" class="continentsListePays">AMERIQUES</a></li>
                    <li><a href="#">Argentine</a></li>
                    <li><a href="#">Brésil </a></li>
                    <li><a href="#">Cuba</a></li>
                    <li><a href="#">Pérou</a></li>
                    <li><a href="#">Bolivie</a></li>
                    <li><a href="#">Equateur</a></li>
                    <li><a href="#">Colombie</a></li>
                    <li><a href="#">Costa Rica</a></li>
                    <li><a href="#">République dominicaine</a></li>
                    <li><a href="#">Mexique </a></li>
                    <li><a href="#">Guatemala</a></li>
                    <li><a href="#">États-Unis  </a></li>
                    <li><a href="#">Canada  </a></li>
                  </ul>
                  <ul class="col-md-3">
                    <li><a href="#" class="continentsListePays">ASIE</a></li>
                    <li><a href="#">Inde</a></li>
                    <li><a href="#">Indonésie</a></li>
                    <li><a href="#">Japon</a></li> 
                    <li><a href="#">Singapour</a></li>
                    <li><a href="#">Thaïlande</a></li>
                    <li><a href="#">Corée du Sud</a></li>
                    <li><a href="#">Malaisie</a></li>
                    <li><a href="#">Hong Kong</a></li>
                    <li><a href="#">Chine </a></li>
                    <li><a href="#">Vietnam</a></li>
                    <li><a href="#">Sri Lanka</a></li>
                    <li><a href="#">Mongolie</a></li>
                    <li><a href="#">Népal</a></li>
                    <li><a href="#">Birmanie</a></li>
                    <li><a href="#">Iran</a></li>
                    <li><a href="#">Laos</a></li>
                    <li><a href="#">Cambodge</a></li>
                  </ul>
                  <ul class="col-md-3">
                    <li><a href="#" class="continentsListePays">AFRIQUE</a></li>
                    <li><a href="#">Sénégal</a></li>
                    <li><a href="#">Maroc </a></li>
                    <li><a href="#">Tunisie</a></li>
                    <li><a href="#">Égypte</a></li>
                    <li><a href="#">Rwanda</a></li> 
                    <li><a href="#">Kenya</a></li>
                    <li><a href="#">Tanzanie</a></li>
                    <li><a href="#">Afrique du Sud</a></li>
                    <li><a href="#">Madagascar</a></li>
                    
                    <li></br></li>

                    <li><a href="#" class="continentsListePays">OCEANIE</a></li>
                    <li><a href="#">Australie</a></li>
                    <li><a href="#">Nouvelle Zélande</a></li>
                    <li><a href="#">Polynésie</a></li>

                  </ul>
                </div> <!-- End Row Liste des pays -->
              </div> <!-- End Container Pays -->
            </div> <!-- End Nav Destination -->
          </div><!--  end Container -->
        </nav><!-- end Nav Bar -->
 
  

        <main id="main">


			<?= $this->section('main_content') ?>



        </main><!--   End Main -->




        <!-- Start Footer -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <a href="docs/CGU_2015.html">CGU</a>
                <p>&copy; Cliclao 2015</p>
              </div>
              <div class="col-md-4">
                <p>L'adresse: </br>
                136 Avenue Pablo Picasso,</br> 
                92000 Nanterre</p>
                <a href="#">Contact</a>
              </div>
              <div class="col-md-4">
                <a href="#">Qui sommes nous ?</a>
              </div>
              <div class="col-md-4">
                <a target="_blank" title="follow me on twitter" href="http://www.twitter.com"><img alt="follow me on twitter" src="<?= $this->assetUrl('img/twitter_30x30.png') ?>" border=0></a>
                <a target="_blank" title="find us on Facebook" href="http://www.facebook.com"><img alt="follow me on facebook" src="<?= $this->assetUrl('img/facebook_30x30.png') ?>" border=0></a>
                <a target="_blank" title="find us on google plus" href="http://www.googleplus.com"><img alt="follow me on google plus" src="<?= $this->assetUrl('img/google.png') ?>" border=0></a>
              </div>
            </div>
          </div>
        </footer> <!-- End Footer -->



  
<!-- ********************************************************************************************************************************-->
        <!-- CHARGEMENT DES SCRIPTS -->
<!-- ********************************************************************************************************************************-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="<?= $this->assetUrl('js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>

        <script src="<?= $this->assetUrl('js/vendor/bootstrap.min.js') ?>"></script>

        <script src="<?= $this->assetUrl('js/main.js') ?>"></script>

    </body>
</html>
