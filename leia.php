<!--<?php
  include("config.php");
?>-->
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Leitura</title>

</head>
<body>

    <?php
	  include ("header.php");
    ?>	

	
<section id="secao1">
	
	<div class="leitura">
	    <div style="padding: 10px; width:880px; height:auto; border: 0px solid red; margin: 35px auto;"> 
		  
		  <p class="paragraf">Educação é um catalisador e, portanto, fator determinante no desenvolvimento de qualquer nação. 
	       A educação é a principal ferramenta para capacitar o capital humano qualificado, cada vez mais necessário, na era atual. 
	      Sem qualificação é, praticamente, impossível a uma nação se manter e competir na era do conhecimento.
          </p>
		  
		  <h4 style="margin-bottom: 5px;">O que é capital humano ?</h4>
		  <p class="paragraf">
			Capital humano é o conjunto de capacidades, conhecimentos, competências e atributos de personalidade que favorecem a realização de trabalho
			de modo a produzir valor econômico. São os atributos adquiridos por um trabalhador por meio da educação, perícia e experiência.
		  </p>
		  
		  <p class="paragraf" >O "capital humano" (capital incorporado aos seres humanos, especialmente na forma de saúde e educação) seria o componente explicativo fundamental
		  do desenvolvimento econômico desigual entre países. Entretanto, a idéia de aplicar o conceito de "capital" a seres humanos, no sentido de transformar
		  pessoas em capital para as empresas.
		  </p>
          
		  <p class="paragraf">Alguns teóricos contemporâneos do crescimento consideram o capital humano como um importante fator de crescimento econômico. 
		  Pesquisas recentes têm apontado também a sua importância para o bem-estar econômico das pessoas.
		  </p>
		  
		  <h4 style="margin-bottom: 5px;"> Quanto mais riquezas naturais têm um país, maior o potencial de crescimento, certo? Nem sempre é assim.</h4>
		  <p class="paragraf">
		  Um levantamento feito pela Organização Para Cooperação e Desenvolvimento Econômico, a OCDE, mostra que na maioria das vezes o que acontece é 
		  exatamente o oposto. É o caso de Taiwan, diz Andreas Schleicher, chefe da área de rankings de educação da OCDE no mundo e responsável pelo estudo. 
		  Esse país, diz ele, tem que importar até areia, mas apostou na educação para crescer.
         <span style="color: black; font-weight: bold;">“Eles sabem que o único caminho para gerar riqueza é investir nas pessoas. Você não tem como extrair do solo, mas pode extrair da inteligência."</span> 
		 E esse padrão se repete em vários outros países que não têm muitos recursos naturais, mas têm programas fortes de educação”, explica Andreas.
		  </p>
		  
		  <h4 style="margin-bottom: 5px;">Países com poucos recursos naturais investem mais em educação</h4>
		  <p class="paragraf">
		  De acordo com a teoria do crescimento endogeno, o capital humano é a chave para entender o desenvolvimento das nações. 
		  Além de investir no capital físico, os paises devem investir em educação , treinamento de trabalhadores , geração de conhecimentos 
		  técnicos e P&D(pesquisa e desenvolvimento) para gera crescimento economico.
          Todos os países deveriam dar mais valor a educação, realmente é de valor inestimável e de suma importância que preparemos nossos jovens para o futuro.
		  </p>
		  <span style="text-transform: uppercase; color: black; font-size:15px; font-weight: bold;">
		    Desenvolvimento se faz com conhecimento, com profissionais qualificados e isso requer um pilar que é a educação
		  </span>
		  <p class="paragraf">
            <p style="color: black; font-weight: bold; text-align: center; font-size:18px;">Referências</p>
            <a href="https://endeavor.org.br/capital-humano/" target="_blank">https://endeavor.org.br/capital-humano/</a><br/>
            <a href="http://www.drmoney.com.br/economia/capital-humano-o-maior-gargalo-de-infra-estrutura/" target="_blank">http://www.drmoney.com.br</a><br/>
            <a href="http://br.monografias.com/trabalhos3/capital-humano-bem-recurso/capital-humano-bem-recurso2.shtml" target="_blank">http://br.monografias.com</a><br/>
            <a href="https://pt.wikipedia.org/wiki/Capital_humano" target="_blank">https://pt.wikipedia.org/wiki/Capital_humano</a><br/>
			<a href="http://g1.globo.com/jornal-nacional/noticia/2012/05/paises-com-poucos-recursos-naturais-investem-mais-em-educacao.html" target="_blank">http://g1.globo.com/jornal-nacional/</a>
		  </p>
	    </div>
    </div>

	<div class="num_paises">
	    <p style="color: black; font-weight: bold; text-align: center;">Número de Assinaturas por País</p>
	    <!--<?php
          
		  $br = "Brasil";
		  $An = "Angola";
		  $Cb = "Cuba";
          $Pt = "Portugal";
		  
		  $cont = 0;
		  $Cbcont = 0;
		  $Ptcont = 0;
		  $Ancont = 0;
		  $outros = 0;
		 
		  $listar = $pdo->prepare("SELECT pais FROM assinatura");
          $listar->execute();
            while($dado = $listar->fetch(PDO::FETCH_ASSOC)){
    	       
			   $dado = ucwords(strtolower($dado["pais"]));
		        if($dado == $br){
			        $cont ++;
		        }
		        else if($dado == $An){
			        $Ancont ++;
		        }
				else if($dado == $Cb){
			        $Cbcont ++;
		        }
				else if($dado == $Pt){
			        $Ptcont ++;
		        }else{
					$outros++;
				}
		 
		    }
		

		
        ?>
		<p>Angola  &nbsp;&nbsp;&nbsp;> <?php echo "$Ancont assinaturas"; ?></p>
		<p>Brasil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;><?php echo "&nbsp;&nbsp;$cont assinaturas"; ?></p>
	    <p>Cuba  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp; <?php echo "$Cbcont assinaturas"; ?></p>
		<p>Portugal  >&nbsp; <?php echo "$Ptcont assinaturas"; ?></p>
		<p>Outros  &nbsp;&nbsp;>&nbsp; <?php echo "$outros assinaturas"; ?></p> -->
    </div>
	
</section>

    <?php
        include ("rodape.php");
    ?>
</body>
</html>