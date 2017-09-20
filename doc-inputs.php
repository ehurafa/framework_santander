<h2 class="doc-title" id="link-doc-forms">
  Forms
</h2>

<div class="legend">
  <p>
     Input Text, Radio Button, Checkbox e Switch <br><br>

     Cada item do formulário é composto por:<br><br>

     Label<br><br>

     Placeholder (Máscara)<br><br>

     Indicação de Erros<br><br>

     Indicação de Informação Adicional sobre o item<br><br>


  </p>
</div>

<!-- input text -->
<div class="bloco">
  <h3 class="doc-title" id="link-doc-input-text">
    Input text
  </h3>
  <div class="legend">
     <p>Os inputs dão suporte para: texto, datas, senhas, local, e-mail, url, busca e telefone.<br><br>

     Para cada input é utilizado um placeholder para indicar a função do campo.
     </p>
  </div>  

  <div class="full mgn-zero">
    <div class="form-control input-label ">
      <label class="transition" for="">Digite seu nome:</label>
      <input type="text" placeholder="" id="">
      <span class="false-border"></span>
    </div>
  </div>

  <code>     

    <span class="code-line">&lt;div class="form-control input-label"></span>

      <span class="indent-10 code-line">&lt;label class="transition" for="">Digite seu nome:&lt;/label></span>

      <span class="indent-10 code-line">&lt;input type="text" placeholder="" id=""></span>

      <span class="indent-10 code-line">&lt;span class="false-border">&lt;/span></span>

    <span class="code-line">&lt;/div></span> 

  </code>

  <div class="full">
     <em>Exemplo de implementação do campo de <span class="estilo">telefone</span></em>
     
  </div> 

  <div class="full mgn-zero">
    <div class="form-control input-label">
      <label class="transition" for="">Telefone:</label>
      <input type="tel" class="mascara-telefone" placeholder="" id="">
      <span class="false-border"></span>
    </div>
  </div>

  <code>           

    <span class="code-line">&lt;div class="form-control input-label"></span>
      <span class="indent-10 code-line">&lt;label class="transition" for="">Telefone:&lt;/label></span>
      <span class="indent-10 code-line">&lt;input type="tel" <span class="cor-vermelho">class="mascara-telefone"</span> placeholder="" id=""></span>
      <span class="indent-10 code-line">&lt;span class="false-border">&lt;/span></span>
    <span class="code-line">&lt;/div></span>

  </code>


</div>        
<!-- /input text -->

<!-- radio -->
<div class="bloco">
  <h3 class="doc-title" id="link-doc-radio-button">
    Radio Button
  </h3>

  <div class="legend">
     <p>São usados para limitar a seleção a partir de uma lista com opções pré-definidas.</p>
  </div>          

  <div class="full">
    <div class="form-control radio-button-e-1 ">
      <input  name="radio1" value="" checked  type="radio">
      <label>Manga</label>
    </div>
    <div class="form-control radio-button-e-1 ">
      <input  name="radio1" value="" checked  type="radio">
      <label>Laranja</label>
    </div>
    <div class="form-control radio-button-e-1 ">
      <input  name="radio1" value="" checked  type="radio">
      <label>Morango</label>
    </div>
  </div>  

  <code>           
   
    <span class=" code-line">&lt;div class="form-control radio-button-e-1"></span>
      <span class="indent-10 code-line">&lt;input  name="radio1" value="" type="radio"></span>
      <span class="indent-10 code-line">&lt;label>Manga&lt;/label></span>
    <span class=" code-line">&lt;/div></span>

    <span class=" code-line">&lt;div class="form-control radio-button-e-1"></span>
      <span class="indent-10 code-line">&lt;input  name="radio1" value="" type="radio"></span>
      <span class="indent-10 code-line">&lt;label>Laranja&lt;/label></span>
    <span class="indent-10 code-line">&lt;/div></span>

    <span class=" code-line">&lt;div class="form-control radio-button-e-1"></span>
      <span class="indent-10 code-line">&lt;input  name="radio1" value="" type="radio"></span>
      <span class="indent-10 code-line">&lt;label>Morango&lt;/label></span>
    <span class=" code-line">&lt;/div></span>

  </code>

  <div class="full">
    <em >Exemplo de implementação do Radio Button estilo 1<span class="estilo"> em linha</span> (adicionar a classe 'float-left')</em>
    
  </div>

  <div class="full">
    <div class="form-control radio-button-e-1 mgn-right-10 float-left">
      <input  name="radio2" value="" checked  type="radio">
      <label>Manga</label>
    </div>
    <div class="form-control radio-button-e-1 mgn-right-10 float-left">
      <input  name="radio2" value="" checked  type="radio">
      <label>Laranja</label>
    </div>
    <div class="form-control radio-button-e-1 float-left">
      <input  name="radio2" value="" checked  type="radio">
      <label>Morango</label>
    </div>
  </div> 

  <code>           

    <span class="code-line">&lt;div class="form-control radio-button-e-1 mgn-right-10 <span class="cor-vermelho">float-left</span>"></span>
      <span class="indent-10 code-line">&lt;input  name="radio1" value="" type="radio"></span>
      <span class="indent-10 code-line">&lt;label>Manga&lt;/label></span>
    <span class="code-line">&lt;/div></span>
    <span class="code-line">&lt;div class="form-control radio-button-e-1 mgn-right-10 <span class="cor-vermelho">float-left</span>"></span>
      <span class="indent-10 code-line">&lt;input  name="radio1" value="" type="radio"></span>
      <span class="indent-10 code-line">&lt;label>Laranja&lt;/label></span>
    <span class="code-line">&lt;/div></span>
    <span class="code-line">&lt;div class="form-control radio-button-e-1 <span class="cor-vermelho">float-left</span>"></span>
      <span class="indent-10 code-line">&lt;input  name="radio1" value="" type="radio"></span>
      <span class="indent-10 code-line">&lt;label>Morango&lt;/label></span>
    <span class="code-line">&lt;/div></span>
   
  </code>

  <div class="full">
     <em id="link-doc-radio-button-e-1-com-borda">Exemplo de implementação do Radio Button<span class="estilo"> com borda</span></em>
     
  </div> 

  <div class="full">
    <!-- box -->
    <div class="input-boxes">

      <div class="input-boxes-inner">
        <!-- radio estilo 1 -->
        <div class=" radio-button-e-1">
          <input  name="radio3" value=""  type="radio">
          <label>Radio 1</label>
        </div>
        <!-- /radio -->
      </div>
      <div class="input-boxes-inner">
        <!-- radio estilo 1 -->
        <div class=" radio-button-e-1">
          <input  name="radio3" value=""   type="radio">
          <label>Radio 2</label>
        </div>
        <!-- /radio -->
      </div>
      <div class="input-boxes-inner">
        <!-- radio estilo 2 -->
        <div class="radio-button-e-1 ">
            <input  name="radio3" value=""   type="radio">
            <label>Radio 3</label>
        </div>
        <!-- /radio -->
      </div>

    </div>
    <!-- /box -->
  </div>

  <code>         

    <span class=" code-line ">&lt;div <span class="cor-vermelho">class="input-boxes"</span>></span>

      <span class="indent-10 code-line">&lt;div <span class="cor-vermelho">class="input-boxes-inner"></span></span>
        <span class="indent-20 code-line">&lt;div class=" radio-button-e-1"></span>
          <span class="indent-30 code-line">&lt;input  name="radio3" value=""  type="radio"></span>
          <span class="indent-30 code-line">&lt;label>Radio 1&lt;/label></span>
        <span class="indent-20 code-line">&lt;/div></span>
      <span class="indent-10 code-line">&lt;/div></span>

      <span class="indent-10 code-line">&lt;div class="input-boxes-inner"></span>
        <span class="indent-20 code-line">&lt;div class=" radio-button-e-1"></span>
          <span class="indent-30 code-line">&lt;input  name="radio3" value=""  type="radio"></span>
          <span class="indent-30 code-line">&lt;label>Radio 2&lt;/label></span>
        <span class="indent-20 code-line">&lt;/div></span>
      <span class="indent-10 code-line">&lt;/div></span>

      <span class="indent-10 code-line">&lt;div class="input-boxes-inner"></span>
        <span class="indent-20 code-line">&lt;div class=" radio-button-e-1"></span>
          <span class="indent-30 code-line">&lt;input  name="radio3" value=""  type="radio"></span>
          <span class="indent-30 code-line">&lt;label>Radio 3&lt;/label></span>
        <span class="indent-20 code-line">&lt;/div></span>
      <span class="indent-10 code-line">&lt;/div></span>
      

    <span class=" code-line">&lt;/div></span>             
   
  </code>
  
</div>
<!-- /radio -->

<!-- checkbox -->
<div class="bloco">

  <h3 class="doc-title" id="link-doc-checkbox">
    Checkbox
  </h3>

  <!-- estilo 1 -->
  <div class="legend">
     <p>São usados para permitir que o usuário selecione mais de um tipo de opção em uma lista pré-definida.</p>
  </div>          

  <div class="full">
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
    <div class="form-control checkbox  checkbox-e-1 float-left">
      <input  name="checkbox1" value=""  type="checkbox">
      <label>Checkbox 3</label>
    </div>
    <!-- /checkbox -->
  </div>  

  <code>         

    <span class="code-line">&lt;div class="form-control checkbox checkbox-e-1 float-left mgn-right-10"></span>
      <span class="code-line indent-10">&lt;input  name="checkbox1" value=""  type="checkbox"></span>
      <span class="code-line indent-10">&lt;label>Checkbox 1&lt;/label></span>
    <span class="code-line">&lt;/div></span>

    <span class="code-line">&lt;div class="form-control checkbox checkbox-e-1 float-left mgn-right-10"></span>
      <span class="code-line indent-10">&lt;input  name="checkbox1" value=""  type="checkbox"></span>
      <span class="code-line indent-10">&lt;label>Checkbox 2&lt;/label></span>
    <span class="code-line">&lt;/div></span>

    <span class="code-line">&lt;div class="form-control checkbox checkbox-e-1 float-left mgn-right-10"></span>
      <span class="code-line indent-10">&lt;input  name="checkbox1" value=""  type="checkbox"></span>
      <span class="code-line indent-10">&lt;label>Checkbox 3&lt;/label></span>
    <span class="code-line">&lt;/div></span>          
   
  </code>
  <!-- / estilo 1 -->


</div>
<!-- /checkbox -->


<!-- switch -->
<div class="bloco">

  <h3 class="doc-title" id="link-doc-switch">
    Switch
  </h3>

 
  <div class="legend">
     <p>São usados para limitar a opção de ativado/desativado do usuário, com opções pré-definidas.</p>
  </div>          

  <div class="full">
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
    <div class="wrap-switch">
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

  <code>         
   

    <span class="code-line">&lt;div class="wrap-switch"></span>
      <span class="code-line indent-10">&lt;label class="checkbox-switch"></span>
        <span class="code-line indent-20">&lt;input type="checkbox"></span>
        <span class="code-line indent-20">&lt;div class="slider round">&lt;/div></span>
      <span class="code-line indent-10">&lt;/label></span>
      <span class="code-line indent-10">&lt;span>Switch 1&lt;/span> </span>
    <span class="code-line">&lt;/div>  </span>
          
   
  </code>



</div>
<!-- /switch -->

<!-- switch -->

<!-- /switch -->


