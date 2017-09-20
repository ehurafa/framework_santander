<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <!-- HEAD -->
  <?php include('head.php'); ?>
  <!-- HEAD -->
  <!-- Estilos adicionais -->
  <style>
  .row.display {
    font-size: 11px;
    margin-bottom: 8px;
    line-height: 2rem;
  }
  .row.display > div > div {
    box-sizing:border-box;
  }
  .tags.border {
    border-radius:5px;
    border: 1px solid rgba(0,0,0,0.6);
    width:20%;
    padding: 0 5px;
  }
  </style>
  <!-- Estilos adicionais -->
</head>

<body>
  <!-- TOPBAR -->
  <?php include('top-bar.php'); ?>
  <!-- TOPBAR -->

  <!-- SIDEBAR -->
  <?php include('aside.php'); ?>
  <!-- SIDEBAR -->

  <!-- MAIN CONTENT -->
  <div class="main">
    <div class="row">
      <h3>Avatar</h3>
    </div>

    <div class="row">
      <div class="medium-4 columns" >
         <div class="row">
          <div class="medium-12 columns">
            <h6>Painel</h6>
          </div>
        </div>
        <div class="row">
          <div class="menu-pessoal">
            <div class="inner">
              <figure>
                <img src="img/avatar-1.jpg" class="img-responsive" alt="">
              </figure>
              <article>
                <h3>Jeffrey Coleman</h3>
                <p>Gerente de Relacionamentos</p>
                <a href="#">jeffrey.coleman@santander.com.br</a>
              </article>
            </div>
            <div class="foot">
              <a href="#">Sair</a>
            </div>
          </div>
        </div>
      </div>
      <div class="medium-4 columns" >
        <div class="row">
          <div class="medium-12 columns">
            <h6>Pessoa física</h6>
          </div>
        </div>
        <div class="row">
          <div class="box-avatar fisica">
            <div class="inner">
              <figure>
                <img src="img/avatar-2.jpg" class="img-responsive" alt="">
              </figure>
              <article>
                <h3><span></span>Carol Walters</h3>
                <p>301.077.938-06<br>
                17/06/1977 - 38 anos<br>
                Fopa: Tiviti Terc.
                </p>

              </article>
            </div>
            <div class="tags">
              <a class="transition tag clr-white bg-purple" href="javascript:void(0)">Prevenir</a>
              <a class="transition tag clr-white bg-green" href="javascript:void(0)">Ativo Mov</a>
              <a class="transition tag clr-white bg-blue" href="javascript:void(0)">Vinculado TRX</a>
              <a class="transition tag clr-white bg-orange" href="javascript:void(0)">Rating 4</a>
              <a class="transition tag clr-white bg-dark99" href="javascript:void(0)">Sócio</a>
              <a class="transition tag tag-more clr-black bg-white" href="javascript:void(0)">...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="medium-4 columns" >
        <div class="row">
          <div class="medium-12 columns">
            <h6>Pessoa jurídica</h6>
          </div>
        </div>
        <div class="row">
          <div class="box-avatar juridica">
            <div class="inner">
              <figure>
                <img src="img/avatar-3.jpg" class="img-responsive" alt="">
              </figure>
              <article>
                <h3><span></span>Dennis Walker</h3>
                <p>301.077.938-06<br>
                17/06/1977 - 38 anos<br>
                Fopa: Tiviti Terc.
                </p>

              </article>
            </div>
            <div class="tags">
              <a class="transition tag clr-white bg-purple" href="javascript:void(0)">Prevenir</a>
              <a class="transition tag clr-white bg-green" href="javascript:void(0)">Ativo Mov</a>
              <a class="transition tag clr-white bg-blue" href="javascript:void(0)">Vinculado TRX</a>
              <a class="transition tag clr-white bg-orange" href="javascript:void(0)">Rating 4</a>
              <a class="transition tag clr-white bg-dark99" href="javascript:void(0)">Sócio</a>
              <a class="transition tag tag-more clr-black bg-white" href="javascript:void(0)">...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MAIN CONTENT -->

  <!-- SCRIPTS JS -->
  <?php include('scripts-js.php'); ?>
  <!-- SCRIPTS JS -->

</body>
</html>
