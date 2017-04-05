<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/mpdf/vendor/autoload.php';
?>
<?php
$dir_subida = getcwd().'/photos/';
$photo_name=date('Y_m_d_H_i_s').$_FILES['fichero_usuario']['name'];
$_FILES['fichero_usuario']['name'] = $photo_name;
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
	echo("No se recibio fotografia <br>");
	if (!$_POST) {
		
		echo("No se recibieron datos");
	}	
	echo '<meta http-equiv="refresh" content="2; url=index.php" />';
}
$finalName = "planillas/".$photo_name.".txt";
$file = fopen($finalName, "w");
$size = filesize($finalName);
foreach ($_POST as $key => $value) {
	# code...
	fwrite($file, $key."=".$_POST[$key]."\n");
}
fclose($file);
$html='
<style type="text/css">
	.thumbnail{
		position:absolute;
		float:right;
	}
	.panel-heading{
		background-color:#ffc000;
		padding-left:4px;
		font-size:12px;
	}
	.form-control{
		width:200px;
		display:none;
	}
	.table .table-bordered{
		font-size:10px;
	}
</style>

		
	<div style="border:1px solid white;width:450px;float:left"> 
				<h3>EINSCHREIBEFORMULAR SAT 2017- 2018</h3>
				<h4><i>Formulario de inscripción SAT 2017- 2018</i></h4>
	</div>
	<div style="border:1px solid white;margin-top:10px;width:200px;float:left">
		<img src="logo.jpg">
	</div>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">I. PERSÖNLICHE ANGABEN / <i>datos personales</i></h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="save.php">
			
				      <div style="clear:both"></div>
					<table class="table table-bordered">
						<tr>
							<td class="label_table"><b>Meine Schule:</b> <br> <span class="peque">Mi colegio</span></td>
							<td class="input_table" >'.$_POST['colegio'].'</td>
							<td></td>
							<td class="foto_table" colspan="2">
								<center>
									<img src="photos/'.$photo_name.'" class="thumbnail" alt="PassFoto" width="150" height="120">
								</center>
							</td>
						</tr>
						<tr>
							<td class="label_table"><b>Vollständiger Name:</b> <br> <span class="peque">Nombre completo</span></td>
							<td class="input_table" colspan="3">'.$_POST['nombre'].'</td>

							<td class="foto_table" ></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Klasse (heute):</b> <br> <span class="peque">Curso (hoy)</span></td>
							<td class="input_table">'.$_POST['curso'].'</td>
							<td class="label_table1"><b>Geschlecht:</b> <br> <span class="peque">Genero</span></td>
							<td class="input_table">
								'.$_POST['genero'].'
							</td>
							<td class="foto_table" ></td>
						</tr>
						<tr>
							<td class="label_table1"><b>Geburtsdatum: </b> <br> <span class="peque">Fecha de nacimiento</span></td>
							<td class="input_table">
								'.$_POST['fechaDeNacimiento'].'</td>
							<td class="label_table1"><b>'.$_POST['numIdentidad'].'</b></td>
							<td class="input_table" colspan="2">'.$_POST['numIdentidad_valor'].'</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Nationalität(en):   </b> <br> <span class="peque">Nacionalidad(es)</span></td>
							<td class="input_table">'.$_POST['nacionalidad'].'</td>
							<td class="label_table1"><b>Religion: </b> <br> <span class="peque">Religión</span></td>
							<td class="input_table" colspan="2">'.$_POST['religion'].'</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Mail: </b> <br> <span class="peque">Mail: </span></td>
							<td class="input_table">'.$_POST['mail'].'</td>
							<td class="label_table1"><b>Handynummer: </b> <br> <span class="peque">Celular</span></td>
							<td>
								'.$_POST['celular_code'].'
								
							</td>
							<td class="input_table" colspan="2">'.$_POST['celular'].'</td>

						</tr>
						<tr>
							<td class="label_table1"><b>Ich rauche: </b> <br> <span class="peque">Yo fumo</span></td>
							<td class="input_table">
								'.$_POST['fuma'].'
							</td>
							<td class="label_table1"><b>T-Shirt-Größe:  </b> <br> <span class="peque">Talla polera</span></td>
							<td class="input_table" colspan="2">
								'.$_POST['tallapolera'].'
							</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Adresse: </b> <br> <span class="peque">Dirección</span></td>
							<td class="input_table">'.$_POST['direccion'].'</td>
							<td class="label_table1"><b>Festnetznummer: </b> <br> <span class="peque">Teléfono fijo</span></td>
							<td class="input_table" colspan="2">'.$_POST['telefonofijo'].'</td>
						</tr>
						<tr>
							<td class="label_table1"><b>Ich wohne mit: </b> <br> <span class="peque">Yo vivo con</span></td>
							<td class="input_table">
							'.$_POST['vivocon'].'
								
							</td>
							<td class="label_table1"><b>Fremdsprachenniveau: </b> <br> <span class="peque">Nivel del idioma extranjera  </span></td>
							<td class="input_table">
							'.$_POST['nivelidioma'].'
							</td>
							<td>
								'.$_POST['nivelidioma2'].'
							</td>
						</tr>
						<tr>
							
							<td class="label_table1"><b>Hobbys </b> <br> <span class="peque">Hobbies</span></td>
							<td class="input_table" colspan="4">
								<p>'.$_POST['hobbys'].'</p>
							</td>
						</tr>	
						<tr>
							<td class="label_table1"><b>Sonstige Bemerkungen* </b> <br> <span class="peque">Otros antecedentes importantes </span></td>
							<td class="input_table" colspan="4">
								<p>'.$_POST['otrosAntecedentes'].'</p>
								<p class="peque"><b>Angaben zu chronischen und psychischen Krankheiten, Essgewohnheiten etc . (en cuánto a enfermedades crónicas, trastorno pscicologico, hábitos alimenticios etc.)</b></p>
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
				<td class="label_table2" style="font-size:10px"  width="200px"><b>Nach- und Vorname des Vaters: </b> <br> <span class="peque">Apellidos y nombre padre    </span></td>
				<td class="input_table " colspan="2" style="font-size:10px" width="300px">'.$_POST['nombrePadre'].'</td>
				<td class="label_table text-right" style="font-size:10px"  width="50px"><b>Alter:  </b> <br> <span class="peque">Edad</span></td>
				<td class="input_table1" style="font-size:10px">'.$_POST['edadPadre'].'</td>

			</tr>
			<tr>
				<td class="label_table" style="font-size:12px"><b>Mail:  </b> <br> <span class="peque">Mail</span></td>
				<td class="input_table"  style="font-size:12px" colspan="2" width="300px">'.$_POST['mailPadre'].'</td>
				<td class="label_table1 text-right" style="font-size:12px" width="50px"><b>Handy: </b> <br> <span class="peque">Celular</span></td>	
				<td class="input_table" colspan="3" style="font-size:12px"  >'.$_POST['celularPadre_code'].' '.$_POST['celularPadre'].'</td>

			</tr>
			<tr>
				<td class="label_table2" style="font-size:10px"><b>Nach- und Vorname der Mutter: </b> <br> <span class="peque">Apellidos y nombre madre    </span></td>
				<td class="input_table " style="font-size:10px" colspan="2" width="300px">'.$_POST['nombreMadre'].'</td>
				<td class="label_table text-right"  style="font-size:10px"  width="50px"><b>Alter:  </b> <br> <span class="peque">Edad</span></td>
				<td class="input_table1"  style="font-size:10px">'.$_POST['edadMadre'].'</td>

			</tr>
			<tr>
				<td class="label_table" style="font-size:10px"><b>Mail:  </b> <br> <span class="peque">Mail</span></td>
				<td class="input_table" style="font-size:10px" colspan="2" width="300px" >'.$_POST['mailMadre'].'</td>
				<td class="label_table1 text-right" style="font-size:10px"  width="50px"><b>Handy: </b> <br> <span class="peque">Celular</span></td>
				<td class="input_table" colspan="2" style="font-size:10px;text-align:left">'.$_POST['celularMadre_code'].' '.$_POST['celularMadre'].'</td>

			</tr>
		</table>
  </div>
</div>
<br>
<br>
<br>
<br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">III. SONSTIGES / <i>otros</i></h3>
  </div>
  <div class="panel-body">
		<table class="table table-bordered">
			<tr>
				<td class="label_table2" style="font-size:10px"><b>Ich habe Verwandte im Gastland: </b> <br> <span class="peque">Tengo parientes en el país anfitrión</span></td>
				<td class="input_table " colspan="3"  style="font-size:10px">
				'.$_POST['tengoParientes'].'
				</td>

			</tr>
			<tr>
				<td class="label_table3" style="font-size:10px"><b>Ich habe schon eine Gastfamilie (Name, Adresse, Mail): </b> <br> <span class="peque">Ya tengo familia anfitriona (Nombre, dirección, mail)</span></td>
				<td class="input_table " colspan="2"  style="font-size:10px">
				'.$_POST['tengoAfitriones'].'

				</td>
				<td>
					'.$_POST['nombreAnfitrion'].'
				</td>
			</tr>					
		</table>
  </div>
  <br>
  <br>
  <br>
  <table width="100%">
	<tr>
	<td>_________________________________________________________________________________</td>
	<td>_________________________________________________________________________________</td>
	</tr>
	<tr>
	<td align="center">Unterschrift Schüler/in <br> Firma alumna/o</td>
	<td align="center">Unterschriften Eltern/ Erziehungsberechtigte <br> Firmas padres/apoderados</td>
	</tr>
  </table>
</div>
';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output(date('Y_m_d_H_i_s').'_file.pdf','D');

?>