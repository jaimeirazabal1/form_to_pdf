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
	<link rel="stylesheet" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="print" href="css/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" media="print" href="css/styles.css">
	<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="js/moment.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.es.min.js"></script>
	<link rel="stylesheet" href="css/css/bootstrap-datepicker.min.css">
		<script type="text/javascript">
			$(document).ready(function() {
				$('#datetimepicker1').datetimepicker({
					format : 'YYYY-MM-DD'
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
				<form class="form-horizontal">
				      <img src="foto.jpg" class="thumbnail" alt="PassFoto">
					<table class="table table-bordered">
						<tr>
							<td class="label_table"><b>Meine Schule:</b> <br> <span class="peque">Mi colegio</span></td>
							<td class="input_table" colspan="3"><input type="text" name="colegio" value="<?php echo isset($_POST['colegio']) ? $_POST['colegio'] : ''  ?>" class="form-control"></td>

							<td class="foto_table" ></td>
						</tr>
						<tr>
							<td class="label_table"><b>Vollständiger Name:</b> <br> <span class="peque">Nombre completo</span></td>
							<td class="input_table" colspan="3"><input type="text" name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''  ?>" class="form-control"></td>

							<td class="foto_table" ></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Klasse (heute):</b> <br> <span class="peque">Curso (hoy)</span></td>
							<td class="input_table"><input type="text" name="curso" value="<?php echo isset($_POST['curso']) ? $_POST['curso'] : ''  ?>" class="form-control"></td>
							<td class="label_table1"><b>Geschlecht:</b> <br> <span class="peque">Genero</span></td>
							<td class="input_table">
								<select name="genero" class="form-control" id="">
									<option value="männlich" <?php if(isset($_POST['genero']) and $_POST['genero'] == "männlich"): echo "selected"; endif; ?>>männlich</option>
									<option value="weiblich" <?php if(isset($_POST['genero']) and $_POST['genero'] == "weiblich"): echo "selected"; endif; ?>>weiblich</option>
								</select>
							</td>
							<td class="foto_table" ></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Geburtsdatum: </b> <br> <span class="peque">Fecha de nacimiento</span></td>
							<td class="input_table">
								<input type="text" class="form-control" id="datetimepicker1" name="fechaDeNacimiento"></td>
							<td class="label_table1"><b>
								<select name="numIdentidad" id="" class="form-control">
									<option value="Nr. Reisepass" <?php if(isset($_POST['numIdentidad']) and $_POST['numIdentidad'] == "Nr. Reisepass"): echo "selected"; endif; ?>>Nr. Reisepass</option>
									<option value="RUT" <?php if(isset($_POST['numIdentidad']) and $_POST['numIdentidad'] == "RUT"): echo "selected"; endif; ?>>RUT</option>
								</select></b>
							</td>
							<td class="input_table" colspan="2"><input type="text" class="form-control" value="<?php echo isset($_POST['numIdentidad_valor']) ? $_POST['numIdentidad_valor'] : ''  ?>"  name=numIdentidad_valor></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Nationalität(en):   </b> <br> <span class="peque">Nacionalidad(es)</span></td>
							<td class="input_table"><input type="text" name="nacionalidad" value="<?php echo isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : ''  ?>" class="form-control"></td>
							<td class="label_table1"><b>Religion: </b> <br> <span class="peque">Religión</span></td>
							<td class="input_table" colspan="2"><input type="text" name="religion" value="<?php echo isset($_POST['religion']) ? $_POST['religion'] : ''  ?>" class="form-control"></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Mail: </b> <br> <span class="peque">Mail: </span></td>
							<td class="input_table"><input type="text" name="mail" value="<?php echo isset($_POST['mail']) ? $_POST['mail'] : ''  ?>" class="form-control"></td>
							<td class="label_table1"><b>Handynummer: </b> <br> <span class="peque">Celular</span></td>
							<td>
								<select name="celular_code" id="" class="form-control">
									<option value="+56" <?php if(isset($_POST['celular_code']) and $_POST['celular_code'] == "+56"): echo "selected"; endif; ?>>+56</option>
									<option value="+49" <?php if(isset($_POST['celular_code']) and $_POST['celular_code'] == "+49"): echo "selected"; endif; ?>>+49</option>
									<option value="+43" <?php if(isset($_POST['celular_code']) and $_POST['celular_code'] == "+43"): echo "selected"; endif; ?>>+43</option>
								</select>
							</td>
							<td class="input_table" colspan="2"><input type="text" name="celular" value="<?php echo isset($_POST['celular']) ? $_POST['celular'] : ''  ?>" class="form-control"></td>

						</tr>
						<tr>
							<td class="label_table1"><b>Ich rauche: </b> <br> <span class="peque">Yo fumo</span></td>
							<td class="input_table">
								<select name="fuma" id="" class="form-control">
									<option value="no" <?php if(isset($_POST['fuma']) and $_POST['fuma'] == "no"): echo "selected"; endif; ?>>NO</option>
									<option value="si" <?php if(isset($_POST['fuma']) and $_POST['fuma'] == "si"): echo "selected"; endif; ?>>SI</option>
								</select>
							</td>
							<td class="label_table1"><b>T-Shirt-Größe:  </b> <br> <span class="peque">Talla polera</span></td>
							<td class="input_table" colspan="2">
								<select name="tallapolera" id="" class="form-control">
									<option value="s" <?php if(isset($_POST['tallapolera']) and $_POST['tallapolera'] == "s"): echo "selected"; endif; ?>>S</option>
									<option value="m" <?php if(isset($_POST['tallapolera']) and $_POST['tallapolera'] == "m"): echo "selected"; endif; ?>>M</option>
									<option value="l" <?php if(isset($_POST['tallapolera']) and $_POST['tallapolera'] == "l"): echo "selected"; endif; ?>>L</option>
									<option value="xl" <?php if(isset($_POST['tallapolera']) and $_POST['tallapolera'] == "xl"): echo "selected"; endif; ?>>XL</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Adresse: </b> <br> <span class="peque">Dirección</span></td>
							<td class="input_table"><input type="text" class="form-control" value="<?php echo isset($_POST['direccion']) ? $_POST['direccion'] : ''  ?>" name="direccion"></td>
							<td class="label_table1"><b>Festnetznummer: </b> <br> <span class="peque">Teléfono fijo</span></td>
							<td class="input_table" colspan="2"><input type="text" name="telefonofijo" value="<?php echo isset($_POST['telefonofijo']) ? $_POST['telefonofijo'] : ''  ?>" class="form-control"></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Ich wohne mit: </b> <br> <span class="peque">Yo vivo con</span></td>
							<td class="input_table">
								<select name="vivocon" id="" class="form-control">
									<option value="Eltern" <?php if(isset($_POST['vivocon']) and $_POST['vivocon'] == "Eltern"): echo "selected"; endif; ?>>Eltern</option>
									<option value="Mutter" <?php if(isset($_POST['vivocon']) and $_POST['vivocon'] == "Mutter"): echo "selected"; endif; ?>>Mutter</option>
									<option value="Vater" <?php if(isset($_POST['vivocon']) and $_POST['vivocon'] == "Vater"): echo "selected"; endif; ?>>Vater</option>
									<option value="Anderes" <?php if(isset($_POST['vivocon']) and $_POST['vivocon'] == "Anderes"): echo "selected"; endif; ?>>Anderes</option>
								</select>
							</td>
							<td class="label_table1"><b>Fremdsprachenniveau: </b> <br> <span class="peque">Nivel del idioma extranjera  </span></td>
							<td class="input_table">
								<select name="nivelidioma" id="" class="form-control">
									<option value="Deutsch" <?php if(isset($_POST['nivelidioma']) and $_POST['nivelidioma'] == "Deutsch"): echo "selected"; endif; ?>>Deutsch</option>
									<option value="Spanisch" <?php if(isset($_POST['nivelidioma']) and $_POST['nivelidioma'] == "Spanisch"): echo "selected"; endif; ?>>Spanisch </option>
								</select>
							</td>
							<td>
								<input type="text" name="nivelidioma2" value="<?php echo isset($_POST['nivelidioma2']) ? $_POST['nivelidioma2'] : ''  ?>" class="form-control">
							</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Hobbys</b> <br> <span class="peque">Hobbies</span></td>
							<td class="input_table" colspan="4">
								<textarea name="hobbys" class="form-control" id=""><?php echo isset($_POST['hobbys']) ? $_POST['hobbys'] : ''  ?></textarea>
							</td>
						</tr>	
						<tr>
							<td class="label_table1"><b>Sonstige Bemerkungen* </b> <br> <span class="peque">Otros antecedentes importantes </span></td>
							<td class="input_table" colspan="4">
								<textarea name="otrosAntecedentes" class="form-control" id=""><?php echo isset($_POST['otrosAntecedentes']) ? $_POST['otrosAntecedentes'] : ''  ?></textarea>
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
						<td class="input_table " colspan="2" ><input type="text" class="form-control" value="<?php echo isset($_POST['nombrePadre']) ? $_POST['nombrePadre'] : ''  ?>"  name="nombrePadre"></td>
						<td class="label_table text-right" ><b>Alter:  </b> <br> <span class="peque">Edad</span></td>
						<td class="input_table1" ><input type="text" name="edadPadre" value="<?php echo isset($_POST['edadPadre']) ? $_POST['edadPadre'] : ''  ?>" class="form-control"></td>

					</tr>
					<tr>
						<td class="label_table"><b>Mail:  </b> <br> <span class="peque">Mail</span></td>
						<td class="input_table" ><input type="text" name="mailPadre" value="<?php echo isset($_POST['mailPadre']) ? $_POST['mailPadre'] : ''  ?>" class="form-control"></td>
							<td class="label_table1 text-right"><b>Handy: </b> <br> <span class="peque">Celular</span></td>
							<td>
								<select name="celularPadre_code" id="" class="form-control">
									<option value="+56" <?php if(isset($_POST['celularPadre_code']) and $_POST['celularPadre_code'] == "+56"): echo "selected"; endif; ?>>+56</option>
									<option value="+49" <?php if(isset($_POST['celularPadre_code']) and $_POST['celularPadre_code'] == "+49"): echo "selected"; endif; ?>>+49</option>
									<option value="+43" <?php if(isset($_POST['celularPadre_code']) and $_POST['celularPadre_code'] == "+43"): echo "selected"; endif; ?>>+43</option>
								</select>
							</td>
							<td class="input_table" colspan="2"><input type="text" name="celularPadre" value="<?php echo isset($_POST['celularPadre']) ? $_POST['celularPadre'] : ''  ?>" class="form-control"></td>

					</tr>
					<tr>
						<td class="label_table2"><b>Nach- und Vorname der Mutter: </b> <br> <span class="peque">Apellidos y nombre madre    </span></td>
						<td class="input_table " colspan="2" ><input type="text" name="nombreMadre" value="<?php echo isset($_POST['nombreMadre']) ? $_POST['nombreMadre'] : ''  ?>" class="form-control"></td>
						<td class="label_table text-right" ><b>Alter:  </b> <br> <span class="peque">Edad</span></td>
						<td class="input_table1" ><input type="text" class="form-control" value="<?php echo isset($_POST['edadMadre']) ? $_POST['edadMadre'] : ''  ?>" name="edadMadre"></td>

					</tr>
					<tr>
						<td class="label_table"><b>Mail:  </b> <br> <span class="peque">Mail</span></td>
						<td class="input_table" ><input type="text" class="form-control" value="<?php echo isset($_POST['mailMadre']) ? $_POST['mailMadre'] : ''  ?>" name="mailMadre"></td>
							<td class="label_table1 text-right"><b>Handy: </b> <br> <span class="peque">Celular</span></td>
							<td>
								<select name="celularMadre_cod" id="" class="form-control">
									<option value="+56" <?php if(isset($_POST['celularMadre_cod']) and $_POST['celularMadre_cod'] == "+56"): echo "selected"; endif; ?>>+56</option>
									<option value="+49" <?php if(isset($_POST['celularMadre_cod']) and $_POST['celularMadre_cod'] == "+49"): echo "selected"; endif; ?>>+49</option>
									<option value="+43" <?php if(isset($_POST['celularMadre_cod']) and $_POST['celularMadre_cod'] == "+43"): echo "selected"; endif; ?>>+43</option>
								</select>
							</td>
							<td class="input_table" colspan="2"><input type="text" value="<?php echo isset($_POST['celularMadre']) ? $_POST['celularMadre'] : ''  ?>" name="celularMadre" class="form-control"></td>

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
								<option value="ja" <?php if(isset($_POST['tengoParientes']) and $_POST['tengoParientes'] == "ja"): echo "selected"; endif; ?>>Ja</option>
								<option value="Nein" <?php if(isset($_POST['tengoParientes']) and $_POST['tengoParientes'] == "Nein"): echo "selected"; endif; ?>>Nein</option>
							</select>
						</td>

					</tr>
					<tr>
						<td class="label_table3"><b>Ich habe schon eine Gastfamilie (Name, Adresse, Mail): </b> <br> <span class="peque">Ya tengo familia anfitriona (Nombre, dirección, mail)</span></td>
						<td class="input_table " colspan="2" >
							<select name="tengoAfitriones" class="form-control" id="">
								<option value="ja" <?php if(isset($_POST['tengoAfitriones']) and $_POST['tengoAfitriones'] == "ja"): echo "selected"; endif; ?>>Ja</option>
								<option value="Nein" <?php if(isset($_POST['tengoAfitriones']) and $_POST['tengoAfitriones'] == "ja"): echo "selected"; endif; ?>>Nein</option>
							</select>
						</td>
						<td>
							<input type="text" name="nombreAnfitrion" value="<?php echo isset($_POST['nombreAnfitrion']) ? $_POST['nombreAnfitrion'] : ''  ?>" class="form-control">
						</td>
					</tr>					
				</table>
		  </div>
		</div>
		<input type="submit" class="btn btn-success btn-block btn-lg">
		<br><br>
	</div>
	</form>
	<?php if ($_POST): ?>
		<pre>
			<?php var_dump($_POST) ?>
		</pre>
	<?php endif ?>
</body>
</html>