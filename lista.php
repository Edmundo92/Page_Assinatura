<?php
	include_once("config.php");
	include("barra_de_progresso.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lista</title>
		<link rel="stylesheet" href="css/lista.css" rel="stylesheet" />
		<script src="js/jquery-1.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	
        <?php
	  include ("header.php");
    ?>	

    <section id="secao1">

		<div class="barra">
		<h3>Petição Online ( Abaixo Assinado )</h3>

		<div class="outter">
		<div class="end"><?php echo "$percent %"; ?></div>
		</div>
		</div>
		<!-- new -->

		<div class="campo_lista">
				
			<div class="container theme-showcase" role="main">
					
				<div class="row">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Nome</th>
									<th>País</th>
									<th>Condição</th>
									<th>Msg</th>
								</tr>
							</thead>
							<tbody>
								<?php
				 
									$listar = $pdo->prepare("SELECT * FROM dados");
									$listar->execute();
									while($dado = $listar->fetch(PDO::FETCH_ASSOC)){
				
								?>
								<tr>
									<td><?php echo $dado['id']; ?></td>
									<td><?php echo $dado['nome']; ?></td>
									<td><?php  echo $dado["pais"]; ?></td>
									<td><?php  echo $dado["idade"]; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $dado['id']; ?>">Visualizar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $dado['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $dado['nome']; ?></h4>
											</div>
											<div class="modal-body" style="word-wrap: break-word;">
												<p>
													<?php 
														   
														if(!empty($dado['comentario'])){
															echo $dado['comentario'];
														}else{
															echo "Não Tem Comentário"; 
														}												   
													?>
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>		
			</div>	
		    <!-- fim new -->
		</div>


    </section>
    
	<?php
        include ("rodape.php");
    ?>
    </body>
</html>