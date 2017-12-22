<?php
   header("Content-Type: text/html; charset=UTF-8");
   
	try{
		$pdo = new PDO('mysql:host=localhost; dbname=formulario','root','');
	}catch(PDOException $erro_conexao){
		echo'Erro ao Conectar';
		echo $erro_conexao->getMessage();
	}
	
?>