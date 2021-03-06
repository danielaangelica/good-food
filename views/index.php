<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
<!-- <?php //include("parciales/header.php"); ?> -->
	<main class="card">
		<img class="card-img-top col-lg-6 offset-lg-3" src="../views/Imagenes/login.jpg" style="height: 300px; width: 600px;">
		<section class="card-block" style="text-align: center; top:50px;">
			<div class="col col-lg-6 offset-lg-3">
				<h5 class="card-title">¡Bienvenido!</h5>
				<button type="button" class="btn btn-outline-primary"onclick="loginNutriologo()">Nutriólogo</button>
				<br><br>
				<button type="button" class="btn btn-outline-warning" onclick="loginPaciente()">Paciente</button><br>
				<label>¿No estás registrado?</label>
				<a href="../views/Registrar/">Registrarme</a>
			</div>
		</section>
	</main>


	<script type="text/javascript">
		function loginNutriologo(){
			window.location.href="../views/Login/NutriologoLogin.php"
		}

		function loginPaciente(){
			window.location.href="../views/Login/UsuarioLogin.php"
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
