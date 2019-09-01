<?php

?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="utf-8">
<title>Acceso</title>
<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="js/validetta101/validetta.min.css">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/validetta101/validetta.min.js"></script>
<script src="js/validetta101/localization/validettaLang-es-ES.js"></script>
<script src="js/index.js"></script>
</head>

<body>
	<section id="encabezado">
    </section>
    <section id="contenidos">
    	<div class="container">
        	<div class="row">
            	<form id="formAcc">
            	<div class="col s12 l4 input-field">
                	<label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" data-validetta="required">
                </div>
                <div class="col s12 l4 input-field">
                	<label for="contrasena">Contrase&ntilde;a</label>
                    <input type="password" id="contrasena" name="contrasena" data-validetta="required">
                </div>
                <div class="col s12 l4 input-field">
                	<button type="submit" class="btn blue" style="width:100%;">Entrar</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <section id="pie">
    </section>
</body>
</html>