// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
$(document).ready(function(){
  adjustWidthMain();
});
$(window).load(function(){
  workspace();
  fsDropdowns();
  tabelas();
});
$(window).resize(function(){
  adjustWidthMain();
  workspace();
});

function constructMenu(){
  var qts = $('.menu > li').size();
  var html = '';
  html += '<div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');">';
  html += '<div class="flipper">';
  html += '<div class="front">';
  html += '<div class="icon bg-dark66"></div>';
  html += '</div>';
  html += '<div class="back">';
  html += '<div class="icon bg-red"></div>';
  html += '</div>';
  html += '</div>';
  html += '</div>';

  for(var i = 0; i < qts; i++){
    var htmlContent = ''
    htmlContent += $('.menu > li:eq('+i+') > a').html();
    $('.menu > li:eq('+i+') > a').html(html + htmlContent);
  }
  menu();
  var alturaPagina = $('.main').height();
  var alturaAside = $('aside').height();
  //$('aside').height(alturaPagina + 120);


}
constructMenu();

function menu(){
  $('.menu li > a').on('click',function(){
    if(!$(this).hasClass('active')){
      // HIDE ALL ELEMENTS
      $('.menu li, .menu li a').stop(true, true).removeClass('active open');
     
      //$('aside').removeClass('active');
      $('.menu li a > span').stop(true, true).hide();
      $('.menu li.dropdown .menu-drop').stop(true, true).slideUp('fast');

      // SHOW ELEMENT
      $(this).delay(150).queue(function (next){
        $(this).stop(true, true).addClass('active');
        $('.menu li a > span').stop(true, true).show();
        $(this).parent().stop(true, true).addClass('active');
        $('aside').stop(true, true).addClass('active');
        next();
      });
      // SHOW TEXT ELEMENT
      $(this).delay(450).queue(function (next){
       $(this).find('span').stop(true, true).show();
       next();

      });

      // SHOW DROPDOWN MENU
      if($(this).parent('li').hasClass('dropdown')){
        $(this).parent('li').stop(true, true).addClass('open');
        $(this).parent('li').find('.menu-drop').delay(600).stop(true, true).slideDown('slow');
      }else{
        $(this).parent('li').stop(true, true).removeClass('open');
      }
    }else{
      // HIDE ALL ELEMENTS
      $('.menu li a').stop(true, true).removeClass('active');
      $('.menu li a > span').stop(true, true).hide();
      $('.menu li.dropdown .menu-drop').stop(true, true).slideUp('fast');
      $('.menu li.dropdown').stop(true, true).removeClass('open');
      $('aside').stop(true, true).removeClass('active');
    }
  });
}

function menu2(){
  $('.menu li > a').on('click',function(){
    if(!$(this).hasClass('active')){
      // HIDE ALL ELEMENTS
      $('.menu li a').removeClass('active');
      $('aside').removeClass('active');
      $('.menu li a > span').hide();
      $('.menu li.dropdown .menu-drop').slideUp('fast');

      // SHOW ELEMENT
      $(this).delay(150).queue(function (next){
        //$(this).addClass('active');
        $('.menu li a').addClass('active');
        $('aside').addClass('active');
        $(this).parent().addClass('active');
        next();
      });
      // SHOW TEXT ELEMENT
      $(this).delay(450).queue(function (next){
        $(this).find('span').show();
        next();
      });

      // SHOW DROPDOWN MENU
      if($(this).parent('li').hasClass('dropdown')){
        $(this).parent('li').find('.menu-drop').delay(600).slideDown('slow');
      }
    }else{
      // HIDE ALL ELEMENTS
      $('.menu li a').removeClass('active');
      $('.menu li a > span').hide();
      $('.menu li.dropdown .menu-drop').slideUp('fast');
    }
  });
}

function panels(){
  // CONTROL SHOW PANEL
  $('.panels .panel-header span[data-panel-indice]').on('click',function(){
    var id = $(this).parent().parent().attr('id');
    var idx = $('.panels#'+id+' .panel-header span[data-panel-indice]').index(this);
    if(!$(this).hasClass('active')){
      $('.panels#'+id+' .panel-header span').removeClass('active');
      $(this).addClass('active');
      $('.panels#'+id+' .panel-content').removeClass('active');
      $('.panels#'+id+' .panel-content'+$(this).attr('data-target')).addClass('active');
    }
  });

  // CONTROL HEIGHT ON CONTENT PANEL SIDE
  var size = $('.panels.side').size();
  for(var i=0; i < size; i++){
    adjustHeightTabs(i);
  }

}
panels();

function adjustHeightTabs(indice){
  var hgt = $('.panels.side').eq(indice).height();
  $('.panels.side').eq(indice).find('.panel-body').height(hgt - 90);
  $('.panels.side:eq('+indice+') .panel-header').height(hgt);
}

function adjustWidthMain(){
  var widthWindow = $(window).width();
  widthWindow = widthWindow - 70;
  $('.main').width(widthWindow);
}

//inputs

function inputs(){


    // verifica na hora do carregamento
    $('.input-label').each(function(){
      if( ! $(this).find('input').val() == ''){
        $(this).addClass('clickado');
      }
    });

    // move o label de lugar

    var campo = $('.input-label').find('input');
    $('.input-label').on('click', function(){
      if(!$(this).hasClass('disabled')){
        $(this).addClass('clickado');
      }
    });


    // verifica se o campo esta vazio
    $('.input-label > input').blur( function(){
        if(  $(this).val() == '' ){
           $(this).parent().removeClass('clickado');
        }
     });

    // mascaras
      $(".mascara-data").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
      $(".mascara-telefone").mask("(99) 9999-9999?9");
      $('.mascara-cnpj').mask('99.999.999/9999-99');
      $('.mascara-cpf').mask('999.999.999-99');
      $('.mascara-cep').mask('99999-999');
    

    // select
   

    var selectBox = $("select").selectBoxIt();

   

}
inputs();

    $('.input-label > input').blur( function(){
      if(  $(this).val() == '' ){
         $(this).parent().removeClass('clickado');
      }
    });


    // work space
    function workspace(){
      
        $('.work-space-boxes .columns').each(function(){   
          var url = $(this).find('.texto a').attr('href');
          $(this).find('.mask').remove();
          $(this).find('.imagem').before('<div  class="mask" />');
          var altImg = $(this).find('.imagem').height();
          $(this).find('.mask, .url-mask').height(altImg); 
          $(this).find('.url-mask').remove();         
          $(this).find('.imagem').before('<a  class="url-mask" />');
          $(this).find('.url-mask').height(altImg); 
          $(this).find('.url-mask').attr('href', url); 
          $(this).mouseenter(function(){
            $(this).find('.mask').addClass('red');
          });
          $(this).mouseleave(function(){
            $(this).find('.mask').removeClass('red');
          });
        });
    
    }

    // work space header 
    $('.work-space-header .coluna-1 .logo, .work-space-header .coluna-2 p').clone().appendTo('.mobile-bar');

    // autocomplete
    function exibeAutocomplete(){
    $('.ws-header-busca input').on('keyup',function(){
      $('body').append('<div class="autocomplete-buscador-back" />');
      var altura = $(window).height();
      $('.autocomplete-buscador-back').height(altura);
      var search = $(this).val();
      if(search.length >= 1){
        abreBuscador();        
      }else{
        fechaBuscador();
      }

      function abreBuscador(){
        $('.autocomplete-buscador').slideDown('slow');
        $('.autocomplete-buscador-back').show();
        $('.autocomplete-buscador .encontrados span span').text(search);
      }
      function fechaBuscador(){
        $('.autocomplete-buscador').slideUp('up');
        $('.autocomplete-buscador-back').hide();
      }
      $('.autocomplete-buscador-back').on('click', function(){   
      fechaBuscador();
    });
    });
    
  }exibeAutocomplete();


  // panels
  // accordion 
  $('.panel-accordion').each(function(){
    $(this).find(' .fs-panel-head .seta').on('click', function(){
      if( $(this).hasClass('ativo')){
        $(this).removeClass('ativo');
        $(this).parents('.panel-accordion').find('.fs-panel-inner > div').slideUp();
      }else{
        $(this).addClass('ativo');
        $(this).parents('.panel-accordion').find('.fs-panel-inner > div').slideDown();
      }
    });
  });
  $('.fs-panel-inner .accordion-inner ').each(function(){
    $(this).find(' .seta').on('click', function(){
      if( $(this).hasClass('ativo')){
          $(this).removeClass('ativo');
          $(this).parents('.accordion-inner').find('p').slideDown();
        }else{
          $(this).addClass('ativo');
          $(this).parents('.accordion-inner').find('p').slideUp();
        }
    });
    $(this).find(' .seta').eq(0).trigger('click');
  });

  
  //scroll
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  // menu login 
  $('[data-toggle="menu-login"]').each(function(){    
    $(this).on('click', function(){
      var target = $(this).attr('data-target');
      $(target).toggleClass('hide');
    });
  });

  // doc menu
  var alturaBody = $(window).height();
  $('.doc-coluna-direita').height(alturaBody -150);


  // dropdowns
  function fsDropdowns(){

    $('.fs-dropdown').each(function(){
      var botao = $(this).find('.fs-dropdown-botao');
      var menu = $(this).find('.fs-dropdown-menu');
      var largura = $(this).width();
      /*var larguraIcon = $(this).find('.fs-dropdown-icon').width();
      var larguraText = $(this).find('span').width();
      var larguraIcones = larguraIcon + 
      console.log(largura);
      console.log(larguraIcon);
      console.log(larguraText);*/
      // abrir/fechar
      botao.on('click', function(){
        if( ! $(this).hasClass( 'ativo' ) ){ 
          $(this).addClass('ativo');
          $(this).find('.seta').addClass('ativo');
          menu.addClass('ativo').slideDown(200);
        }else{
          $(this).removeClass('ativo');
          $(this).find('.seta').removeClass('ativo');
          menu.removeClass('ativo').fadeOut(100);
        }
      });
      // active
      $(menu).find('li').on('click', function(){
        $(menu).find('li').removeClass('selected');
        $(this).addClass('selected');
      });
    });

  }
  

  // tabelas 
  $('.dataTables_wrapper .dataTables_paginate a.paginate_button').on('click', function(){
      tabelas()
  });
  
  function tabelas(){
    $('.dataTable').fadeIn(100);
    $('.dataTables_info').addClass('table-col-fut');
    $('.dataTables_paginate').addClass('table-col-fut');
    $('.dataTables_paginate').before("<div class='table-col-fut table-num-paginas' />");
    $('.dataTables_length select').appendTo('.table-num-paginas');
    $('.table-col-fut').wrapAll("<div class='table-col-fut-wrap' /> ");
    $('.dataTables_length').remove();
  } 

  function hasOverflow(){
      /* usar a classe ".has-overflow" */

      $('.has-overflow, .has-overflow-tablet').each(function(){
          var txt = $(this).text();
          
          var largura = $(this).width();
            $( this ).contents().filter(function(){
              return this.nodeType !== 10;
          }).wrapAll( "<div class='has-overflow-inner' ><div class='has-overflow-table' ></div></div>" );
          $(this).find('.has-overflow-inner').append('<span class="shadow" />');
          var inner = $(this).html();
          var larguraInner = $(this).find('.has-overflow-inner').width();
          var titulo = $(this).attr('title');
          $(this).find('.shadow').attr('title', titulo );
          $(this).append("<div class='tooltip_' />");
          $(this).find('.tooltip_').text(txt);


          $( '.has-overflow' ).mouseenter(function(){
            $(this).find('.tooltip_').fadeIn(200);
          });
          $( '.has-overflow' ).mouseleave(function(){
            $(this).find('.tooltip_').fadeOut(100);
          });
      });
  }hasOverflow();


  // tooltip

  function hasTooltip(){

     $('.has-tip').each(function(){
        if( ! $(this).hasClass('popover') ){
          var bg = $(this).attr('data-tip-bg');
          var selector = $(this).attr('data-selector');
          $('.tooltip').attr('id', selector ).addClass(bg);
        }
        
      });

          $('.has-tip').each(function(){
             if( ! $(this).hasClass('popover') ){
              var bg = $(this).attr('data-tip-bg');
              var selector = $(this).attr('data-selector');
              var idx = $('.has-tip.popover').index(this);

              if( $(this).hasClass('font-black')){
                $('.tooltip').eq(idx).addClass('font-black');
              }

              $('.tooltip').each(function(){
                if( $(this).attr('data-selector') ==  selector ){
                  $(this).addClass(bg);
                }
                else{
                  $(this).removeClass(bg);
                }
              });

            }
            
          });

  }hasTooltip();

  function hasPopover(){
   $('.has-popover').each(function(){
    var bg = $(this).attr('data-tip-bg');  
    $(this).append("<div class='tooltip-popover' ><div class='inner'><div class='popover-content' /><div class='nub' /></div></div>");
    $(this).find('.inner').addClass(bg);
    var conteudoHtml = $(this).attr('data-content-html');         
    $(this).find('.popover-content').html(conteudoHtml);
   });
  $('.has-popover').on('click', function(){

      
    idxPopover = $('.has-popover').index(this);
      

    if( $(this).hasClass('active') ){
      $('.tooltip-popover').hide();
      $(this).removeClass('active');
      
    }else{
      $('.tooltip-popover').hide();
      $(this).find('.tooltip-popover').fadeIn(200);
      $(this).addClass('active');
      
    }

  })
 } hasPopover();
  
 

  
   

   
