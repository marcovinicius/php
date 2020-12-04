import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';


ReactDOM.render( 
  <App/> ,
 document.getElementById('root')

<!--PRODUTOS-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Pine in box</title>
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <div id="root">
    <div class="container">
        <!--Inicio do Menu-->
        <?php
           include_once('menu.html');
         ?>
         <!--Fim do menu-->
     <header>
       <h1 style="color: #ad0404;">Produtos</h1>
     </header>
       <hr>


     <div class="categorias">
        <h3 style="color: blue;">Categorias</h3>
        <ul>
          <li><a class="item_categoria" href="#void" onclick="exibir_todos_categoria()">Todos(9)</li>
          <li><a class="item_categoria" href="#void" onclick="exibir_apenas_categoria('Celulares')">Celulares (2)</li>
          <li><a class="item_categoria" href="#void" onclick="exibir_apenas_categoria('TVs')">TVs (2)</li>
          <li><a class="item_categoria" href="#void" onclick="exibir_apenas_categoria('Eletrodomésticos')">Eletrodomésticos (2)</li>
          <li><a class="item_categoria" href="#void" onclick="exibir_apenas_categoria('Livros')">Livros (2)</li>
          <li><a class="item_categoria" href="#void" onclick="exibir_apenas_categoria('Drones')">Drones (1)</a></li>
        </ul>
     </div>

     <div class="produtos">

         <?php
              $dados_json = file_get_contents("http://127.0.0.1:5501/php/getContent.php?table*produtos");

              $dados = json_decode($dados_json, true);
              print_r($dados);

              foreach ($dados as $key => $rows){
                  print_r($rows);
              }
              { 
          ?>
  
     <div class="container-md">
            <div class="box_produto" style="display: block;" id="<?php echo $rows[" categorias "]; ?>">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
                            <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?></div>
            <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" style="display: block;" id="<?php echo $rows[" categorias "]; ?>">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
            <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?></div>
             <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" id="<?php echo $rows[" categorias "]; ?>" style="display: block;">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
            <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?></div>
            <hr>
            <div class="antigo"><strike>R$ <?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" id="<?php echo $rows[" categorias "]; ?>" style="display: block;">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
            <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?></div>
            <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" id="<?php echo $rows[" categorias "]; ?>" style="display: block;">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
             <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?></div>
            <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" id="<?php echo $rows[" categorias "]; ?>" style="display: block;">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
            <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?> </div>
            <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" id="<?php echo $rows[" categorias "]; ?>" style="display: block;">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
            <br>
            <div class="descricao"> <?php echo $rows["descricao"]; ?></div>
            <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" id="<?php echo $rows[" categorias "]; ?>" style="display: block;">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
            <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?></div>
            <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$ <?php echo $rows["preco_venda"]; ?><br></div>
            </div>

            <div class="box_produto" id="<?php echo $rows[" categorias "]; ?>" style="display: block;">
            <img src="<?php echo $rows[" imagem "]; ?>" class="rounded" width="120px" onclick="exibir_destaque_produto(this)">
            <br>
            <div class="descricao"><?php echo $rows["descricao"]; ?>r</div>
            <hr>
            <div class="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></div>
            <div class="preço">R$<?php echo $rows["preco_venda"]; ?><br></div>
            </div>
     </div>
         <?php
             }
          ?>
    </div>
    </div>


           <footer id="rodape">
           <p id="formas_pagamento"><b>Formas de pagamentos.</b></p>
           <img width="35%" src="./formas_de_pagamentos.png" alt="Formas de pagamentos">
           <p id="copy">&copy; Pine in box</p>
           </footer>
    </div>
</body>
</html>