<div class="bloco">
<h2 class="doc-title" id="link-doc-grid">
  Grid
</h2>

<div class="legend">
  <p>
    Utilizaremos os grids para possibilitar a distribuição do conteúdo de forma uniforme. Sendo flexível, facilita a construção do design responsivo.
  </p>
</div>

  <h4 class="doc-title" id="link-doc-basico">
    Básico
  </h4>      
  <div class="legend">
      <p>
        Comece adicionando um elemento com uma classe de <strong>row</strong> . Isto irá criar um bloco horizontal para conter colunas verticais. Em seguida, adicione elementos com um <strong>column</strong> classe dentro dessa linha. Você pode usar ou <strong>columns</strong> a única diferença é gramática. Especificar as larguras de cada coluna com o <strong>small- #</strong> , <strong>medium- #</strong> , e <strong>large- #</strong> classes.
      </p>       
  </div>

   <div class="bloco">    
      <div class="full">
        <div class="row display">
              <div class="small-2 large-4 columns"><span class="hide-for-large">2</span><span class="show-for-large">4</span></div>
              <div class="small-4 large-4 columns">4</div>
              <div class="small-6 large-4 columns"><span class="hide-for-large">6</span><span class="show-for-large">4</span></div>
        </div>
        <div class="row mgn-top-10 paleta-codigo">
            <code class="pdg-5">
                  <span class="code-line">
                      &lt;div class="<span class="cor-vermelho">row</span>"><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-2 large-4 columns</span>">4&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-4 large-4 columns</span>">4&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-6 large-4 columns</span>">4&lt;/div>
                        </span><br>
                      
                      &lt;/div>
                  </span>
            </code>
        </div>

        <hr>  

        <div class="row display mgn-top-35">
              <div class="large-3 columns"><span class="hide-for-large">full</span><span class="show-for-large">3</span></div>
              <div class="large-6 columns"><span class="hide-for-large">full</span><span class="show-for-large">6</span></div>
              <div class="large-3 columns"><span class="hide-for-large">full</span><span class="show-for-large">3</span></div>
        </div>

        <div class="row mgn-top-10 paleta-codigo">
            <code class="pdg-5">
                  <span class="code-line">
                      &lt;div class="<span class="cor-vermelho">row</span>"><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">large-3 columns</span>">3&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">large-6 columns</span>">6&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">large-3 columns</span>">3/div>
                        </span><br>
                      
                      &lt;/div>
                  </span>
            </code>
        </div>

        <hr>

        <div class="row display mgn-top-35">
              <div class="small-6 large-2 columns"><span class="hide-for-large">6</span><span class="show-for-large">2</span></div>
              <div class="small-6 large-8 columns"><span class="hide-for-large">6</span><span class="show-for-large">8</span></div>
              <div class="small-12 large-2 columns"><span class="hide-for-large">full</span><span class="show-for-large">2</span></div>
        </div>

        <div class="row mgn-top-10 paleta-codigo">
            <code class="pdg-5">
                  <span class="code-line">
                      &lt;div class="<span class="cor-vermelho">row</span>"><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-6 large-2 columns</span>">2&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-6 large-8 columns</span>">8&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-12 large-2 columns</span>">2&lt;/div>
                        </span><br>
                      
                      &lt;/div>
                  </span>
            </code>
        </div>

        <hr>

        <div class="row display mgn-top-35">
              <div class="small-3 columns">3</div>
              <div class="small-9 columns">9</div>
        </div>

        <div class="row mgn-top-10 paleta-codigo">
            <code class="pdg-5">
                  <span class="code-line">
                      &lt;div class="<span class="cor-vermelho">row</span>"><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-3 columns</span>">3&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-9 columns</span>">9&lt;/div>
                        </span><br>
                      
                      &lt;/div>

                  </span>
            </code>
        </div>

        <hr>  

        <div class="row display mgn-top-35">
              <div class="large-4 columns"><span class="hide-for-large">full</span><span class="show-for-large">4</span></div>
              <div class="large-8 columns"><span class="hide-for-large">full</span><span class="show-for-large">8</span></div>
        </div>

        <div class="row mgn-top-10 paleta-codigo">
            <code class="pdg-5">
                  <span class="code-line">
                     &lt;div class="<span class="cor-vermelho">row</span>"><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">large-4 columns</span>">4&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">large-8 columns</span>">8&lt;/div>
                        </span><br>
                      
                     &lt;/div>
                  </span>
            </code>
        </div>

      </div>

      <hr>

      <div class="row display mgn-top-35">
              <div class="small-6 large-5 columns"><span class="hide-for-large">6</span><span class="show-for-large">5</span></div>
              <div class="small-6 large-7 columns"><span class="hide-for-large">6</span><span class="show-for-large">7</span></div>
      </div>

        <div class="row mgn-top-10 paleta-codigo">
            <code class="pdg-5">
                  <span class="code-line">
                     &lt;div class="<span class="cor-vermelho">row</span>"><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-6 large-5 columns</span>">5&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-6 large-7 columns</span>">7&lt;/div>
                        </span><br>
                      
                     &lt;/div>
                  </span>
            </code>
        </div>

       <hr>

         <div class="row display mgn-top-35">
              <div class="large-6 columns"><span class="hide-for-large">full</span><span class="show-for-large">6</span></div>
              <div class="large-6 columns"><span class="hide-for-large">full</span><span class="show-for-large">6</span></div>
         </div> 

        <div class="row mgn-top-10 paleta-codigo">
            <code class="pdg-5">
                  <span class="code-line">
                     &lt;div class="<span class="cor-vermelho">row</span>"><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">large-6 columns</span>">6&lt;/div>
                        </span><br>
                      
                        <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">large-6 columns</span>">6&lt;/div>
                        </span><br>
                      
                     &lt;/div>
                  </span>
            </code>
        </div>  
    </div>
<!-- Grids -->
  
<!-- small grid -->
<div class="bloco">
    <h3 class="doc-title" id="link-doc-small-grid">
        Small Grid
    </h3>      
    <div class="legend">
      <p>
        Small grid se ajusta de uma maneira fácil à telas menores.
      </p>
    </div>
    <div class="row display mgn-top-35">
        <div class="small-2 columns">2</div>
        <div class="small-10 columns">10</div>
    </div>
    
    <div class="row mgn-top-10 paleta-codigo">
        <code class="pdg-5">
            <span class="code-line">
                &lt;div class="<span class="cor-vermelho">row</span>"><br>
                
                    <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-2 columns</span>">2&lt;/div>
                    </span><br>
                
                    <span class="indent-20 code-line">&lt;div class="<span class="cor-vermelho">small-10 columns</span>">10&lt;/div>
                    </span><br>
                
                &lt;/div>
            </span>
        </code>
    </div>
    
    <hr>
    
    <div class="row display mgn-top-35">
        <div class="small-3 columns">3</div>
        <div class="small-9 columns">9</div>
    </div>
    
    <div class="row mgn-top-10 paleta-codigo">
        <code class="pdg-5">
            <span class="code-line">
                &lt;div class="<span class="cor-vermelho">row</span>"><br>
                
                    <span class="indent-20 code-line">&lt;div class="><span class="cor-vermelho">small-3 columns</span>">3&lt;/div>
                    </span><br>
                
                    <span class="indent-20 code-line">&lt;div class="><span class="cor-vermelho">small-9 columns</span>">9&lt;/div>
                    </span><br>
                
                &lt;/div>
            </span>
        </code>
    </div>
</div>
<!-- /small grid -->
  
<!-- Medium Grid -->
<div class="bloco">
  <h3 class="doc-title" id="link-doc-medium-grid">
    Medium Grid
  </h3>      
  <div class="legend">
      <p>
        Telas de tamanho médio vão herdar o estilo de tela menor, a menos que você especifique um layout diferente usando a classe <strong>medium</strong>.
      </p>
  </div>
    
  <div class="row display mgn-top-35">
      <div class="medium-2 columns">2</div>
      <div class="medium-10 columns">10</div>
  </div>
    
   <div class="row mgn-top-10 paleta-codigo">
        <code class="pdg-5">
            <span class="code-line">
                &lt;div class="<span class="cor-vermelho">row</span>"><br>
                
                    <span class="indent-20 code-line">&lt;div class="><span class="cor-vermelho">medium-2 columns</span>">3&lt;/div>
                    </span><br>
                
                    <span class="indent-20 code-line">&lt;div class="><span class="cor-vermelho">medium-10 columns</span>">9&lt;/div>
                    </span><br>
                
                &lt;/div>
            </span>
        </code>
    </div>
    
    <hr>
    
  <div class="row display mgn-top-35">
      <div class="medium-3 columns">3</div>
      <div class="medium-9 columns">9</div>
  </div>
    
  <div class="row mgn-top-10 paleta-codigo">
        <code class="pdg-5">
            <span class="code-line">
                &lt;div class="<span class="cor-vermelho">row</span>"><br>
                
                    <span class="indent-20 code-line">&lt;div class="><span class="cor-vermelho">medium-3 columns</span>">3&lt;/div>
                    </span><br>
                
                    <span class="indent-20 code-line">&lt;div class="><span class="cor-vermelho">medium-9 columns</span>">9&lt;/div>
                    </span><br>
                &lt;/div>
            </span>
        </code>
    </div>    
</div>
<!-- Medium Grid -->

</div>
