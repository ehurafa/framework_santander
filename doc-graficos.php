
<!-- graficos  -->
<div class="bloco">

<h2 class="doc-title" id="link-doc-graficos">
  Gráficos
</h2>

<div class="legend">
  <p>
    Os gráficos oferecem a maneira perfeita de visualizar dados em seu site. As opções vão desde modelos de linhas simples até os complexos mapas hierárquicos, a galeria fornece um grande número de gráficos para uso.
  </p>
</div>

<div class="row">
    <div class="column small-12">
      <h2>Line Charts</h2>
      <div id="line_top_x" class="fs-chart"></div>

      <code>     
         <p>HTML</p>
         <span class="code-line">&lt;div id="line_top_x" class="fs-chart">&lt;/div></span>
         <br><br>
         <p>Javascript</p>
         <span class="code-line">google.charts.load('current', {'packages':['line','bar', 'corechart']});</span> <br><br>
         <span class="indent-10 code-line">drawChart();</span>
        <br><br>
         <span class="code-line">function drawChart() {<span class="indent-10 code-line"></span>
          <span class="indent-10 code-line">var data = new google.visualization.DataTable();</span>
          <span class="indent-10 code-line">data.addColumn('number', 'Dia');</span>
          <span class="indent-10 code-line">data.addColumn('number', 'Item 1');</span>
          <span class="indent-10 code-line">data.addColumn('number', 'Item 2');</span>
          <span class="indent-10 code-line">data.addColumn('number', 'Item 3');</span>

          <span class="indent-10 code-line">data.addRows([</span>
          <span class="indent-20 code-line">[1,  37.8, 80.8, 41.8],</span>
          <span class="indent-20 code-line">[2,  30.9, 69.5, 32.4],</span>
          <span class="indent-20 code-line">[3,  25.4,   57, 25.7],</span>
          <span class="indent-20 code-line">[4,  11.7, 18.8, 10.5],</span>
          <span class="indent-20 code-line">[5,  11.9, 17.6, 10.4],</span>
          <span class="indent-20 code-line">[6,   8.8, 13.6,  7.7],</span>
          <span class="indent-20 code-line">[7,   7.6, 12.3,  9.6],</span>
          <span class="indent-20 code-line">[8,  12.3, 29.2, 10.6],</span>
          <span class="indent-20 code-line">[9,  16.9, 42.9, 14.8],</span>
          <span class="indent-20 code-line">[10, 12.8, 30.9, 11.6],</span>
          <span class="indent-20 code-line">[11,  5.3,  7.9,  4.7],</span>
          <span class="indent-20 code-line">[12,  6.6,  8.4,  5.2],</span>
          <span class="indent-20 code-line">[13,  4.8,  6.3,  3.6],</span>
          <span class="indent-20 code-line">[14,  4.2,  6.2,  3.4]</span>
          <span class="indent-10 code-line">]);</span>
          <span class="indent-10 code-line">var options = {</span>
          <span class="indent-20 code-line">chart: {</span>
          <span class="indent-30 code-line">title: 'Título',</span>
          <span class="indent-30 code-line">subtitle: 'Subtitulo'</span>
          <span class="indent-20 code-line">},</span>
          <span class="indent-10 code-line">// width: 1000,</span>
          <span class="indent-20 code-line">height: 500,</span>
          <span class="indent-20 code-line">colors: ['#cc0000', '#191919', '#80715d'],</span>
          <span class="indent-20 code-line">axes: {</span>
          <span class="indent-30 code-line">x: {</span>
          <span class="indent-40 code-line">0: {side: 'top'}</span>
          <span class="indent-30 code-line">}</span>
          <span class="indent-20 code-line">}</span>
          <span class="indent-10 code-line">};</span>
          <span class="indent-10 code-line">var chart = new google.charts.Line(document.getElementById('line_top_x'));</span>
          <span class="indent-10 code-line">chart.draw(data, options);</span>
          <span class="code-line">}</span>
      </code>
    </div>
  
  <div class="column small-12">
    <h2>Column Chart</h2>
    <div id="dual_y_div" class="fs-chart"></div>


    <code>     
         <p>HTML</p>
         <span class="code-line">&lt;div id="dual_y_div" class="fs-chart">&lt;/div></span>
         <br><br>
         <p>Javascript</p>
         <span class="code-line">google.charts.load('current', {'packages':['line','bar', 'corechart']});</span> <br><br>
         <span class="indent-10 code-line">drawStuff();</span>
         <br><br>
         <span class="code-line">//Column Chart</span>
        <span class="code-line">function drawStuff() {</span>
        <span class="code-line">var data = new google.visualization.arrayToDataTable([</span>
        <span class="indent-10 code-line">['Cidade', 'Distância', 'População'],</span>
        <span class="indent-10 code-line">['Cidade 1', 8000, 230.3],</span>
        <span class="indent-10 code-line">['Cidade 2', 24000, 400.5],</span>
        <span class="indent-10 code-line">['Cidade 3', 30000, 154.3],</span>
        <span class="indent-10 code-line">['Cidade 4', 50000, 100.9],</span>
        <span class="indent-10 code-line">['Cidade 5', 60000, 143.1]</span>
        <span class="code-line">]);</span>
        <span class="code-line">var options = {</span>
        <span class="indent-10 code-line">chart: {</span>
        <span class="indent-20 code-line">title: 'Título',</span>
        <span class="indent-20 code-line">subtitle: 'Subtítulo'</span>
        <span class="indent-10 code-line">},</span>
        <span class="indent-10 code-line">series: {</span>
        <span class="indent-20 code-line">0: { axis: 'Distância' }, // Bind series 0 to an axis named 'distance'.</span>
        <span class="indent-20 code-line">1: { axis: 'População' } // Bind series 1 to an axis named 'brightness'.</span>
        <span class="indent-10 code-line">},</span>
        <span class="indent-10 code-line">colors: ['#cc0000', '#191919'],</span>
        <span class="indent-10 code-line">axes: {</span>
        <span class="indent-20 code-line">y: {</span>
        <span class="indent-30 code-line">distance: {label: 'Distância'}, // Left y-axis.</span>
        <span class="indent-30 code-line">brightness: {side: 'right', label: 'Escala'} // Right y-axis.</span>
        <span class="indent-20 code-line">}</span>
        <span class="indent-10 code-line">}</span>
        <span class="code-line">};</span>
        <span class="code-line">var chart = new google.charts.Bar(document.getElementById('dual_y_div'));</span>
        <span class="code-line">chart.draw(data, options);</span>
        <span class="code-line">};</span>
    </code>
  </div>
  
  <div class="column small-12">
    <h2>Area Chart</h2>
    <div id="area-chart" class="fs-chart"></div>

    <code>     
         <p>HTML</p>
         <span class="code-line">&lt;div id="area-chart" class="fs-chart">&lt;/div></span>
    </code>
  </div>
  
  <div class="column small-12">
    <h2>Combo Chart</h2>
    <div id="combo-chart" class="fs-chart"></div>
    <code>     
         <p>HTML</p>
         <span class="code-line">&lt;div id="combo-chart" class="fs-chart">&lt;/div></span>
    </code>
  </div>
  
  <div class="column small-12">
    <h2>Pie Chart</h2>
    <div id="pie-chart" class="fs-chart"></div>
    <code>     
         <p>HTML</p>
         <span class="code-line">&lt;div id="pie-chart" class="fs-chart">&lt;/div></span>
    </code>
  </div>
      


  </div>









 </div>        
<!-- /graficos -->




