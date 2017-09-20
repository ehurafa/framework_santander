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

    <div class="row display">
      <div class="small-12 small-push-12 columns">
        <div class="tags">
          <a href="javascript:void(0)" class="transition tag default">Label</a>
          <a href="javascript:void(0)" class="transition tag bg-red-light clr-white">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-red-medium">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-red-dark-medium">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-green">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-orange">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-purple">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-blue">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-black">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-dark99">Label</a>
          <a href="javascript:void(0)" class="transition tag-more clr-black bg-white">...</a>
        </div>
      </div>
    </div>
    <div class="row display">
      <div class="small-12 small-push-12 columns">
        <div class="tags border left">
          <a href="javascript:void(0)" class="transition tag bg-red-light clr-white">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-red-medium">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-red-dark-medium">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-green">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-orange">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-purple">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-blue">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-black">Label</a>
          <a href="javascript:void(0)" class="transition tag clr-white bg-dark99">Label</a>
          <a href="javascript:void(0)" class="transition tag-more clr-black bg-white">...</a>
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
