<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Fernando Desenvolvedor WEB</title>
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
	                <li><a href="http://p.pw/baj2BF"  target="_blank" class="nava">Link para contrubir.</a></li>
	            </ul>
	        </div>
	    </div>
	</div>
	<div class="clearfix"></div>

	<div class="header" id="header">
		<div class="container">
			<h1 class="center-block">Fernando Sé Castro</h1>
			<h2 class="center-block" id="wp1">Sou desenvolvedor WEB. Saiba mais <a href="#about">sobre</a> mim.</h2>
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
				<span>Fernando Sé Castro</span>
				<ul>
					<li><a href="https://www.facebook.com/FernandoSeCastro"  target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://github.com/fernandosecastro/"  target="_blank"><i class="fa fa-github"></i></a></li>
					<li><a href="https://www.linkedin.com/in/fernando-sé-castro-92bb09b8"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
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

	<div style="position:fixed; bottom:100px;left:20px;">
		<h3 style= " color:red; background:#fff;border: solid 2px red; font-size:12px;" id="debugger">00</h3>
		<button class="btn btn-danger" id="toggleinfoon">Informações</button>
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