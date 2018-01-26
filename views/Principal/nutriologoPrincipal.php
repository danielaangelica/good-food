<?php
	//include_once("../../controllers/Nutriologo.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
	<main>
    <?php include("../parciales/headerprincipal.php"); ?>
		<div class="container">
			<div class="row">
				<!--?php
				foreach ($productos as $producto) {?-->
					<article class="card col-xs-12 col-sm-12 col-md-4 col-ig-3">
						<header>
							<h4> Nombre de dieta:</h4>
							<small> Nutriólogo: <!--?php echo $producto['precio']; ?--> </small>
						</header>
						<div class="card-body">
							<h6>Duración en días:</h6><!--?php echo $producto['descripcion'];?-->
              <p>Descripción:</p>
						</div>
            <button type="button" id="modificarDieta" class="btn btn-success">Modificar</button>
            <button type="button" id="eliminarDieta" class="btn btn-danger">Eliminar</button>
					</article>
				<!--?php } ?-->
        <button type="button" id="btnAgregar" class="btn col-lg-4" style="font-size:100px;">+</button>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
