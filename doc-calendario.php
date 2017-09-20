
<!-- calendario  -->
<div class="bloco">

<h2 class="doc-title" id="link-doc-calendario">
  Calendário
</h2>


<div class="legend">
  <p>
     O componente de calendário existe para facilitar a seleção de datas nos formulários que necessitam a inserção correta da informação no formato DATA. 
  </p><br><br>
  <div>
    <em><span class="estilo">Para o funcionamento dos calendários são necessários:</span></em><br>
    "stylesheets/responsive-calendar.css"<br>
    "js/responsive-calendar.js"<br><br>
    
  </div>
</div>


<div class="row">
  <div class="column small-12 medium-5 ">
    
    <!-- calendario -->
      <div class="responsive-calendar modelo-1">
        <div class="controls">
          <div>
            <a class="pull-left" data-go="prev"><div class="btn btn-primary"><</div></a>
              <h4><span data-head-month></span> <span data-head-year></span> </h4>
              <a class="pull-right" data-go="next"><div class="btn btn-primary">></div></a>
          </div>            
        </div>
        <div class="cldr-divider">
          <span></span>
        </div>
        <div class="day-headers">
          <div class="day header">Seg</div>
          <div class="day header">Ter</div>
          <div class="day header">Qua</div>
          <div class="day header">Qui</div>
          <div class="day header">Sex</div>
          <div class="day header">Sáb</div>
          <div class="day header">Dom</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      <!-- /calendario -->
  </div>

</div>


  <code>     

  <p>HTML</p>
  <span class="code-line">&lt;div class="responsive-calendar modelo-2"></span>
<span class="indent-10 code-line">&lt;div class="controls"></span>
<span class="indent-20 code-line">&lt;div></span>
<span class="indent-30 code-line">&lt;a class="pull-left" data-go="prev">&lt;div class="btn btn-primary">&lt;&lt;/div>&lt;/a></span>
<span class="indent-40 code-line">&lt;h4>&lt;span data-head-month>&lt;/span> &lt;span data-head-year>&lt;/span> &lt;/h4></span>
<span class="indent-40 code-line">&lt;a class="pull-right" data-go="next">&lt;div class="btn btn-primary">>&lt;/div>&lt;/a></span>
<span class="indent-20 code-line">&lt;/div>  </span>          
<span class="indent-10 code-line">&lt;/div></span>
<span class="indent-10 code-line">&lt;div class="cldr-divider"></span>
<span class="indent-20 code-line">&lt;span>&lt;/span></span>
<span class="indent-10 code-line">&lt;/div></span>
<span class="indent-10 code-line">&lt;div class="day-headers"></span>
<span class="indent-20 code-line">&lt;div class="day header">Seg&lt;/div></span>
<span class="indent-20 code-line">&lt;div class="day header">Ter&lt;/div></span>
<span class="indent-20 code-line">&lt;div class="day header">Qua&lt;/div></span>
<span class="indent-20 code-line">&lt;div class="day header">Qui&lt;/div></span>
<span class="indent-20 code-line">&lt;div class="day header">Sex&lt;/div></span>
<span class="indent-20 code-line">&lt;div class="day header">Sáb&lt;/div></span>
<span class="indent-20 code-line">&lt;div class="day header">Dom&lt;/div></span>
<span class="indent-10 code-line">&lt;/div></span>
<span class="indent-10 code-line">&lt;div class="days" data-group="days"></span>
    
<span class="indent-10 code-line">&lt;/div></span>
<span class="code-line">&lt;/div></span>
<br><br><br><br><br>
 <p>Javascript</p>

<span class="code-line">$(".responsive-calendar.modelo-2").responsiveCalendar({</span>
<span class="indent-10 code-line">  time: '2015-05',</span>
<span class="indent-10 code-line">  events: {</span>
<span class="indent-10 code-line">  <span class="cor-vermelho">/* Podemos usar links nas datas */</span></span>
<span class="indent-20 code-line">    "2015-05-30": {"number": 5, "url": "<span class="cor-vermelho">http://urbansummer.com.br/Demo/fw_santander/panels.html</span>"},</span>
 <span class="indent-20 code-line">   "2015-05-12": {}}</span>
  <span class="code-line">});</span>

  </code>



 </div>        
<!-- /calendario -->




