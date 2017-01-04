<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test App</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheets/styles.css">
  </head>

  <body>
	<div class="container login-form">
		<h2 class="login-title"><?php echo'- Ingresando al Sistema -'?></h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" action="procesar-login.php">
					<div class="input-group login-userinput">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input name="inputEmail" id="inputEmail" type="text" class="form-control" placeholder="Usuario">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input name="inputPassword"  id="inputPassword" type="password" class="form-control" placeholder="Contraseña">
						<span id="showPassword" class="input-group-btn">
	            			<button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
	          			</span>  
					</div>
					<button class="btn btn-primary btn-block login-button" type="submit"><i class="fa fa-sign-in"></i> Login</button>
					<div class="checkbox login-options">
						<label><input type="checkbox"/> Recordarme</label>
						<a href="#" class="login-forgot">Olvido su contraseña?</a>
					</div>		
				</form>			
			</div>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="javascripts/script.js"></script>
  </body>
</html>
