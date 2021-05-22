<?php
$fileName = "users.csv";
if(file_exists($fileName)) {
	$file = fopen($fileName, "r");

	$headers = explode(",", fgets($file));

	$data = array();

	while ($row = fgets($file)) {
		$rowData = explode(",", $row);

		$row = array();

		for ($i = 0; $i < count($headers); $i++) { 
			$row[$headers[$i]] = $rowData[$i];
		}
		array_push($data, $row);
	}
	fclose($file);
	echo json_encode($data);
}
