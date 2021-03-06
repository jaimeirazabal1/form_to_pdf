<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include_once('db.php');
include_once('message.php');
//$db = new Db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EINSCHREIBEFORMULAR SAT 2017- 2018 | Formulario de inscripción SAT 2017- 2018</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/css/bootstrap.css">

	<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">

	<script type="text/javascript" src="js/moment.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.es.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#datetimepicker1').datetimepicker({
					format : 'DD-MM-YYYY'
				});
				$("form").submit(function(){
					console.log($("#file").val());
					return;
				});
			});
	</script>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="col-md-9 col-sm-9 col-xs-9 text-left">
				<h3>EINSCHREIBEFORMULAR SAT 2017- 2018</h3>
				<h4><i>Formulario de inscripción SAT 2017- 2018</i></h4>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 text-center">
				<img src="logo.jpg" alt="Logo" width="100%" style="margin-top: 20px">
			</div>
		</div>

	</div>
	<br>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">I. PERSÖNLICHE ANGABEN / <i>datos personales</i></h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="save.php" enctype="multipart/form-data">
				      <img src="foto.jpg" class="thumbnail" alt="PassFoto" onclick="$('#file').click()">
					<table class="table table-bordered">
						<tr>
							<td class="label_table"><b>Meine Schule:</b> <br> <span class="peque">Mi colegio</span></td>
							<td class="input_table" colspan="3"><input type="text" name="colegio" required class="form-control"></td>

				      
							<td class="foto_table">
								<input name="fichero_usuario" required  type="file" id="file" style="width:10px;" />
							</td>
						</tr>
						<tr>
							<td class="label_table"><b>Vollständiger Name:</b> <br> <span class="peque">Nombre completo</span></td>
							<td class="input_table" colspan="3"><input type="text" name="nombre" required class="form-control"></td>

							<td class="foto_table" ></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Klasse (heute):</b> <br> <span class="peque">Curso (hoy)</span></td>
							<td class="input_table"><input type="text" name="curso" required class="form-control"></td>
							<td class="label_table1"><b>Geschlecht:</b> <br> <span class="peque">Genero</span></td>
							<td class="input_table">
								<select name="genero" required class="form-control" id="">
									<option value="männlich">männlich</option>
									<option value="weiblich">weiblich</option>
								</select>
							</td>
							<td class="foto_table" ></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Geburtsdatum: </b> <br> <span class="peque">Fecha de nacimiento</span></td>
							<td class="input_table">
								<input type="text" class="form-control" required id="datetimepicker1" name="fechaDeNacimiento"></td>
							<td class="label_table1"><b><select name="numIdentidad" id="" required class="form-control">
								<option value="Nr. Reisepass">Nr. Reisepass</option>
								<option value="RUT">RUT</option>
							</select></b> </td>
							<td class="input_table" colspan="2"><input type="text" required class="form-control" name=numIdentidad_valor></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Nationalität(en):   </b> <br> <span class="peque">Nacionalidad(es)</span></td>
							<td class="input_table"><input type="text" required name="nacionalidad" class="form-control"></td>
							<td class="label_table1"><b>Religion: </b> <br> <span class="peque">Religión</span></td>
							<td class="input_table" colspan="2"><input type="text" required name="religion" class="form-control"></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Mail: </b> <br> <span class="peque">Mail: </span></td>
							<td class="input_table"><input type="email" name="mail" required class="form-control"></td>
							<td class="label_table1"><b>Handynummer: </b> <br> <span class="peque">Celular</span></td>
							<td>
								<select name="celular_code" id="" required class="form-control">
									<option value="+56">+56</option>
									<option value="+49">+49</option>
									<option value="+43">+43</option>
								</select>
							</td>
							<td class="input_table" colspan="2"><input type="text" required name="celular" class="form-control"></td>

						</tr>
						<tr>
							<td class="label_table1"><b>Ich rauche: </b> <br> <span class="peque">Yo fumo</span></td>
							<td class="input_table">
								<select name="fuma" id="" required class="form-control">
									<option value="ja">JA</option>
									<option value="nein">NEIN</option>
								</select>
							</td>
							<td class="label_table1"><b>T-Shirt-Größe:  </b> <br> <span class="peque">Talla polera</span></td>
							<td class="input_table" colspan="2">
								<select name="tallapolera" id="" required class="form-control">
									<option value="s">S</option>
									<option value="m">M</option>
									<option value="l">L</option>
									<option value="xl">XL</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Adresse: </b> <br> <span class="peque">Dirección</span></td>
							<td class="input_table"><input type="text" required class="form-control" name="direccion"></td>
							<td class="label_table1"><b>Festnetznummer: </b> <br> <span class="peque">Teléfono fijo</span></td>
							<td class="input_table" colspan="2"><input type="text" required name="telefonofijo" class="form-control"></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Ich wohne mit: </b> <br> <span class="peque">Yo vivo con</span></td>
							<td class="input_table">
								<select name="vivocon" id="" required class="form-control">
									<option value="Eltern">Eltern</option>
									<option value="Mutter">Mutter</option>
									<option value="Vater">Vater</option>
									<option value="Anderes">Anderes</option>
								</select>
							</td>
							<td class="label_table1"><b>Fremdsprachenniveau: </b> <br> <span class="peque">Nivel del idioma extranjera  </span></td>
							<td class="input_table">
								<select name="nivelidioma" required id="" class="form-control">
									<option value="Deutsch">Deutsch</option>
									<option value="Spanisch ">Spanisch </option>
								</select>
							</td>
							<td>
								<input type="text" name="nivelidioma2" required class="form-control">
							</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Hobbys</b> <br> <span class="peque">Hobbies</span></td>
							<td class="input_table" colspan="4">
								<textarea name="hobbys" required class="form-control" id=""></textarea>
							</td>
						</tr>	
						<tr>
							<td class="label_table1"><b>Sonstige Bemerkungen* </b> <br> <span class="peque">Otros antecedentes importantes </span></td>
							<td class="input_table" colspan="4">
								<textarea name="otrosAntecedentes" required class="form-control" id=""></textarea>
								<p class="peque">Angaben zu chronischen und psychischen Krankheiten, Essgewohnheiten etc . (en cuánto a enfermedades crónicas, trastorno pscicologico, hábitos alimenticios etc.)</p>
							</td>
						</tr>	
					</table>
			</div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">II.  ANGABEN ÜBER ELTERN / <i>datos de padres</i></h3>
		  </div>
		  <div class="panel-body">
				<table class="table table-bordered">
					<tr>
						<td class="label_table2"><b>Nach- und Vorname des Vaters: </b> <br> <span class="peque">Apellidos y nombre padre    </span></td>
						<td class="input_table " colspan="2" ><input type="text" required class="form-control" name="nombrePadre"></td>
						<td class="label_table text-right" ><b>Alter:  </b> <br> <span class="peque">Edad</span></td>
						<td class="input_table1" ><input type="text" required name="edadPadre" class="form-control"></td>

					</tr>
					<tr>
						<td class="label_table"><b>Mail:  </b> <br> <span class="peque">Mail</span></td>
						<td class="input_table" ><input type="email" required name="mailPadre" class="form-control"></td>
							<td class="label_table1 text-right"><b>Handy: </b> <br> <span class="peque">Celular</span></td>
							<td>
								<select name="celularPadre_code" id="" required class="form-control">
									<option value="+56">+56</option>
									<option value="+49">+49</option>
									<option value="+43">+43</option>
								</select>
							</td>
							<td class="input_table" colspan="2"><input type="text" required name="celularPadre" class="form-control"></td>

					</tr>
					<tr>
						<td class="label_table2"><b>Nach- und Vorname der Mutter: </b> <br> <span class="peque">Apellidos y nombre madre    </span></td>
						<td class="input_table " colspan="2" ><input type="text" required name="nombreMadre" class="form-control"></td>
						<td class="label_table text-right" ><b>Alter:  </b> <br> <span class="peque">Edad</span></td>
						<td class="input_table1" ><input type="text" required class="form-control" name="edadMadre"></td>

					</tr>
					<tr>
						<td class="label_table"><b>Mail:  </b> <br> <span class="peque">Mail</span></td>
						<td class="input_table" ><input type="email" required class="form-control" name="mailMadre"></td>
							<td class="label_table1 text-right"><b>Handy: </b> <br> <span class="peque">Celular</span></td>
							<td>
								<select name="celularMadre_code" id="" required class="form-control">
									<option value="+56">+56</option>
									<option value="+49">+49</option>
									<option value="+43">+43</option>
								</select>
							</td>
							<td class="input_table" colspan="2"><input type="text" required name="celularMadre" class="form-control"></td>

					</tr>
				</table>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">III. SONSTIGES / <i>otros</i></h3>
		  </div>
		  <div class="panel-body">
				<table class="table table-bordered">
					<tr>
						<td class="label_table2"><b>Ich habe Verwandte im Gastland: </b> <br> <span class="peque">Tengo parientes en el país anfitrión</span></td>
						<td class="input_table " colspan="3" >
							<select name="tengoParientes" class="form-control" id="">
								<option value="ja">Ja</option>
								<option value="Nein">Nein</option>
							</select>
						</td>

					</tr>
					<tr>
						<td class="label_table3"><b>Ich habe schon eine Gastfamilie (Name, Adresse, Mail): </b> <br> <span class="peque">Ya tengo familia anfitriona (Nombre, dirección, mail)</span></td>
						<td class="input_table " colspan="2" >
							<select name="tengoAfitriones" class="form-control" id="">
								<option value="ja">Ja</option>
								<option value="Nein">Nein</option>
							</select>
						</td>
						<td>
							<input type="text" name="nombreAnfitrion" class="form-control">
						</td>
					</tr>					
				</table>
		  </div>
		</div>
		<input type="submit" value="Crear" class="btn btn-success btn-block btn-lg">
		<br><br>
	</div>
	</form>

</body>
</html>