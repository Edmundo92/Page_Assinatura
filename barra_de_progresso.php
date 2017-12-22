<?php
  include("config.php");
    $listar = $pdo->prepare("SELECT * FROM assinatura");
    $listar->execute();
    
	$numero = $listar->rowCount(); 
?>

<?php

   $total = 1000;
   $current = $numero;
   $percent = round(($current/$total) * 100, 1);
   
?>

<style>

.outter{
    height: 33px;
	width: 500px;
	border: 2px solid #C1A78E;
	margin-top: 25px;
	padding: 2px;
}

.end{
	font-size: 10px;
	color: black;
	font-weight: bold;
    height: 25px;
	width: <?php echo $percent ?>%;
	border-right: 1px solid #C1A78E;
	opacity: 0.5;
	text-align: center;
	background: -webkit-linear-gradient(top, rgba(243,226,199,1)
	0%, rgba(193,158,103,1)
	50%, rgba(182,141,76,1)
	51%, rgba(233,212,179,1)
	100%);
	
	background: -webkit-linear-gradient(to bottom, rgba(243,226,199,1)
	0%, rgba(193,158,103,1)
	50%, rgba(182,141,76,1)
	51%, rgba(233,212,179,1)
	100%);
	filter: progrid:DXImageTransform.Microsoft.gradient(starColorstr='#f3e2c7', endColorstr='#e9d4b3',GradientType=0)
}

</style>