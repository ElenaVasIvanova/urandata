<?php
	//get the index from URL
	$index = $_GET['index'];

	//get json data
	$data = file_get_contents('../json/stationObjects.json');
	$data_array = json_decode($data);

	//assign the data to selected index
	$row = $data_array[$index];

?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Редакция на данни</title>
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap-grid.css">
    
  <link rel="stylesheet" type="text/css" href="../app.css">
  </head>
<body>
    <div class="container">
  <p>
    <a href="index.php" class="btn btn-primary">Назад</a>
    </p>
  
  <div class="panel panel-default">
    
   
    <h2 class="panel-heading">Редакция на данни за обекти</h2>
    
<form method="POST">
	
	<div class="form-group">
	<p>
		<label for="id">ID</label>
		<input type="text" id="id" class="form-control col-sm-8" name="id" value="<?php echo $row->id; ?>">
	</p>
	
	<p>
		<label for="obekt">Обект:</label>
		<input type="text" id="obekt" class="form-control col-sm-8" name="stationObject" value="<?php echo $row->stationObject; ?>">
	</p>
	
	<p>
		<label for="kod">Код на обекта:</label>
		<input type="text" id="kod" class="form-control col-sm-8" name="stationObjcode" value="<?php echo $row->stationObjcode; ?>">
	</p>
	
		<p>
		<label for="punkt">Име на мониторингов пункт:</label>
		<input type="text" id="punkt" class="form-control col-sm-8" name="stationName" value="<?php echo $row->stationName; ?>">
	</p>

	
<p>
		<label for="legenda">Легенда на мониторингов пункт:</label>
		<input type="text" id="legenda" class="form-control col-sm-8" name="stationLegend" value="<?php echo $row->stationLegend; ?>">
	</p>
	
	<p>
		<label for="gps">GPS координати:</label>
		<input type="text" id="gps" class="form-control col-sm-8" name="stationGPS" value="<?php echo $row->
		stationGPS; ?>">
	</p>
	
	<p>
		<label for="radpok">Радиационни показатели (вода,дън.утайка,растителност,МДГЛ):</label>
		<input type="text" id="radpok" class="form-control col-sm-8" name="stationRadindicators" value="<?php echo $row->stationRadindicators; ?>">
	</p>
	
<p>
		<label for="belezki">Бележки:</label>
		<input type="text" id="belezki" class="form-control col-sm-8" name="stationNote" value="<?php echo $row->stationNote; ?>">
	</p>
	
		<p>
		<label for="data">Дата:</label>
		<input type="text" id="data" class="form-control col-sm-8" name="stationDatevisit" value="<?php echo $row->stationDatevisit; ?>">
	</p>

<p>
<font color="#ee9600">Тип на пробата - Вода:</font>
	</p>

	<p>
		<label for="nproba">№ на Пробата по първичен протокол:</label>
		<input type="text" class="form-control col-sm-8" id="nproba" name="stationProtokolWnumber" value="<?php echo $row->stationProtokolWnumber; ?>">
	</p>
	<p>
				<label for="stoinosturan">U [Bq/m<sup>3</sup>]</label>
		<input type="text" class="form-control col-sm-6" id="stoinosturan" name="stationUvalue" value="<?php echo $row->stationUvalue; ?>">
		<label for="stoinostsigma">± &sigma; [Bq/m<sup>3</sup>]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostsigma" name="stationUSigmavalue" value="<?php echo $row->stationUSigmavalue; ?>">
	</p>

		<p>
		<label for="Ph">pH</label>
		<input type="text" class="form-control col-sm-8" id="Ph" name="stationPh" value="<?php echo $row->stationPh; ?>">
	</p>
	<p>
		<label for="stoinostRa">Ra [Bq/m<sup>3</sup>]</label>
		<input type="text" id="stoinostRa" class="form-control col-sm-6" name="stationValueRaW" value="<?php echo $row->stationValueRaW; ?>">
			<label for="stoinostRasigma">± &sigma; [Bq/m<sup>3</sup>]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostRasigma" name="stationValueSigmaRaW" value="<?php echo $row->stationValueSigmaRaW; ?>">
	</p>
		<p>
		<label for="stoinostBeta">обща &beta;[Bq/m<sup>3</sup>]</label>
		<input type="text" id="stoinostBeta" class="form-control col-sm-6" name="stationValueBetaW" value="<?php echo $row->stationValueBetaW; ?>">
		<label for="stoinostSigmaBeta"> ± &sigma; [Bq/m<sup>3</sup>]</label>
		<input type="text" id="stoinostSigmaBeta" class="form-control col-sm-6" name="stationValueSigmaBetaW" value="<?php echo $row->stationValueSigmaBetaW; ?>">
	</p>
    	<p>
		<label for="stoinostAlfa">обща &alpha; [Bq/m<sup>3</sup>]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostAlfa" name="stationValueAlfaW" value="<?php echo $row->stationValueAlfaW; ?>">
		<label for="stoinostAlfaSigma"> ± &sigma; [Bq/m<sup>3</sup>]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostAlfaSigma" name="stationValueSigmaAlfaW" value="<?php echo $row->stationValueSigmaAlfaW; ?>">
	</p>
    <p>
	<font color="#ee9600">Тип на пробата - Почва/дънна утайка/строителен материал</font>
	</p>
		<p>
		<label for="NomerBuProtokol">№ на Пробата по първичен протокол</label>
		<input type="text" class="form-control col-sm-8" id="NomerBuProtokol" name="stationProtokolSnumber" value="<?php echo $row->stationProtokolSnumber; ?>">
	</p>
      <p>
		<label for="stoinostRaSoil">Ra [Bq/kg]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostRaSoil" name="stationRavalue" value="<?php echo $row->stationRavalue; ?>">
			<label for="stoinostRasigmaSoil">± &sigma; [Bq/kg]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostRasigmaSoil" name="stationRaSigmavalue" value="<?php echo $row->stationRaSigmavalue; ?>">
	</p>
	<p>
		<label for="stoinosturanSoil">U [mgU/kg]</label>
		<input type="text" class="form-control col-sm-6" id="stoinosturanSoil" name="stationUsoilvalue" value="<?php echo $row->stationUsoilvalue; ?>">
		<label for="stoinostsigmaSoil">± &sigma; [mgU/kg]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostsigmaSoil" name="stationUsoilSigmavalue" value="<?php echo $row->stationUsoilSigmavalue; ?>">
	</p>
 	<p><font color="#ee9600">Тип на пробата - Растителност</font></p>
 		<p>
		<label for="NomerVProtokol">№ на Пробата по първичен протокол</label>
		<input type="text" class="form-control col-sm-8" id="NomerVProtokol" name="stationProtokolVnumber" value="<?php echo $row->stationProtokolVnumber; ?>">
	</p>
<p>
		<label for="stoinostAlfaV">обща &alpha; [Bq/kg]</label>
		<input type="text" class="form-control col-sm-6" id="stoinostAlfaV" name="stationValueAlfaV" value="<?php echo $row->stationValueAlfaV; ?>">
		<label for="stoinostAlfaSigmaV"> ± &sigma; [Bq/kg]</label>
		<input class="form-control col-sm-6" type="text" id="stoinostAlfaSigmaV" name="stationValueSigmaAlfaV"value="<?php echo $row->stationValueSigmaAlfaV; ?>">
	</p>
<p><font color="#ee9600">Тип на пробата - Мощност на дозата гама лъчение</font>	</p>
<p>
		<label for="ValueDRGRaverage">средна стойност [nGy/h]</label>
		<input type="text" id="ValueDRGRaverage" class="form-control col-sm-8" name="stationValueDRGRaverage" value="<?php echo $row->stationValueDRGRaverage; ?>">
	</p>
<p>
		<label for="ValueDRGRmax">максимална стойност [nGy/h]</label>
		<input type="text" class="form-control col-sm-8" id="ValueDRGRmax" name="stationValueDRGRmax" value="<?php echo $row->stationValueDRGRmax; ?>">
	</p>
	<p>
		<label for="stNotes">Забележка</label>
		<input type="text" id="stNotes" class="form-control col-sm-8" name="stationNotes" value="<?php echo $row->stationNotes; ?>">
	</p>
	<input type="submit" class="button_back" name="save" value="Запази">
	</div>
</form>
</div>

</div>

<?php
	if(isset($_POST['save'])){
		//set the updated values
		$input = array(
			'id' => $_POST['id'],
			'stationObject' => $_POST['stationObject'],
			'stationObjcode' => $_POST['stationObjcode'],
			'stationName' => $_POST['stationName'],
			'stationLegend' => $_POST['stationLegend'],
			'stationGPS' => $_POST['stationGPS'],
			'stationRadindicators' => $_POST['stationRadindicators'],
			'stationNote' => $_POST['stationNote'],
			'stationDatevisit' => $_POST['stationDatevisit'],
			'stationProtokolWnumber' => $_POST['stationProtokolWnumber'],
			'stationUvalue' => $_POST['stationUvalue'],
			'stationUSigmavalue' => $_POST['stationUSigmavalue'],
			'stationPh' => $_POST['stationPh'],
			'stationValueRaW' => $_POST['stationValueRaW'],
			'stationValueSigmaRaW' => $_POST['stationValueSigmaRaW'],
			'stationValueBetaW' => $_POST['stationValueBetaW'],
			'stationValueSigmaBetaW' => $_POST['stationValueSigmaBetaW'],
			'stationValueAlfaW' => $_POST['stationValueAlfaW'],
			'stationValueSigmaAlfaW' => $_POST['stationValueSigmaAlfaW'],
			'stationProtokolSnumber' => $_POST['stationProtokolSnumber'],
			'stationRavalue' => $_POST['stationRavalue'],
			'stationRaSigmavalue' => $_POST['stationRaSigmavalue'],
			'stationUsoilvalue' => $_POST['stationUsoilvalue'],
			'stationUsoilSigmavalue' => $_POST['stationUsoilSigmavalue'],
			'stationProtokolVnumber' => $_POST['stationProtokolVnumber'],
			'stationValueAlfaV' => $_POST['stationValueAlfaV'],
			'stationValueSigmaAlfaV' => $_POST['stationValueSigmaAlfaV'],
			'stationValueDRGRaverage' => $_POST['stationValueDRGRaverage'],
			'stationValueDRGRmax' => $_POST['stationValueDRGRmax'],
			'stationNotes' => $_POST['stationNotes']
			);

		//update the selected index
		$data_array[$index] = $input;

		//encode back to json
		$data = json_encode($data_array, 128);
		file_put_contents('../json/stationObjects.json', $data);

		header('location: index.php');
	}
?>
</body>
</html>