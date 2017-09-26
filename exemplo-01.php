<?php

$filename = "usuarios.csv";

if(file_exists($filename)){

	$file = fopen($filename, "r"); // r - read nao tem + pq n vai editar

	$headers = explode("#", fgets($file)); //fgets pega primeira linha do arquivo retirando o separador utilizado #

	$data = array();

	while ($row = fgets($file)) { //pega todas as linhas do arquivo
		
		$rowData = explode("#", $row);

		$linha = array();

		for($i =0; $i < count($headers); $i++){ //para pegar as chaves do array headers

			$linha[$headers[$i]] = $rowData[$i];
		}

		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);
}

?>