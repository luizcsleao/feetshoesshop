<?php

require("./inc_conexao.php");

?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/vendas.css">
</head>


<body>

<?php 
require("./inc_cabecalho.php");
?>
 

  <div class="d5">
  Itens masculinos:

  </div>

  <div class="d4">
  <?php
    $sql = "SELECT * FROM tb_produto WHERE ID_PUBLICO = 1";
    
    $result = mysqli_query($conn, $sql);

    while( $row = mysqli_fetch_assoc($result) )
    {
      echo $row['ID_PRO'];
      
      echo $row['NOME_PRO'];
      
      echo $row['DESCRICAO'];
      
      echo $row['PRECO_PRO'];    
    }
  ?>

</div>

<?php
require ("./inc_marcas.php");
?>

</body>


</html>