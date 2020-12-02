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

<!--NOSSAS LOJAS-->

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <title>Nossas Lojas - Pine in box</title>
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
  </head>

  <body>
    <div class="container">
     <!--Inicio do Menu-->
   <?php
       include_once('menu.html');
   ?>
    <!--Fim do menu-->
         
     <header>
         <h1 style="color: #ad0404;">Nossas lojas</h1>
     </header>
      <hr>
      
		<table border=0 width="100%" cellpadding="20">
          <tr>
           <td width="33%">
            <h3>Rio de Janeiro</font>   </h3>
             <p id="endereço">Avenida Presidente Vargas,6000</font></p>
             <p id="endereço">15 &ordm; andar</font></p>
             <p id="endereço">Centro</font></p>
             <p id="endereço">(21) 5555-7777</font></p>
           </td>
           
           <td width="33%">
            <h3>São Paulo</font></h3>
             <p id="endereço">AV.Paulista, 3000</font></p>
             <p id="endereço">6 &ordm; andar</font></p>
             <p id="endereço">Centro</font></p>
             <p id="endereço">(11) 9999-5555</font></p>
           </td>
           <td>
            <h3>Santa Catarina</font></h3>
             <p id="endereço">Balneário Camburiú, 9000</font></p>
             <p id="endereço">8 &ordm; andar</font></p>
             <p id="endereço">Centro</p>
             <p id="endereço">(47) 8888-4444</font></p>
           </td>
          </tr>
        </table>
    <br><br><br><br><br>
    <br><br><br><br><br>
   
    <footer id="rodape">
      <p id="formas_pagamento"><b>Formas de pagamentos.</b></p>
		<img width="35%" src="./formas_de_pagamentos.png" alt="Formas de pagamentos"> 
      <p id="copy">&copy; Pine in box</p>
    </footer>
    </div>
  </body>
</html>