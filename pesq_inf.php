<?php

$servername = "localhost";

$username = "root";

$password = "";

$database = "feetshoes";

$port = "3306";

// Cria a conexão

$conn = new mysqli($servername, $username, $password, $database, $port);

// Verifica se a conexão foi estabelecida

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/dif.css">
</head>


<body>
<div class="d1">
 
   <TABLE BORDER=0 class="jj">

<TR> 

<TD class="tesq"> 
<a href="http://localhost/feetshoesshop"><img class="logo" src="http://localhost/feetshoesshop/imagens/logo.jpg" /></a>
</TD> 

<TD class="luizinho">
<a href="https://www.petz.com.br/"><img class="petz" src="./imagens/images.jpg"></a>
</TD>

<TD class="tcentro">
<form class="form" action="http://localhost/feetshoesshop" method="get">
    <input type="text" name="Pesquisa">
    <input type="submit" value="Pesquisar">
</form>
</TD>

<TD class="tdcentro2"> 
<img class="login" src="http://localhost/feetshoesshop/imagens/login.png" />
</TD>

<TD class="tdire"> 
<img class="carro" src="http://localhost/feetshoesshop/imagens/carro.png" />
</TD>

</TR> 



</TABLE> 
  </div>

 
 <div class="d2">
    <TABLE BORDER=0 class="tab2">
    
    <TR>
    <TD>
    <a href="./pesq_masc.php">MASCULINO</a>
    </TD>

    <TD>
    <a href="./pesq_fem.php">FEMININO</a>
    </TD>

    <TD>
    <a href="./pesq_inf.php">INFANTIL</a>
    </TD>

    </TABLE>
  </div>

  <div class="d5">
  Itens infantis:

  </div>

  <div class="d4">
  <?php
    $busca= '';
    if(array_key_exists("Pesquisa", $_GET)){
      $busca=$_GET['Pesquisa'];
    }
    echo $busca;
    $sql="SELECT ID_PRO, NOME_PRO, PRECO_PRO, DESCRICAO FROM tb_produto WHERE ID_PROD LIKE '%".$busca."%' OR NOME_PRO LIKE '%".$busca."%' OR DESCRICAO LIKE '%".$busca."%' AND ID_PUBLICO=3 ORDER BY ID_PROD";
    $result= mysqli_query($conn, $sql);
    if($sql === FALSE) {
      echo $busca;
      die(mysqli_error());
  }
    while($row = mysqli_fetch_assoc($result)){
      echo $row=['ID_PROD'];
      
      echo $row=['NOME_PROD'];
      
      echo $row=['DESCRICAO'];
      
      echo $row=['PRECO_PRO'];    
    }
  ?>

</div>

<div class="d5">
Marcas comercializadas:
</div>
<img class="marcas" src="http://localhost/feetshoesshop/imagens/nike.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/adidas.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/olympikus.jpg">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/azaleia.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/asics.jpg">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/zinedine.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/cartago.png">
<br>
<img class="marcas" src="http://localhost/feetshoesshop/imagens/capricho.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/mooncity.jpg">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/cartago.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/moleca.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/beirario.jpg">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/cartago.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/disantinni.jpg">



</body>


</html>