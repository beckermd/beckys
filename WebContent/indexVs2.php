<!DOCTYPE html>
<?php
$_picture= array( "img/soja.jpg",
				  "img/diseniadora.jpg", 
				  "img/logodorado.jpg");
include "connection.php";

?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>"Milanesas de Soja Becky's"</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background: #FFFFFF">
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id))
				return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="container" id="container">
		<div class="page-header" id="banner">
			<div class="row">
				<div class="col-lg-6">
					<div class="bsa well">
						<div id="bsap_1277971" class="bsap_1277971 bsap">
							<div class="bsa_it one">
								<div class="bsa_it_ad ad1 odd" id="bsa_2634550">
									<img src="img/logo.jpg" width=100 height=100></img>
									<div style="clear: both"></div>
									<h1>Milanesas Becky's</h1>
									<h5>
										<b>100% Caseras, libres de conservantes</b>
									</h5>
									<div class="g-plusone" data-size="medium"
										data-annotation="none" data-width="300"></div>
									<script type="text/javascript">
										(function() {
											var po = document
													.createElement('script');
											po.type = 'text/javascript';
											po.async = true;
											po.src = 'https://apis.google.com/js/plusone.js';
											var s = document
													.getElementsByTagName('script')[0];
											s.parentNode.insertBefore(po, s);
										})();
									</script>
									<!-- Botones de likes de pinterest y google + FACEBOOK aun no funciona (Nov-2013) -->
									<div class="fb-like"
										data-href="http://localhost:8080/eclipse/workspace/beckys/webcontent/indexVs2.php"
										data-width="500" data-layout="button_count" data-action="like"
										data-show-faces="false" data-share="true"></div>
									<a
										href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Flocalhost%3A8080%2Feclipse%2Fworkspace%2Fbeckys%2Fwebcontent%2FindexVs2.php&media=http%3A%2F%2Flocalhost%3A8080%2Feclipse%2Fworkspace%2Fbeckys%2Fwebcontent%2Fimg%2Fmilanesas.jpg&description=milanesas%20de%20Soja"
										data-pin-do="buttonPin" data-pin-config="above"><img
										src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div>
			<div class="panel-body">
				<h2>Recetas</h2>
				<img src="img/milanesas.jpg" alt="Facebook page" width=360
					height=250 class="img-thumbnail" />
				<div class="col-lg-4">
					<ul>
						<li class="list-group-item"><span class="badge">12</span>
							<h4>Ensaladas</h4></li>
						<li class="list-group-item"><span class="badge">5</span>
							<h4>
								<i>Platos Calientes</i>
							</h4></li>
						<li class="list-group-item"><span class="badge">12</span>
							<h4>Apettizer</h4></li>
					</ul>
				</div>
			</div>
		</div>
		<hr />
		<form id="pedidos" action='createPedido.php' method="post">
			<div class="row show-grid">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-body">
						<div class="row">
						<div class="col-md-4">
							<h1>Pedidos</h1>
							</div>
							<div class="col-md-4 col-md-offset-4">
							 <img  src="img/pedidos.jpg" alt="220X90" style="position: TOP: 500px; LEFT: 590px; HEIGHT: 50px;"
								class="img-thumbnail"> 
								</div>
								</div>
							<div class="input-group">
								<br />
								<div class="input-group">
									<span class="input-group-addon">Simples</span><input
										type="number" class="form-control" name="Simple"
										placeholder="1Kg">
								</div>
								<br />
								<div class="input-group">
									<span class="input-group-addon">Cebolla y Queso</span><input
										type="number" class="form-control" name="CQ" placeholder="1Kg">
								</div>
								<br />
								<div class="input-group">
									<span class="input-group-addon">Jam&oacuten y Queso</span><input
										type="number" class="form-control" name="JyQ"
										placeholder="1Kg">
								</div>
								<br />
								<div class="input-group">
									<span class="input-group-addon">Tomate, Aceiutunas y
										Queso</span><input type="number" class="form-control" name="TAyQ"
										placeholder="1Kg">
								</div>
								<br />
								<div class="input-group">
									<span class="input-group-addon">Calabaza y Parmesano</span><input
										type="number" class="form-control" name="CyP"
										placeholder="1Kg">
								</div>
								<br />
								<div class="input-group">
									<span class="input-group-addon">Jam&oacuten, Queso y
										Roquefort</span><input type="number" class="form-control" name="JQyR"
										placeholder="1Kg">
										
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary">
							<div class="panel-body">
								<h1>Envio</h1>

								<div class="input-group-addon">
									<b>Nombre</b>
								</div>
								<input type="text" name="Name" placeholder="Nombre y Apellido"
									class="form-control"> <br />
								<div class="input-group-addon">
									<b>Direcci&oacuten</b>
								</div>
								<input type="text" name="Adress"
									placeholder="Calle/Num.Barrio/Ciudad" class="form-control">
								<br />
								<div class="input-group-addon">
									<b>Direcci&oacuten2</b>
								</div>
								<input type="text" name="Adress2" class="form-control"><br />
								<div class="input-group-addon">
									<b>Tel&eacutefono/e-mail</b>
								</div>
								<input type="tel" name="Phone" placeholder="22115-XXX-XXXX"
									class="form-control"> <br /> <br>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary">
							<div class="panel-body">
								<h3>Horario de Entrega</h3>
								<div>
									<img src="img/clock.gif" width=50 height=50
										class="img-thumbnail"> <br />
								</div>
								<h4>Maniana(10am-1pm)</h4>
								<input type=checkbox name="Entrega_Maniana" value="10am-1pm">
								<br />
								<h4>Tarde (1pm-6pm)</h4>
								<input type=checkbox name="Entrega_Tarde" value="1pm-6pm">
								<br />
								<h4>Noche (6pm-9pm)</h4>
								<input type=checkbox name="Entrega_Noche" value="6pm-9pm">
								<br />
							</div>
						</div>
					</div>
				<div>
					<button id="createPedido" type="submit" class="btn btn-primary btn-lg"
						style="position: absolute; TOP: 1000px; LEFT: 890px; HEIGHT: 50px">Encargar</button>
				</div>
			
			</div>
		</form>
		<br />
		<form id="Sugerencias" class="col-lg-12"
			action='CreateSugerencias.php' method="post">
			<div class="row">
				<div class="col-lg-8">
					<div class="panel panel-primary">
						<div class="panel-body">
							<h3>Sugerencias/Comentarios</h3>
							<input type="text" name="comments" class="form-control input-lg">
                                 <h4> Nombre</h4>
                            <!--Coment ario de prueba-->
                            <input type="text" name="NameSugerencia"></br>
                            <br />
							<button type="submit" class="btn btn-primary">Enviar</button>
							<br />
						</div>
					</div>
				</div>
			</div>
		</form>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel-body">
					<h2>Follow us</h2>


					<a href="https://www.facebook.com/milanesas.beckys?fref=ts"><img
						src=img/facebook.jpeg width=50 height=50> </a> <a
						href="https://twitter.com/pablobecker89"><img
						src=img/twtr.jpeg width=45 height=45> </a>
				</div>
			</div>
		</div>

	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</html>
