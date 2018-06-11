<?php
  session_start();
?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="./css/dif.css">
</head>


<body>
<div class="d1">
    <form class="form">
 
   <TABLE BORDER=0 class="jj">

<TR> 

<TD class="tesq"> 
 <img class="logo" src="http://localhost/feetshoesshop/imagens/logo.jpg" />
</TD> 

<TD class="tcentro"> 
<input type="text" name="Pesquisa">
<img class="lupa" src="http://localhost/feetshoesshop/imagens/lupa.png">
</TD>
<?php
  if(isset($_SESSION['logado']) && $_SESSION['logado'] == TRUE){
?>
<TD class="tdcentro2"> 
<a href="http://localhost/feetshoesshop/p_logout.php" class="tbutton">Logout</a>
</TD>
<TD class="tdcentro2"> 
Bem-vindo(a) <?=$_SESSION['nome_cli'];?>
</TD>
<?php
  }else{
?>
<TD class="tdcentro2"> 
<a href="http://localhost/feetshoesshop/login.php" class="tbutton">Login</a>
</TD>
<TD class="tdcentro2"> 
<a href="http://localhost/feetshoesshop/cadastro.php" class="tbutton">Cadastre-se</a>
</TD>
<?php
  }
?>


<TD class="tdire"> 
<img class="carro" src="http://localhost/feetshoesshop/imagens/carro.png" />
</TD>

</TR> 



</TABLE> 
  </form>
  </div>

 
 <div class="d2">
    <TABLE BORDER=0 class="tab2">
    
    <TR>
    <TD>
    <a href="./produtos.php?publico=masculino">MASCULINO</a>
    </TD>

    <TD>
    <a href="./produtos.php?publico=masculino">FEMININO</a>
    </TD>

    <TD>
    <a href="./produtos.php?publico=masculino">INFANTIL</a>
    </TD>

    </TABLE>
  </div>

  <div class="d3">

  </div>

  <div class="d4">

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
<img class="marcas" src="http://localhost/feetshoesshop/imagens/umbro.jpg">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/moleca.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/beirario.jpg">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/penalty.png">
<img class="marcas" src="http://localhost/feetshoesshop/imagens/disantinni.jpg">



</body>


</html>