<?php
         $servername ="localhost";
         $username   ="root";
         $password   ="1234";
         $database   ="pine in box";

         $tabela = $_GET['table'];
            // criando a conexão
         $conn =mysqli_connect($servername,$username,$password,$database);
           //verificando a conexão
         if(!$conn){
             die("A conexão ao BD falhou".mysqli_connect_error());
         }

         setlocale(LC_MONETARY, 'pt_BR');
              
              $sql = "select *from produtos";
              $result = $conn->query($sql);
              
              print_r( json_encode( $result->fetch_all(MYSQLI_ASSOC)) );
              mysqli_close($conn);
?>