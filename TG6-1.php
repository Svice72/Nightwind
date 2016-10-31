<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Tarea Guia6-01</title>
	<!--AGREGAMOS LA RUTA DEL ESTILO CSS PARA LOS FORMULARIOS-->
</head>
<body>
	<center>
	<form method="POST">
		<table style="width: 60%;" border="1">
			<tr>
				<td colspan="2" style="text-align: center"><b><h2>INGRESAR AL SISTEMA</h2></b></td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>DUI:</label>
				</th>
				<td width="25%">
					<p class="campo">
						<input type="text" name="dui">
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>NIT:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="nit">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Primer Apellido:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="surname1">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Segundo Apellido:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="surname2">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Nombres:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="names">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Conocido por:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="aka">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Fecha de Nacimiento:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="bdate">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Ciudad de Nacimiento:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="bplace">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Profesion:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="pro">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>
			<tr>
				<th width="50%" class="campo" style="text-align: left">
					<label>Edad:</label>
				</th>
				<td width="50%">
					<p class="campo">
						<input type="text" name="edad">
						<i class="icon-lock"></i>
					</p>
				</td>
			</tr>

			<tr>
				<td class="controles" colspan="2" style="text-align: center">
					<input type="submit" value="Enviar" />
					<button type="button" class="clean" onclick="javascript:location.href='./TG6-1.php'">LIMPIAR</button>
				</td>
			</tr>
		</table>
		
	</form>
	<img src="img/git.png">
</body>

<?php 
	
	$patron1 = '/^\d{8}-[0-9]{1}$/';//validar DUI
	$patron2 = '/^[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}$/';//validar NIT
	$patron3 = '/^[a-zA-Z]+$/i';//permitir letras mayusculas y minusculas
	$patron4 = '/^[a-zA-Z]+(\s*[a-zA-Z]*)+$/';//permitir letras mayusculas y minusculas con espacios
	$patron5 = '/^[1-9]{1,2}-[1-9]{1,2}-[1980-2016]{4}$/';//fecha de nacimiento
	$patron6 = '/^[0-9]{2}$/';//validar edad	
	
	if (count($_POST)>0) {
		if(preg_match($patron1, $_POST['dui'])):
			echo '<font color="green"><b>1- El DUI: '.$_POST['dui'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- El DUI: '.$_POST['dui'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron2, $_POST['nit'])):
			echo '<font color="green"><b>1- El NIT: '.$_POST['nit'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- El NIT: '.$_POST['nit'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron3, $_POST['surname1'])):
			echo '<font color="green"><b>1- El Primer Apellido: '.$_POST['surname1'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- El Primer Apellido: '.$_POST['surname1'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron3, $_POST['surname2'])):
			echo '<font color="green"><b>1- El Segundo Apellido: '.$_POST['surname2'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- El Segundo Apellido: '.$_POST['surname2'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron4, $_POST['names'])):
			echo '<font color="green"><b>1- Los Nombres: '.$_POST['names'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- Los Nombres: '.$_POST['names'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron3, $_POST['aka'])):
			echo '<font color="green"><b>1- El Conocido por: '.$_POST['aka'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- El Conocido por: '.$_POST['aka'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron5, $_POST['bdate'])):
			echo '<font color="green"><b>1- La Fecha: '.$_POST['bdate'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- La Fecha: '.$_POST['bdate'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron4, $_POST['bplace'])):
			echo '<font color="green"><b>1- El Lugar: '.$_POST['bplace'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- El Lugar: '.$_POST['bplace'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron4, $_POST['pro'])):
			echo '<font color="green"><b>1- La Profesion: '.$_POST['pro'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- La Profesion: '.$_POST['pro'].' es incorrecto</b></font><br>';
		endif;

		if(preg_match($patron6, $_POST['edad'])):
			echo '<font color="green"><b>1- La Edad: '.$_POST['edad'].' es correcto con la validaci&oacute;n</b></font><br>';
		else:
			echo '<font color="red"><b>1- La Edad: '.$_POST['edad'].' es incorrecto</b></font><br>';
		endif;
	}
 ?>
</center>
</html>