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

<!--Pagina Inicial-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title img width="60px" src="./Logo.jpeg">Pine in box</title>
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <script>
        function carregar_saudacao(){
            data = new Date();
            hora = data.getHours();

            if (hora < 12) 
            {
                document.getElementById("msg_abertura").innerHTML = "Bomdia!";
            }
             else if (hora < 18) 
            {
                document.getElementById("msg_abertura").innerHTML = "Boa tarde";
            } 
            else 
            {
                document.getElementById("msg_abertura").innerHTML = "Boa noite";
            }
        }
    </script>
</head>

<body onload="carregar_saudacao()">
    <!--Inicio do Menu-->

    <?php
       include_once('menu.html');
   ?>
    <!--Fim do menu-->
    <div class="container">
    <main>
        <h1 style="color: #ad0404;">Seja bem vindo(a)!</h1>
        <p> Aqui em nossa loja você tem <b><big>descontos</big></b> em todos os nossos produtos!!!</p>
    </main>

    <br><br><br><br><br>

    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamentos.</b></p>
        <img width="35%" src="./formas_de_pagamentos.png" alt="Formas de pagamentos">
        <p id="copy">&copy; Pine in box</p>
    </footer>

</body>
</div>
</html>