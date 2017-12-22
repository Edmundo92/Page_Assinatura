    <?php
	header("Content-Type: text/html; charset=UTF-8"); 
     //setlocale(LC_CTYPE, "pt_BR");
	 
     include("config.php");
    ?>
   <html>
	<head>
	<title></title>
	<script>
	  function loginsuccessfully(){
	    setTimeout("window.location = 'index.php'", 100);
	  }
	  
	  function loginfailed(){
	    setTimeout("window.location = 'index.php'", 100);
	  }
	</script>
	</head>
	<body>
<?php
    
	header("Content-Type: text/html; charset=UTF-8");

	if(isset($_POST['cadastrar'])){
		
		$nome = $_POST['nome'];
        $pais = $_POST['pais'];
        $idade = $_POST['idade'];
        $comentario = $_POST['comentario'];
		$aux = "/^[a-zA-ZãÃâÂáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇºª' ']+$/";
		
		// $aux = utf8_encode($aux);
		// $nome = utf8_encode($nome);
		// $pais = utf8_encode($pais);
		// $comentario = utf8_encode($comentario);
		
		// $nome = ucwords(strtolower($nome));
		// $pais = ucwords(strtolower($pais));
		
		
          $validacao = $pdo->prepare("SELECT id FROM dados WHERE nome = :nome AND pais = :pais LIMIT 1");
          $validacao ->bindParam(':nome',$nome ,PDO::PARAM_STR);
		  $validacao ->bindParam(':pais',$pais ,PDO::PARAM_STR);
          $validacao ->execute();
		
        if($validacao->rowCount() == '0'){
			
			if(!empty($nome) && !empty($pais) && !empty($idade)){
					
				 $sql_inserir = $pdo->prepare('INSERT INTO dados(nome, pais, idade, comentario) VALUES(:nome, :pais, :idade, :comentario)');
			
					try{
				
						$sql_inserir->bindValue(':nome', $nome, PDO::PARAM_STR);
						$sql_inserir->bindValue(':pais', $pais, PDO::PARAM_STR);
						$sql_inserir->bindValue(':idade', $idade, PDO::PARAM_STR);
						$sql_inserir->bindValue(':comentario', $comentario, PDO::PARAM_STR);
						$sql_inserir->execute();
				
						echo"<script>alert('Obrigado, Assinatura Concluída!')</script>";
						echo"<script>loginsuccessfully()</script>";
					}catch(PDOException $erro_cadastrar){
						echo'Erro ao Cadastrar'.$erro_cadastrar->getMessage;
					}
					
			}else{
				echo"<script>alert('Todos os campos são obrigátorios, por favor, preencha os campos para Assinar.')</script>";
				header('Location: index.php');
				//echo"<script>loginfailed()</script>";
			
			}
	    
		}else{
			//caso o registro já exista no banco de dados, apresentará esta msg
			echo"<script>alert('Desculpe, este registro já existe')</script>";
			echo"<script>loginfailed()</script>";
		}
	}   
	    
?>
  
</body>
</html>