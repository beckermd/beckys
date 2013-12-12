<!DOCTYPE html>
<?php
$pageName='indexVs2.php';
include "connection.php";
include "Encabezado.html";

?>

			<div class="panel-body">      <!-- Para cambiar la posicion del cuadro utilice el archivo bootstrp-theme.css en el "panel-body" container:after{clear:both}.row{margin-right:-15px;margin-left:15px}.-->

				<h1>Recetas</h1>
				<img src="img/milanesas.jpg" alt="Facebook page" width=360
					height=340 class="img-thumbnail" />
				<div class="col-lg-4 well">
					<ul>
						<li class="list-group-item"><span class="badge">12</span>
							<h3>Ensaladas</h3></li>
						<li class="list-group-item"><span class="badge">5</span>
							<h3>
								<i>Platos Calientes</i>
							</h3></li>
						<li class="list-group-item"><span class="badge">12</span>
							<h3>Apettizer</h3></li>
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

	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</html>
<?php

include "PiedePagina.html";
?>