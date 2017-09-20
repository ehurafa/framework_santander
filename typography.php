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
    background: #999;
  }
  .row.display > div.panels > div {
    background: #FFF;
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
      <div class="medium-12 columns medium-push-12">
        <h1>h1. This is a very large header.</h1>
        <h2>h2. This is a large header.</h2>
        <h3>h3. This is a medium header.</h3>
        <h4>h4. This is a moderate header.</h4>
        <h5>h5. This is a small header.</h5>
        <h6>h6. This is a tiny header.</h6>
      </div>
    </div>
    <div class="row">
      <div class="medium-6 columns medium-push-6">
        <img class="thumbnail" src="http://placehold.it/750x350">
      </div>
      <div class="medium-6 columns medium-pull-6">
        <h2>Our <strong>Agency</strong>, our selves.</h2>
        <p>Vivamus luctus urna sed urna ultricies ac <strong>tempor dui sagittis.</strong> In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum
          mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor.</p>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns">
        <h3>Photoshop</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      <div class="medium-4 columns">
        <h3>Javascript</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      <div class="medium-4 columns">
        <h3>Marketing</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
    </div>

  </div>
  <!-- MAIN CONTENT -->

  <!-- SCRIPTS JS -->
  <?php include('scripts-js.php'); ?>
  <!-- SCRIPTS JS -->

</body>
</html>
