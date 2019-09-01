<?php
	session_start();
	if($_SESSION["valido"] == "JAOR"){
		include("crud_BD.php");
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="utf-8">
<title>Demo-CRUD</title>
<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="../fontAwesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../js/confirm/jquery-confirm.min.css">
<link rel="stylesheet" type="text/css" href="../js/validetta101/validetta.min.css">
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../js/confirm/jquery-confirm.min.js"></script>
<script src="../js/validetta101/validetta.min.js"></script>
<script src="../js/validetta101/localization/validettaLang-es-ES.js"></script>
<script src="../js/crud.js"></script>
</head>

<body>
	<section id="encabezado">
    </section>
    <section id="contenidos">
    	<div class="container">
        	<a href="cerrarSesion.php?nombSesion=valido" class="btn blue">Cerrar Sesi&oacute;n</a> 
            <button id="nvoEst" class="btn blue">Nuevo Estudiante</button>
        	<div class="row">
            	<div class="col s12">
                	<table class="striped responsive-table">
                    	<thead>
                        	<tr><th>Boleta</th><th>Nombre</th><th>Operaciones</th>
                        </thead>
                        <tbody>
  							<div id="infoEstudiantes">
                            	<?php echo $regEst; ?>
                          	</div>                      	
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </section>
    <section id="pie">
    </section>
    
    <!-- Modals -->
    
  	<div id="modalAX" class="modal">
        <div class="modal-content">
          	<h4 class="center-align blue white-text">TWeb - 20181</h4>
          	<div id="respAX"></div>
        </div>
        <div class="modal-footer">
          	<a href="" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
        </div>
  	</div>
  
  	<div id="modalFormUpd" class="modal">
        <div class="modal-content">
          <h4 class="center-align blue white-text">TWeb - 20181</h4>
            <form id="formUpd">
            <div class="row">
              <div class="col s12 l6 input-field">
                <input type="hidden" id="boleta" name="boleta">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="primerApe">Primer Apellido</label>
                <input type="text" id="primerApe" name="primerApe" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="segundoApe">Segundo Apellido</label>
                <input type="text" id="segundoApe" name="segundoApe" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <select id="sexo" name="sexo" data-validetta="required">
                	<option value=""> -------- </option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                <label for="sexo">Sexo</label>
              </div>
              <div class="col s12 l6 input-field">
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" data-validetta="required">
              </div>
              <div class="col s12 input-field">
                <button type="submit" class="btn blue" style="width:100%;">Actualizar</button>
              </div>
            </div>
            </form>
        </div>
  	</div>
    
    <div id="modalFormIns" class="modal">
        <div class="modal-content">
          <h4 class="center-align blue white-text">TWeb - 20181</h4>
            <form id="formIns">
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="boleta">Boleta</label>
                <input type="text" id="boleta" name="boleta" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="primerApe">Primer Apellido</label>
                <input type="text" id="primerApe" name="primerApe" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="segundoApe">Segundo Apellido</label>
                <input type="text" id="segundoApe" name="segundoApe" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <select id="sexo" name="sexo" data-validetta="required">
                	<option value=""> -------- </option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                <label for="sexo">Sexo</label>
              </div>
              <div class="col s12 l6 input-field">
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" data-validetta="required">
              </div>
              <div class="col s12 input-field">
                <button type="submit" class="btn blue" style="width:100%;">Insertar</button>
              </div>
            </div>
            </form>
        </div>
  	</div>
</body>
</html>
<?php
	}else{
		header("location:../index.php");
	}
?>