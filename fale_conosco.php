<?php
         $servername ="localhost";
         $username   ="root";
         $password   ="1234";
         $database   ="pine in box";
            // criando a conexão
         $conn = mysqli_connect($servername,$username,$password,$database);
           //verificando a conexão
         if(!$conn){
             die("A conexão ao BD falhou".mysqli_connect_error());
         }

         if(isset($_POST['nome'])&& isset($_POST['msg'])){
             $nome =$_POST['nome'];
             $msg  =$_POST['msg'];

             $sql = "insert into comentarios (nome, msg) values('$nome','$msg')";
             $result = $conn->query($sql);
         }
?>

<!--FALE CONOSCO-->

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <title>Fale Conosco - Pine in box</title>
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
  </head>

  <body>
       <!--Inicio do Menu-->
   <?php
       include_once('menu.html');
   ?>
    <!--Fim do menu-->
        
    <header>
          <h1 style="color: #ad0404;">Contatos</h1>
        </header>
        <hr>
         
        <table border=0 width="100%" cellpadding="20">                   
        
          <tr>
            <td width="50%" align="center">
             <img src="./logo_email.png" width="40px"><!--logo do email-->
               <p>contato@pineinbox.com</p>
             </td>
             <td width="50%" align="center">
             <img src="./logo_whatsapp.png" width="50px"><!--logo do wpp-->
               <p>(21) 9 5555-7777</p>
              </td>
         </table>
         
         <form method="post" action="">
              Nome:<br>
            <input type="text" name="nome" style="width:500px;"><br>
              Mensagem:<br>
            <input type="text" name="msg" style="width: 500px;"><br>

            <input type="submit" name="submit" value="Enviar">
         </form>
    <br><br><br><br><br>
    <br><br><br><br><br>
    
    <footer id="rodape">
      <p id="formas_pagamento"><b>Formas de pagamentos.</b></p>
		<img width="35%" src="./formas_de_pagamentos.png" alt="Formas de pagamentos"> 
      <p id="copy">&copy; Pine in box</p>
    </footer>

  </body>
</html>