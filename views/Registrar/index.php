<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#nutriologo" role="tab">Nutriólogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#paciente" role="tab">Paciente</a>
      </li>
    </ul>

      <div class="tab-content">

            <?php include("../Registrar/Nutriologo.php"); ?>

      </div>

      <div class="tab-pane" id="paciente" role="tabpanel">

          <?php include("../Registrar/Paciente.php"); ?>

      </div>
    </div>

    <script type="text/javascript">
    function saveNutriologo() {
      var xhr = new XMLHttpRequest();
      var url = '../../controllers/Nutriologo.php';
      xhr.open('POST', url, true);
                  var data = new FormData();
                  var nombre = document.querySelector("#nombreNutriologo").value;
                  var apellidos = document.querySelector("#apellidosNutriologo").value;
                  var matricula = document.querySelector("#matriculaNutriologo").value;
                  var usuario = document.querySelector("#usuarioNutriologo").value;
                  var contrasena = document.querySelector("#contrasenaNutriologo").value;
                  data.append('nombre', nombre);
                  data.append('apellidos', apellidos);
                  data.append('matricula', matricula);
                  data.append('usuario', usuario);
                  data.append('contrasena', contrasena);
                  data.append('action', "create");
                  xhr.addEventListener('loadend', function() {
                       console.log("Petición realizada");
                  });
                  xhr.send(data);
    }

    function savePaciente() {
      var xhr = new XMLHttpRequest();
      var url = '../../controllers/Paciente.php';
      xhr.open('POST', url, true);
                  var data = new FormData();
                  var nombre = document.querySelector("#nombrePaciente").value;
                  var apellidos = document.querySelector("#apellidosPaciente").value;
                  var edad = document.querySelector("#edadPaciente").value;
                  var usuario = document.querySelector("#usuarioPaciente").value;
                  var contrasena = document.querySelector("#contrasenaPaciente").value;
                  data.append('nombre', nombre);
                  data.append('apellidos', apellidos);
                  data.append('edad', edad);
                  data.append('usuario', usuario);
                  data.append('contrasena', contrasena);
                  data.append('action', "index");
                  xhr.addEventListener('loadend', function() {
                       console.log("Petición realizada");
                  });
                  xhr.send(data);
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
