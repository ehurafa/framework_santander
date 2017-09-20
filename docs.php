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
  <title>Documentação</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" type="text/css" href="stylesheets/jquery.dataTables.min.css"> 
  <link href="stylesheets/responsive-calendar.css" rel="stylesheet"> 
  <link rel="stylesheet" href="stylesheets/app.css" />
  <link rel="stylesheet" href="stylesheets/fonts.css" />
  <script src="bower_components/modernizr/modernizr.js"></script>
  <style>

    body {
      padding-top: 20px;
      background: #fff;
    }
    .form-control {
      position: relative;
    }
    .bloco{
      width:100%;
      float:left;
      border-bottom:1px dotted #999;
      margin-bottom:50px;
      padding-bottom:40px;
    }

    .paleta-codigo > .columns code{ 
      min-height:50px;
    }
    .border{
      border: 1px solid;      
     }
      
    @media only screen and (min-width: 40.063em) and (max-width: 64em) { 
        .code-line{
            font-size: 11px
        }  
    }
      
    .row.display {
      background: #666;
      font-size: 11px;
      margin-bottom: 0px;
      line-height: 2rem;
    }
    .row.display > div {
      border: 1px solid #eee;
    }
      
    .mgn-top-35{
        margin-top: 35px !important;
    }
      
    .pos-rel {
        position: relative      
    }
      
      aside {
          position: static;
      }
      
      .mgn-bottom {
          margin-bottom: 0px !important;
      }
  </style>
</head>

<body>

<div class="documentacao">
   <div class="row">
      <!-- coluna esquerda -->
      <div class="medium-9 columns doc-coluna-esquerda">
        <?php include('doc-inputs.php'); ?>
        <?php include('doc-colors.php'); ?>
        <?php include('doc-buttons.php'); ?>
        <?php include('doc-tags.php'); ?>
        <?php include('doc-grid.php'); ?>
        <?php //include('doc-menu.php'); ?>
        <?php include('doc-nav.php'); ?>
        <?php include('doc-typography.php'); ?>
        <?php include('doc-tabs.php'); ?>
        <?php include('doc-panels.php'); ?>
        <?php include('doc-dropdowns.php'); ?>
        <?php include('doc-tabelas.php'); ?>
        <?php include('doc-listas.php'); ?>
        <?php include('doc-graficos.php'); ?>
        <?php include('doc-tooltips.php'); ?>
        <?php include('doc-popovers.php'); ?>
        <?php include('doc-calendario.php'); ?>
      </div>
      <!-- / coluna esquerda -->

      <!--  coluna direita -->
      <div class="medium-3 columns doc-coluna-direita">
        <?php include('doc-menu.php'); ?>
      </div>
    </div>
    <!-- / coluna direita -->
  </div>


  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/foundation/js/foundation.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.selectBoxIt.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.select.min.js"></script>
  <script type="text/javascript" src="js/graficos.js"></script>
  <script src="js/responsive-calendar.js"></script> 
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tabela').DataTable({
        //"scrollX": true,
         columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
      });
  } );


    $(window).resize(function(){
      drawChart();
      drawStuff();
      areaChart();
      comboChart();
    });

    
    google.charts.load('current', {'packages':['line','bar', 'corechart']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawStuff);
    google.charts.setOnLoadCallback(areaChart);
    google.charts.setOnLoadCallback(comboChart);
    google.charts.setOnLoadCallback(pieChart);
    
    //line charts 
    function drawChart() {  

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Dia');
      data.addColumn('number', 'Item 1');
      data.addColumn('number', 'Item 2');
      data.addColumn('number', 'Item 3');

      data.addRows([
      [1,  37.8, 80.8, 41.8],
      [2,  30.9, 69.5, 32.4],
      [3,  25.4,   57, 25.7],
      [4,  11.7, 18.8, 10.5],
      [5,  11.9, 17.6, 10.4],
      [6,   8.8, 13.6,  7.7],
      [7,   7.6, 12.3,  9.6],
      [8,  12.3, 29.2, 10.6],
      [9,  16.9, 42.9, 14.8],
      [10, 12.8, 30.9, 11.6],
      [11,  5.3,  7.9,  4.7],
      [12,  6.6,  8.4,  5.2],
      [13,  4.8,  6.3,  3.6],
      [14,  4.2,  6.2,  3.4]
      ]);
      var options = {
      chart: {        
        title: 'Título',
        subtitle: 'Subtitulo'       
      },
       // width: 1000,
      height: 500,
      colors: ['#cc0000', '#191919', '#80715d'],
      axes: {
        x: {
        0: {side: 'top'}
        }
      }
      };
      var chart = new google.charts.Line(document.getElementById('line_top_x'));
      chart.draw(data, options);
    } 
    
    //Column Chart
    function drawStuff() {
    var data = new google.visualization.arrayToDataTable([
      ['Cidade', 'Distância', 'População'],
      ['Cidade 1', 8000, 230.3],
      ['Cidade 2', 24000, 400.5],
      ['Cidade 3', 30000, 154.3],
      ['Cidade 4', 50000, 100.9],
      ['Cidade 5', 60000, 143.1]
    ]);
    var options = {
      chart: {
      title: 'Título',
      subtitle: 'Subtítulo'
      },
      series: {
      0: { axis: 'Distância' }, // Bind series 0 to an axis named 'distance'.
      1: { axis: 'População' } // Bind series 1 to an axis named 'brightness'.
      },
      colors: ['#cc0000', '#191919'],
      axes: {
      y: {
        distance: {label: 'Distância'}, // Left y-axis.
        brightness: {side: 'right', label: 'Escala'} // Right y-axis.
      }
      }
    };
    var chart = new google.charts.Bar(document.getElementById('dual_y_div'));
    chart.draw(data, options);
    };
    
    //Area Chart
    function areaChart() {
      var data = google.visualization.arrayToDataTable([
        ['Ano', 'Vendas', 'Despesas'],
        ['2013',  1000,      400],
        ['2014',  1170,      460],
        ['2015',  660,       1120],
        ['2016',  1030,      540]
      ]);
      var options = {
        title: 'Desempenho empresa',
        hAxis: {title: 'Ano',  titleTextStyle: {color: '#333'}},
        vAxis: {minValue: 0},
        colors: ['#cc0000', '#191919', '#80715d']
      };
      var chart = new google.visualization.AreaChart(document.getElementById('area-chart'));
      chart.draw(data, options);
     }
     
    // Combo chart
    function comboChart() {
      // Some raw data (not necessarily accurate)
      var data = google.visualization.arrayToDataTable([
       ['Mês', 'Bolivia', 'Equador', 'Canadá', 'China', 'Irlanda', 'Média'],
       ['2004/05',  165,      938,         522,             998,           450,      614.6],
       ['2005/06',  135,      1120,        599,             1268,          288,      682],
       ['2006/07',  157,      1167,        587,             807,           397,      623],
       ['2007/08',  139,      1110,        615,             968,           215,      609.4],
       ['2008/09',  136,      691,         629,             1026,          366,      569.6]
      ]);

    var options = {
      title : 'Produção de café por país',
      vAxis: {title: 'Copos'},
      hAxis: {title: 'Mês'},
      seriesType: 'bars',
      colors: ['#cc0000', '#191919', '#80715d', '#abc111', '#800000','#1bb3bc'  ],
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('combo-chart'));
    chart.draw(data, options);
    }
    // Pie Chart
    function pieChart() {
        var data = google.visualization.arrayToDataTable([
          ['Atividade', 'Horas por dia'],
          ['Trabalhar',     11],
          ['Comer',      2],
          ['Sair',  2],
          ['Assistir TV', 2],
          ['Dormir',    7]
        ]);
        var options = {
          title: 'Atividades diárias',
      colors: ['#cc0000', '#191919', '#80715d', '#f0f0f0', '#000000','#6d6d6d'  ],
        };
        var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));
        chart.draw(data, options);
      }

      // calendario       

        // modelo 1
        $(".responsive-calendar.modelo-1").responsiveCalendar({
          time: '2015-05',
          events: {
            "2015-05-30": {"number": 5, "url": "http://urbansummer.com.br/Demo/fw_santander/panels.html"},
             "2015-05-12": {}}
        });
       




     
    

  </script>



</body>

</html>
