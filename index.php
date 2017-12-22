<?php header ( "Content-Type: charset = utf-8 ");  ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="css/estilo_abaixo_assinado.css" />
</head>
<body>

    <?php
	  include ("header.php");
    ?>	

<section id="secao1">
<div class="esq">
<div style="display:flex; justify-content:space-between;border: 0px solid red; width: 94%;">
<h4>VIDEO</h4>
</div>

    <div class="video">
	    <video width="610" height="400" controls>
		  <source src="video/apelo.mp4" type="video/mp4">
		</video>
	</div>


</div>
<div class="dir">
<h4>ASSINE JÁ</h4>
<hr/>


    <form method="post" action="validar.php" id="formulario">
      <input class="entrada" type="text" name="nome" id="nome" placeholder="Nome Completo"/><br>
      <input class="entrada" type="text" name="pais" id="snome" placeholder="País"/><br>
      <input class="entrada" type="text" name="idade" id="snome" placeholder="idade"/><br>
	  
      <br>
      <textarea cols="45" rows="7" name="comentario" maxlength="500" placeholder="Deixe o Seu Comentário" style="border: 1px solid #C1A78E; padding: 6px; font-size: 15px; color: black;"></textarea><br>    
      <input type="submit" name="cadastrar" class="entrada botao" value="Assinar"/>    
    </form>  

</div>
</section>
    <?php
        include ("rodape.php");
    ?>
</body>
</html>