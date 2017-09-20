<!-- tabelas -->
<div class="bloco">

<h2 class="doc-title" id="link-doc-tabela">
  Tabela
</h2>

<div class="legend">
  <p>
    As tabelas podem possuir em seus campos componentes como Select, Check Box, Select List, e re organização por coluna.
  </p><br><br>
  <div>
    <em><span class="estilo">Para deixar a tabela personalizada são necessários os arquivos:</span></em><br>
    "stylesheets/jquery.dataTables.min.css"<br>
    "js/dataTables.select.min.js"<br><br>
    <em><span class="estilo"> Script utilizado no exemplo:</span></em><br>
      $('#tabela').DataTable({<br>
        columnDefs: [ {<br>
            orderable: false,<br>
            className: 'select-checkbox',<br>
            targets:   0<br>
        } ],<br>
        select: {<br>
            style:    'os',<br>
            selector: 'td:first-child'<br>
        },<br>
        order: [[ 1, 'asc' ]]<br>
      });
  </div>
</div>

<div class="full">
  <table id="tabela" class="display" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th width="5%"></th>
                    <th width="10%">Coluna 1</th>
                    <th width="10%">Coluna 2</th>
                    <th width="10%">Coluna 3</th>
                    <th width="10%">Coluna 4</th>
                    <th width="10%">Coluna 5</th>
                    <th width="10%">Coluna 6</th>
                    <th width="15%"><span class="has-overflow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </span></th>
                </tr>
            </thead>
          
            <tbody>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>
              
              <tr>
                  <td></td>
                  <td>Texto 1</td>
                  <td>Texto 11</td>
                  <td>Texto 1111</td>
                  <td>Texto 1111</td>
                  <td>Texto AAAA</td>
                  <td>Texto BB</td>
                  <td>Texto BBBB</td>
              </tr>

                
            </tbody>
        </table>
      </div>


        <code>  
       
         <span class="code-line">&lt;table id="tabela" class="display" width="100%" cellspacing="0"&gt;</span>
            <span class="indent-10 code-line">&lt;thead&gt;</span>
            <span class="indent-20 code-line">  &lt;tr&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="5%"&gt;&lt;/th&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="10%"&gt;Coluna 1&lt;/th&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="10%"&gt;Coluna 2&lt;/th&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="10%"&gt;Coluna 3&lt;/th&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="10%"&gt;Coluna 4&lt;/th&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="10%"&gt;Coluna 5&lt;/th&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="10%"&gt;Coluna 6&lt;/th&gt;</span>
            <span class="indent-30 code-line">  &lt;th width="15%"&gt;&lt;span class="has-overflow"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, &lt;/span&gt;&lt;/th&gt;</span>
            <span class="indent-20 code-line">  &lt;/tr&gt;</span>
            <span class="indent-10 code-line">&lt;/thead&gt;</span>
              </span>
            <span class="indent-10 code-line">&lt;tbody&gt;</span>
            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>
            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>
            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>
            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>
            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>
            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>


            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>
            <span class="indent-20 code-line">&lt;tr&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 11&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto 1111&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto AAAA&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BB&lt;/td&gt;</span>
            <span class="indent-30 code-line">&lt;td&gt;Texto BBBB&lt;/td&gt;</span>
            <span class="indent-20 code-line">&lt;/tr&gt;</span>

            </span>
            <span class="indent-20 code-line">  </span>
            <span class="indent-10 code-line">&lt;/tbody&gt;</span>
            <span class="code-line">&lt;/table&gt;

        </code>


</div>
<!-- tabelas -->



