

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="public/css/Styles.css" rel='stylesheet' type='text/css' />
   <link href="public/css/font-awesome.css" rel="stylesheet"> 
   

</head>
<body>


	<form action="login.php" class="login-form" method="post">
        <div class="titulo">
            <h2> INICIAR SESIÓN</h2>
        </div>

        <div class="form_input">
            <input  type="text" class="user"  name="username" placeholder=" Usuario">
        </div>

        <div class="form_input2">
            <input  type="password"  name="password" placeholder="Password">
        </div>
        <div class="boton">
            <input type="submit" name="submit" value="INGRESAR" class="login-form_button">
        </div>


        <a href="#">¿Olvidaste tu contraseña?</a>

	</form>
</body>
</html>