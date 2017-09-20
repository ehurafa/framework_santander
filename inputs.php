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
    <div class="bloco">
        <div class="row">
          <h3>Inputs</h3>
        </div>
        <div class="row">
          <div class="medium-12 columns">
            <div class="form-control input-label">
              <label for="" class="transition">Digite seu nome:</label>
              <input type="text" id="" placeholder="">
              <span class="false-border"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns">
            <div class="form-control input-label disabled">
              <label for="" class="transition">Campo de texto desabilitado:</label>
              <input type="text" id="" placeholder="" disabled>
              <span class="false-border"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="medium-8 columns">
            <div class="form-control input-label">
              <label for="" class="transition">E-mail:</label>
              <input type="email"  id="" placeholder="" >
              <span class="false-border"></span>
            </div>
          </div>
          <div class="medium-4 columns">
            <div class="form-control input-label">
              <label for="" class="transition">Telefone:</label>
              <input type="email" id="" placeholder="" class="mascara-telefone" >
              <span class="false-border"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="medium-4 columns ">
            <div class="form-control input-label">
              <label for="" class="transition">Data:</label>
              <input type="text" id="" placeholder="" class="mascara-data" >
              <span class="false-border"></span>
            </div>
          </div>
          <div class="medium-4 columns ">
            <div class="form-control input-label">
              <label for="" class="transition">Cep:</label>
              <input type="email" id="" placeholder="" class="mascara-cep" >
              <span class="false-border"></span>
            </div>
          </div>
          <div class="medium-4 columns ">
            <div class="form-control input-label">
              <label for="" class="transition">CNPJ:</label>
              <input type="email" id="" placeholder="" class="mascara-cnpj" >
              <span class="false-border"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="medium-8 columns ">
            <div class="form-control input-label">
              <label for="" >Digite seu nome:</label>
              <input type="text" id="" class=" error">
              <span class="false-border"></span>
            </div>
          </div>
          <div class="medium-4 columns">
            <div class="form-control input-label">

              <select>
                <option value="Selecione">Selecione</option>
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
              <span class="false-border"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="medium-8 columns ">
            <div class="form-control input-label">
              <label for="" class="transition">Digite seu nome:</label>
              <input type="text" id="">
              <span class="false-border"></span>
            </div>
          </div>
          <div class="medium-4 columns">
            <div class="form-control input-label">

              <select disabled>
                <option value="Selecione">Selecione</option>
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
              <span class="false-border"></span>
            </div>
          </div>
        </div>
      </div>


      <div class="bloco">
        <div class="row">
          <h3>Radio Button</h3>
        </div>

        <div class="row">
    

        <div class="row">
          <div class="medium-5 columns">

            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio1" value="" checked  type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio1" value=""   type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left">
              <input  name="radio1" value=""   type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
          </div>

           <div class="medium-5 columns float-left">

            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio2" value="" checked  type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio2" value=""   type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio2" value=""  type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 error float-left">
              <input  name="radio2" value=""  type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->

          </div>

        </div>

        <div class="row mgn-top-10">
          <div class="medium-5 columns" >

            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio3" value=""  type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio3" value=""   type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 2 -->
            <div class="radio-button-e-1 form-control float-left">

                <input  name="radio3" value=""   type="radio">
                <label>Radio 1</label>

            </div>
            <!-- /radio -->
          </div>

           <div class="medium-5 columns float-left">

            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio4" value="" checked=""  type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left mgn-right-10">
              <input  name="radio4" value=""   type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
            <!-- radio estilo 1 -->
            <div class="form-control radio-button-e-1 float-left">
              <input  name="radio4" value=""   type="radio">
              <label>Radio 1</label>
            </div>
            <!-- /radio -->
          </div>

        </div> </div>




      </div>

      <!-- checkbox -->
        <div class="bloco">

          <div class="row">
            <h3 >
              Checkbox
            </h3>
          </div>          

          <div class="row">
             <!-- checkbox estilo 1 -->
            <div class="form-control checkbox checkbox-e-1 float-left mgn-right-10">
              <input  name="checkbox1" value=""  type="checkbox">
              <label>Checkbox 1</label>
            </div>
            <!-- /checkbox -->
            <!-- checkbox estilo 1 -->
            <div class="form-control checkbox checkbox-e-1 float-left mgn-right-10">
              <input  name="checkbox1" value=""  type="checkbox">
              <label>Checkbox 2</label>
            </div>
            <!-- /checkbox -->
            <!-- checkbox estilo 1 -->
            <div class="form-control checkbox  checkbox-e-1 float-left mgn-right-10">
              <input  name="checkbox1" value=""  type="checkbox">
              <label>Checkbox 3</label>
            </div>
            <!-- /checkbox -->

            <!-- checkbox estilo 1 -->
            <div class="form-control checkbox error checkbox-e-1 float-left">
              <input  name="checkbox1" value=""  type="checkbox">
              <label>Checkbox 4</label>
            </div>
            <!-- /checkbox -->
          </div>  

          <!-- / estilo 1 -->        

        </div>
        <!-- /checkbox -->

        <!-- switch -->
        <div class="bloco">

          <div class="row">
            <h3 >
              Switch
            </h3>
          </div>          

          <div class="row">
             <!-- switch -->    
            <div class="wrap-switch mgn-right-10">
               <label class="checkbox-switch">
                <input type="checkbox">
                <div class="slider round"></div>
              </label>
              <span>
                Switch 1
              </span> 
            </div>              
            <!-- /switch -->

            <!-- switch -->    
            <div class="wrap-switch mgn-right-10">
               <label class="checkbox-switch">
                <input type="checkbox">
                <div class="slider round"></div>
              </label>
              <span>
                Switch 2
              </span> 
            </div>              
            <!-- /switch -->

            <!-- switch -->    
            <div class="wrap-switch mgn-right-10">
               <label class="checkbox-switch">
                <input type="checkbox">
                <div class="slider round"></div>
              </label>
              <span>
                Switch 3
              </span> 
            </div>              
            <!-- /switch -->
          </div>  
        

        </div>
        <!-- /switch -->


  </div>
  <!-- MAIN CONTENT -->

  <!-- SCRIPTS JS -->
  <?php include('scripts-js.php'); ?>
  <!-- SCRIPTS JS -->

</body>
</html>
