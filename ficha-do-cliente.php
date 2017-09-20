<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ficha do Cliente</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="stylesheets/font-awesome-animation.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="stylesheets/app.css" />

  <link rel="stylesheet" href="stylesheets/fonts.css" />
  <script src="bower_components/modernizr/modernizr.js"></script>

  <style>
    .row.display {
      font-size: 11px;
      margin-bottom: 8px;
      line-height: 2rem;
    }

    .box-avatar .inner figure{
      margin:0 10px 0 0;
      width: auto;
    }
  
    h2{
      font-size:36px;
    }
      
    .mgn-right {
       margin-right: 3.1%;
       height: 25px !important;
       line-height: 24px !important;
      }
      
    .retangulo {
        height: 64px;
        border-radius: 6px;
        border: solid 1px #c2c2c2;
      }
      
    .p-ratangulo {
         font-size: 12px;
         color: #5b5a5b;
         margin-bottom: 5%
      }
    .mgn-cont {
        margin-top: 1%;
      }  
    
    .num-cont {
        color: #1bb3bc;
        font-weight: bold;
        font-size: 20px;
      }
      
    .num-inves {
        color: #5b5a5b;
        font-weight: bold;
        font-size: 20px;
      }
    .mgn-top-1 {
          margin-top: 1%;
      }
      
    .padd-left-7 {
        padding-left: 7%;  
      }
    
    .padd-left-5 {
        padding-left: 5%;  
      }  
      
    .padd-left-22 {
        padding-left: 22%;  
      }
      
    .num-outros {
        color: red;
        font-weight: bold;
        font-size: 20px;
      }
      
    .ficha-icon {
        margin-left: -10px;
        margin-right: 5px; 
      }
      
    .ficha-bt {
        margin-right: -13px;  
      }
  </style>
</head>

<body class="pagina-ficha-do-cliente">

 
    <!-- TOPBAR -->
    <?php include('top-bar.php'); ?>
    <!-- TOPBAR -->
  
 

   <!-- SIDEBAR -->
      <?php include('aside.php'); ?>
      <!-- SIDEBAR -->

  <!-- CONTAINER -->
  <div class="main">
  

    

      <div class="row display mgn-top-30">
        <div class="small-12 small-push-12 columns">
          <h2>Ficha do Cliente</h2>
        </div>
        <div class="row">
          <div class="medium-4 columns">
            <div class="box-avatar fisica">
              <div class="inner">
                <figure>
                  <img alt="" class="img-responsive" src="img/avatar-2.jpg">
                </figure>
                <article>
                  <h3><span></span>Carol Walters</h3>
                  <p>301.077.938-06<br>
                  17/06/1977 - 38 anos<br>
                  Fopa: Tiviti Terc.
                  </p>
                  
                </article>
              </div>    
              
            </div>
          </div>
          <div class="medium-8 columns">
            <div class="row">
                <div class="button btn-small red-light-medium active mgn-right">
                        <div>
                            <span class="ficha-icon"><img src="img/icons/Group%20-%20Copia.png"></span>
                            <span>Botão</span>
                        </div>
                        </div>
                        <div class="button btn-small red-light-medium active mgn-right">
                            <span class="ficha-icon"><img src="img/icons/tel%20-%20Copia.png"></span>
                            <span>Botão</span>
                        </div>
                        <div class="button btn-small red-light-medium active mgn-right">
                            <span class="ficha-icon"><img src="img/icons/Shape%20-%20Copia.png"></span>
                            <span>Botão</span>
                        </div>
                        <div class="button btn-small red-light-medium active mgn-right">
                            <span class="ficha-icon"><img src="img/icons/Group%203.png"></span>
                            <span>Botão</span>
                        </div>
                        <div class="button btn-small red-light-medium active mgn-right">
                            <span class="ficha-icon"><img src="img/icons/Shape%20Copy.png"></span>
                            <span>Botão</span>
                        </div>
                        <div class="button btn-small red-light-medium active mgn-right">
                            <span class="ficha-icon"><img src="img/icons/Group%202%20-%20Copia.png"></span>
                            <span>Botão</span>
                        </div>
            </div>
            <div class="row pdg-right-7">
                <div class="retangulo small-12 columns">
                    <div class="small-2 columns mgn-cont">
                        <p class="p-ratangulo padd-left-7">Conta Corrente</p>
                        <p class="num-cont padd-left-7">R$ 2,00</p>
                    </div>
                    <div class="small-2 columns mgn-cont end">
                        <p class="p-ratangulo padd-left-5">Conta Corrente</p>
                        <p class="num-cont padd-left-5">R$ 2.220,00</p>
                    </div>
                    <div class="small-2 columns mgn-cont end">
                        <p class="p-ratangulo padd-left-22">Investimentos</p>
                        <p class="num-inves padd-left-22">R$ 0,00</p>
                    </div>
                    <div class="small-2 columns mgn-cont end">
                        <p class="p-ratangulo padd-left-22">Cartões</p>
                        <p class="num-inves padd-left-22">R$ 0,00</p>
                    </div>
                    <div class="small-2 columns mgn-cont">
                        <p class="p-ratangulo padd-left-22">Seguro</p>
                        <p class="num-cont padd-left-22">SIM</p>
                    </div>
                    <div class="small-2 columns mgn-cont">
                        <p class="p-ratangulo padd-left-10">Outros Produtos</p>
                        <p class="num-outros padd-left-10">NÃO</p>
                    </div>
                </div>
            </div>
              <div class=" mgn-top-1">
                <a href="javascript:void(0)" class="transition tag clr-white bg-purple">Prevenir</a>
                <a href="javascript:void(0)" class="transition tag clr-white bg-green">Ativo Mov</a>
                <a href="javascript:void(0)" class="transition tag clr-white bg-blue">Vinculado TRX</a>
                <a href="javascript:void(0)" class="transition tag clr-white bg-orange">Rating 4</a>
                <a href="javascript:void(0)" class="transition tag clr-white bg-dark99">Sócio</a>
                <a href="javascript:void(0)" class="transition tag tag-more clr-black bg-white">...</a>
              </div>
          </div>
        </div>
      

        <!-- tabs -->
        <div class="row display mgn-top-20">
          <div class="small-12 small-push-12 columns">
            <div class="panels" id="tab1" data-component="panel">
              <div class="panel-header">
                <span class="transition active" data-panel-indice data-target="#panelContent1">Título do panel</span>
                <span class="transition" data-panel-indice data-target="#panelContent2">Título do panel</span>
                <span class="transition" data-panel-indice data-target="#panelContent3">Título do panel</span>
                <span class="transition" data-panel-indice data-target="#panelContent4">Título do panel</span>
              </div>
              <div class="panel-content active" id="panelContent1">
                <div class="panel-body">
                  <strong>Lorem ipsum dolor sit amet 1</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati dolorum, labore blanditiis. Nulla iusto laboriosam nesciunt dolorum id sunt nisi? Molestiae excepturi, earum nesciunt nobis repellendus hic distinctio consectetur!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati dolorum, labore blanditiis. Nulla iusto laboriosam nesciunt dolorum id sunt nisi? Molestiae excepturi, earum nesciunt nobis repellendus hic distinctio consectetur!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati dolorum, labore blanditiis. Nulla iusto laboriosam nesciunt dolorum id sunt nisi? Molestiae excepturi, earum nesciunt nobis repellendus hic distinctio consectetur!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati dolorum, labore blanditiis. Nulla iusto laboriosam nesciunt dolorum id sunt nisi? Molestiae excepturi, earum nesciunt nobis repellendus hic distinctio consectetur!</p>
                </div>
      
              </div>
              <div class="panel-content" id="panelContent2">
                <div class="panel-body">
                  <strong>Lorem ipsum dolor sit amet 2</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati dolorum, labore blanditiis. Nulla iusto laboriosam nesciunt dolorum id sunt nisi? Molestiae excepturi, earum nesciunt nobis repellendus hic distinctio consectetur!</p>
                </div>
            
              </div>
              <div class="panel-content" id="panelContent3">
                <div class="panel-body">
                  <strong>Lorem ipsum dolor sit amet 3</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati dolorum, labore blanditiis. Nulla iusto laboriosam nesciunt dolorum id sunt nisi? Molestiae excepturi, earum nesciunt nobis repellendus hic distinctio consectetur!</p>
                </div>
               
              </div>
              <div class="panel-content" id="panelContent4">
                <div class="panel-body">
                  <strong>Lorem ipsum dolor sit amet 4</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati dolorum, labore blanditiis. Nulla iusto laboriosam nesciunt dolorum id sunt nisi? Molestiae excepturi, earum nesciunt nobis repellendus hic distinctio consectetur!</p>
                </div>
             
              </div>
            </div>
          </div>
        </div>
        <!-- tabs -->

        <!-- colunas -->
        <div class="row display mgn-top-10">
          <div class="column small-6">
            <div class="fs-panel">
              <div class="fs-panel-head">
                <div class="column small-8">
                  <h3>Lorem Ipsum</h3>
                </div> 
                <div class="column small-4">
               
                </div> 
              </div>
              <div class="fs-panel-inner"></div>
              <div class="fs-panel-foot">
                <a class="button active btn-medium red-light-medium right  " href="#">Botão</a>
                <a class="button disabled btn-medium  right mgn-right-10" href="#">Botão</a>
              </div>
            </div>
          </div>

          <div class="column small-6">
            <div class="fs-panel">
              <div class="fs-panel-head">
                <div class="column small-8">
                  <h3>Lorem Ipsum</h3>
                </div> 
                <div class="column small-4">
                  <a class="button active btn-medium red-light-medium right" href="#">Botão</a>
                </div> 
              </div>
              <div class="fs-panel-inner"></div>
              <div class="fs-panel-foot"></div>
            </div>
          </div>
        </div>
        <!-- /colunas -->

      </div>

    
  </div>
  <!-- CONTAINER -->

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/foundation/js/foundation.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.selectBoxIt.min.js"></script>
  <script src="js/app.js"></script>
    <script>/*
    $( function() {
      var availableTags = [
        "Abacaxi",
        "Abacate",
        "Banana",
        "Cereja",
        "Goiaba",
        "Jaboticaba",
        "Kiwi",
        "Manga",
        "Maracujá",
        "Pera",
        "Uva"
      ];
      $( "#ws-header-busca" ).autocomplete({
        source: availableTags
      });
    } );*/
  </script>
</body>

</html>
