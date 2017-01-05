<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro Voluntarios</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheets/styles.css">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Voluntarios</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container voluntarios">
      <h2>Registro de Voluntarios</h2>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVoluntarios">Agregar Voluntario</button>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Teléfono</th>
            <th>Edad</th>
          </tr>
        </thead>
        <tbody>
          
          <?php 
            $hotsdb = "localhost";    // sera el valor de nuestra BD
            $basededatos = "voluntarios";    // sera el valor de nuestra BD

            $usuariodb = "root";    // sera el valor de nuestra BD
            $clavedb = "";    // sera el valor de nuestra BD

            $tabla_db1 = "voluntarios";    // sera el valor de una tabla
            

        // Fin de los parametros a configurar para la conexion de la base de datos

            $conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb")
            or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
            $db = mysql_select_db("$basededatos", $conexion_db)
            or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");

              $query = "select * from $tabla_db1";     // Esta linea hace la consulta
              $result = mysql_query($query); 

              while ($registro = mysql_fetch_array($result)){ 
          echo " 
              <tr> 
                <td scope='row'>".$registro['id']."</td> 
                <td>".$registro['nombre']."</td> 
                <td>".$registro['ciudad']."</td> 
                <td>".$registro['telefono']."</td> 
                <td>".$registro['edad']."</td> 

              </tr> 
          "; 
          } 
          mysql_close($conexion_db);
          ?>  

          <!--
          <tr>
            <th scope="row">1</th>
            <td>Juan Perez</td>
            <td>Guayaquil</td>
            <td>0987961212</td>
            <td>31</td>
          </tr>

            -->
        </tbody>
      </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalVoluntarios" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="post" action="procesar-registro.php">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Ingresar Voluntario</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <select name="ciudad">
                    <option value="Guayaquil">Guayaquil</option>
                    <option value="Quito">Quito</option>
                    <option value="Cuenca">Cuenca</option>
                    <option value="Manta">Manta</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <input type="number" min="0" class="form-control" id="inputEdad" name="inputEdad" placeholder="Edad">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>