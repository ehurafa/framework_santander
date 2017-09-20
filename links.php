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
      <div class="medium-12 columns medium-push-12">
        <h2>Links</h2>
      </div>
    </div>
    <div class="row display">
      <div class="small-12 small-push-12 columns">
        <a href="javascript:void(0)" class="transition link small">Normal</a>&nbsp;
        <a href="javascript:void(0)" class="transition link small hover">Hover</a>&nbsp;
        <a href="javascript:void(0)" class="transition link small activate">Clique</a>&nbsp;
        <a href="javascript:void(0)" class="transition link small visited">Visitado</a>&nbsp;
      </div>
    </div>
    <div class="row display">
      <div class="small-12 small-push-12 columns">
        <a href="javascript:void(0)" class="transition link">Normal</a>&nbsp;
        <a href="javascript:void(0)" class="transition link hover">Hover</a>&nbsp;
        <a href="javascript:void(0)" class="transition link activate">Clique</a>&nbsp;
        <a href="javascript:void(0)" class="transition link visited">Visitado</a>&nbsp;
      </div>
    </div>
    <div class="row display">
      <div class="small-12 small-push-12 columns">
        <a href="javascript:void(0)" class="transition larger link">Normal</a>&nbsp;
        <a href="javascript:void(0)" class="transition larger link">Hover</a>&nbsp;
        <a href="javascript:void(0)" class="transition larger link">Clique</a>&nbsp;
        <a href="javascript:void(0)" class="transition larger link">Visitado</a>&nbsp;
      </div>
    </div>
  </div>
  <!-- MAIN CONTENT -->

  <!-- SCRIPTS JS -->
  <?php include('scripts-js.php'); ?>
  <!-- SCRIPTS JS -->

</body>
</html>
