<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- 
		
  INFO!!!
  This page was initially developed to fullfil one of the challenges proposed by Free Code Camp (https://www.freecodecamp.com)
  Code by Ronie Meque
  Available on https://github.com/roniemeque/SitePessoal 
  You are free to edit and share as long as give the proper credits (at least mention under the hood)

  Resources used that are NOT mine:
  Bootstrap; Jquery; Waypoints; Smooth Scroll function by css-tricks.com;

	-->
	<title>Fernando Se Castro</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#000000">

 	<meta name="msapplication-navbutton-color" content="#000000">

	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="container-fluid">
	        <div class="navbar-header"><a class="navbar-brand" href="#"></a>
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
	            </button>
	        </div>
	        <div class="collapse navbar-collapse navbar-menubuilder">
	            <ul class="nav navbar-nav navbar-left">
	                <li><a href="#about" class="nava">Sobre</a>
	                </li>
	                <li><a href="#portfolio" class="nava">Portfólio</a>
	                </li>
	                <li><a href="#contact" class="nava">Contato</a>
	                </li>
	                <li> <a href="http://p.pw/baj2Bj" target="_blank" class="nava">Link</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	</div>
	<div class="clearfix"></div>

	<div class="header" id="header">
		<div class="container">
			<h1 class="center-block">Fernando Se Castro</h1>
			<h2 class="center-block" id="wp1">Sou desenvolvedor e apaixonado por tecnologia. Saiba mais <a href="#about">sobre</a> mim.</h2>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="about" id="about">
		<div class="container">
			<h1>Sobre</h1>
			<p>Mauris ac velit efficitur, egestas felis et, sodales ligula. Phasellus id eleifend nibh, imperdiet finibus mi. Maecenas ut purus metus. Nulla mauris neque, sollicitudin consequat diam at, suscipit convallis ante. Proin faucibus porta laoreet. In dictum lacus vel dolor euismod, vel placerat nulla ullamcorper. Aenean eget dui eget ex ultrices venenatis id sodales quam. Nam vestibulum turpis sit amet tortor lacinia feugiat. Praesent nisi nibh, placerat sed nunc sodales, pulvinar consectetur odio. Aliquam quis congue ante. Etiam eget purus quis ante gravida sollicitudin. Integer massa diam, efficitur ut luctus rhoncus, dictum vitae est. Curabitur luctus consectetur mauris ac viverra.</p>
		</div>
	</div>
	<div class="clearfix"></div>	

	<div class="portfolio" id="portfolio">
		<div class="container">
			<h1>Portfólio</h1>
			<h2>Monte de nadas aqui</h2>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="contact" id="contact">
		<div class="container">
			<h1>Contato</h1>
			<h2>Formzinho maneiro aqui</h2>

		</div>
	</div>
	<div class="clearfix"></div>

	<div class="footer" id="footer">
		<div class="container">
			<h1>Rodapé</h1>
			<div class="footercontact">
				<span>Ronie Eduardo Meque</span>
				<ul>
					<li><a href="https://www.facebook.com/roniemeque"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://github.com/roniemeque/"><i class="fa fa-github"></i></a></li>
					<li><a href="https://br.linkedin.com/in/ronie-eduardo-meque-52389665"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>


	<div class="gotop">
		<a href="#header" id="gotopa">
			<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
			Topo
		</a>
	</div>
	<div class="sobresite" id="sobresite">
		<div class="container">
			<p>
				  INFO!!!<br><br>
  				Essa página foi inicialmente desenvolvida para completar um dos desafios propostos em Free Code Camp (https://www.freecodecamp.com)<br>
				  Código por Ronie Meque<br>
				  Disponível em: https://github.com/roniemeque/SitePessoal <br>
				  Você é livre para editar e compartilhar esse código contato que dê os devidos créditos (pelo menos por baixo do capô de seu código)<br>

				  Recursos utilizados que NÃO são de minha propriedade:
				  Bootstrap; Jquery; Waypoints; Smooth Scroll function by css-tricks.com; Font Awesome;
			</p>
			<p>
				This page was initially developed to fullfil one of the challenges proposed by Free Code Camp (https://www.freecodecamp.com)<br>
			  Code by Ronie Meque<br>
			  Available on: https://github.com/roniemeque/SitePessoal <br>
			  You are free to edit and share as long as give the proper credits (at least mention under the hood)<br>

			  Resources used that are NOT mine:
			  Bootstrap; Jquery; Waypoints; Smooth Scroll function by css-tricks.com; Font Awesome;
  
			</p>
			<button class="btn btn-primary" id="toggleinfooff"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button>
		</div>
	</div>
	


	<div class="progress">
	  <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="pgbar">
	  </div>
	</div>

	<!--<div class="container-fluid progressbottom">
		<progress class="progress progress-striped progress-animated" value="0" max="100" id="pgbar"></progress>
	</div>-->

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/bootstrap/js/transition.js"></script>
	<script src="bower_components/bootstrap/js/collapse.js"></script>
	<script src="bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>