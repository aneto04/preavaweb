<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		#tabela{
			width: 190px;
			height: 460.2px;
			overflow:hidden;
			float: right;
			position:relative;
			top:50px;
			left:-15px;	
			text-align:center;
		}
		.backgroundtabel{
			background-image:url("_imgs/preav.png");
			width: 230px;
			height: 630px;
			overflow:hidden;
			float: right;
			position:relative;
			top:0px;
			border-radius:5px;
		}

		#up{
			cursor:pointer;
			position:relative;
			top:42px;
			right:48px;
			float:right;	
			z-index:1001;
		}
		#down{
			cursor:pointer;
			position:relative;
			float:left;
			z-index:1002;

		}
		.fotosp
		{
			width: 70px;
			height: 70px;
			margin-bottom:20px;
			margin-left:-2px;
			padding-top:10px;
			padding-bottom:10px;
			padding-left:10px;
			padding-right:10px;
			border-radius: 50%;
			background-size: 100%;
			float:left;
		}

		.namepeople
		{
			font-size: 17pt;
			position: relative;
			top: -5px;
			left: 130px;
			color: #bf673d;
			font-family: Trebuchet MS, sans-serif;
			font-weight: bold;
		}
		p{
			font-family: Trebuchet MS, sans-serif;
			position: relative;
			color: white;
			bottom: 30px;
			left: 10px;
		}
		.hr1{
			position: relative;
		    width: 145px;
		    left: -10px;
		    top: 85px;
		    z-index: 101;
		    border: none;
    		border-top: 1px solid #fe8646 ;
		}
		.hr2{
			position: relative;
    		width: 145px;
		    left: -10px;
		    bottom: 94px;
		    z-index: 101;
		    border: none;
    		border-top: 1px solid #fe8646 ;
		}
	</style>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script text="text/javascript">
		$(document).ready(function(){
    // get the number of .child elements
    var totalitems = $("#tabela .fotos").length;
    // get the height of .fotos
    var scrollval = $('.fotos').height();
    // work out the total height.
    var totalheight = (totalitems*scrollval)-($("#tabela").height());

    /*====================================Função scroll Down====================================*/
    $(document).on("click", "#down",function(){
    	var currentscrollval = $('#tabela').scrollTop();
    	$('#tabela').scrollTop(scrollval+currentscrollval);
    });
    /*=====================================Fim Função scroll Down================================*/
    /*=====================================Função scroll Up================================*/
    $(document).on("click", "#up",function(){
    	var currentscrollval = parseInt($('#tabela').scrollTop());
    	$('#tabela').scrollTop(currentscrollval-scrollval);
     });
});
	/*====================================Fim funçâo scroll Up=================================*/
	</script>
</head>
<body>
	<div>
		<hr class="hr1"><img src="imagens/seta-cima.gif" alt="" id="up">
	</div>
	<div>
		<hr class="hr2"><img src="imagens/seta_baixo.gif" alt="" id="down">
	</div>
	<div class="backgroundtabel">
		<span class="namepeople">Pessoas</span>

		<div id="tabela" class="top">
			<div class="fotos fotosp"> 
				<img src="imagens/usuarios/mirelle.jpg"  class="fotosp">
				<p>Mirele de Sousa</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/maycon.jpg"  class="fotosp">
				<p>Antonio Maycon</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/dimas.jpg" class="fotosp">
				<p>Francisco Dimas</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/isabela.jpg"  class="fotosp">
				<p>Isabela Borges</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/israel.jpg"  class="fotosp">
				<p>Israel de Oliveira</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/jaquet.jpg"  class="fotosp">
				<p>Jaqueline Mendes</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/marina.jpg"  class="fotosp">
				<p>Marina Sampaio</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/nicolas.jpg"  class="fotosp">
				<p>Ruan Nicolas</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/samuel.jpg"  class="fotosp">
				<p>Samuel</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/samuelb.jpg"  class="fotosp">
				<p>Samuel B.</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/joao.jpg" class="fotosp">
				<p>João</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/giselly.jpg" class="fotosp">
				<p>Giselly</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/fabio.jpg" class="fotosp">
				<p>Fabio</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/miguel.jpg" class="fotosp">
				<p>Miguel</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/kananda.jpg" class="fotosp">
				<p>Kananda</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/josinaldo.jpg" class="fotosp">
				<p>Josinaldo</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/anderson.jpg" class="fotosp">
				<p>Anderson</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/usuarios/gerardo.jpg" class="fotosp">
				<p>Gerardo</p>
			</div>
		</div>
	</div>
	<div>
		<hr class="hr2"><img src="imagens/seta_baixo.gif" alt="" id="down">
	</div>
</body>
</html>