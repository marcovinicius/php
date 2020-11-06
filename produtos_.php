<?php
         $servername ="localhost";
         $username   ="root";
         $password   ="1234";
         $database   ="pine in box";
            // criando a conexão
         $conn =mysqli_connect($servername,$username,$password,$database);
           //verificando a conexão
         if(!$conn){
             die("A conexão ao BD falhou".mysqli_connect_error());
         }
?>

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
            <li onclick="exibir_todos_categoria()">Todos(9)</li>
            <li onclick="exibir_apenas_categoria('Celulares')">Celulares (2)</li>
            <li onclick="exibir_apenas_categoria('TVs')">TVs (2)</li>
            <li onclick="exibir_apenas_categoria('Eletrodomésticos')">Eletrodomésticos (2)</li>
            <li onclick="exibir_apenas_categoria('Livros')">Livros (2)</li>
            <li onclick="exibir_apenas_categoria('Drones')">Drones (1)</li>
        </ul>
    </div>

    <div class="produtos">

          <?php
              $sql = "select *from produtos";
              $result = $conn->query($sql);
              
              if($result->num_rows > 0){
                  while($rows = $result->fetch_assoc()){
            ?>

        <div class="container2">
            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display:block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo"><strike>R$ <?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$ <?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p id="antigo" <strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>

            <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="exibir_destaque_produto(this)">
                <br>
                <p id="descricao"><?php echo $rows["descricao"]; ?>r</p>
                <hr>
                <p id="antigo"><strike>R$<?php echo $rows["preco"]; ?></strike><br></p>
                <p class="preço">R$<?php echo $rows["preco_venda"]; ?><br></p>
            </div>
        </div>
        <?php
        }
             } else{
                 echo "Nenhum produto cadastrado!";
             }
          ?>
    </div>

    <br><br><br><br><br>
    <br><br><br><br><br>

    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamentos.</b></p>
        <img width="35%" src="./formas_de_pagamentos.png" alt="Formas de pagamentos">
        <p id="copy">&copy; Pine in box</p>
    </footer>
</body>

</html>