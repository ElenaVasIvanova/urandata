<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Избор на данни</title>
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap-grid.css">
    
  <link rel="stylesheet" type="text/css" href="../app.css">
  </head>

<body>
    <div class="container" align="center">
<div class="row">
<div class="well col-sm-12" >
     <p>
    <a href="../" class="btn btn-primary">Към справки обекти</a>
    </p>
<br>

<div class="table-wrapper" >     
<table class="fl-table-insert" >
<thead>

	<thead>
		<th>ID</th>
		<th>Обект</th>
	<th>Код</th>
<th>Пункт</th>
	<th>Легенда</th>
	<th>GPS</th>
	<th>Радиационни<br>
	показатели<br>(вода,дън.утайка,<br>растителност,МДГЛ)</th>
	<th>Бележки</th>
	<th>Дата</th>
	
	<th>№ на Пробата по първичен протокол</th>
<th>Води<br>U [Bq/m<sup>3</sup>]</th>
	<th>Води<br>± &sigma; [Bq/m<sup>3</sup>]</th>
	<th>pH</th>
	<th>Води<br>Ra [Bq/m<sup>3</sup>]</th>
	<th>Води<br>± &sigma; [Bq/m<sup>3</sup>]</th>
	<th>Води<br>обща &beta;[Bq/m<sup>3</sup>]</th>
		<th>Води<br>± &sigma; [Bq/m<sup>3</sup>]</th>
		<th>Води<br>обща &alpha; [Bq/m<sup>3</sup>]</th>
		<th>Води<br>± &sigma; [Bq/m<sup>3</sup>]</th>
		
		<th>№ на Пробата по първичен протокол</th>
		<th>Почви<br>Ra [Bq/kg]</th>
		<th>Почви<br>± &sigma; [Bq/kg]</th>
		<th>Почви<br>U [mgU/kg]</th>
		<th>Почви<br>± &sigma; [mgU/kg]</th>
	
		<th>№ на Пробата по първичен протокол</th>
		<th>Растения<br>обща &alpha; [Bq/kg]</th>
		<th>Растения<br>± &sigma; [Bq/kg]</th>
		
		<th>средна стойност [nGy/h]</th>
		<th>максимална стойност [nGy/h]</th>
		<th>Забележка</th>
		<th>Промяна</th>
	</thead>
	<tbody>
		<?php
			//fetch data from json
			
			$data = file_get_contents('../json/stationObjects.json');
			//decode into php array
			$data = json_decode($data);

			$index = 0;
			foreach( (array) $data as $row){
				echo "
					<tr>
			<td>".$row->id."</td>
			<td>".$row->stationObject."</td>
			<td>".$row->stationObjcode."</td>
			<td>".$row->stationName."</td>
			<td>".$row->stationLegend."</td>
			<td>".$row->stationGPS."</td>
			<td>".$row->stationRadindicators."</td>
			<td>".$row->stationNote."</td>
			<td>".$row->stationDatevisit."</td>
			<td>".$row->stationProtokolWnumber."</td>
			<td>".$row->stationUvalue."</td>
			<td>".$row->stationUSigmavalue."</td>
			<td>".$row->stationPh."</td>
			<td>".$row->stationValueRaW."</td>
			<td>".$row->stationValueSigmaRaW."</td>
			<td>".$row->stationValueBetaW."</td>
			<td>".$row->stationValueSigmaBetaW."</td>
			<td>".$row->stationValueAlfaW."</td>
			<td>".$row->stationValueSigmaAlfaW."</td>
			<td>".$row->stationProtokolSnumber."</td>
			<td>".$row->stationRavalue."</td>
			<td>".$row->stationRaSigmavalue."</td>
			<td>".$row->stationUsoilvalue."</td>
			<td>".$row->stationUsoilSigmavalue."</td>
			<td>".$row->stationProtokolVnumber."</td>
			<td>".$row->stationValueAlfaV."</td>
			<td>".$row->stationValueSigmaAlfaV."</td>
			
			<td>".$row->stationValueDRGRaverage."</td>
			<td>".$row->stationValueDRGRmax."</td>
			<td>".$row->stationNotes."</td>		
									<td>
									<p>
						<a href='edit.php?index=".$index."' class='btn btn-primary'>Редакция</a></br></br>
						<a href='delete.php?index=".$index."' class='btn btn-primary'>Изтриване на запис</a> 
								</p>
							
						</td>
					</tr>
				";

				$index++;
			}
		?>
	</tbody>
</table>
</div>

<p>
<a href="add.php" class="btn btn-primary">Нов запис</a>
</p>
</div> 
</div>      
</div> 

</body>
</html>