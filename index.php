
<?php

$array_global = [];

// ABRE ARQUIVO COM OS IPS 
$fn = fopen("ips.txt", "r");

// CONTADOR
$count = 0;

/*
	LER CADA LINHA DO ARQUIVO
	SEPARA POR : 
	EXEMPLO:
	ip:TI02:80:Informatica:Thiago
	$array_global[0] Contem: 
						$array_global[0][0] contem: ip
						$array_global[0][1] contem: TI02
						$array_global[0][2] contem: 80
						$array_global[0][3] contem: Informatica
						$array_global[0][4] contem: Thiago
*/
while(! feof($fn)) {
	$result = fgets($fn);
	$array_global[$count] = explode(":", $result);
	$count++;
}

//FECHA ARQUIVO
fclose($fn);

//LISTAR TODOS DADOS DO array_global onde tem os dados do arquivo ips.txt
function listarDados($c, $array_dados, $tipo){

	for($i = 0; $i < $c; $i++){
		if($array_dados[$i][3] == $tipo){
			echo (
				'<tr>' .
				'<td>' .
				$array_dados[$i][4] .
				'</td>'.
				'<td>' .
				$array_dados[$i][1] .
				'</td>'.
				'<td class="' . $array_dados[$i][1] . '">' .
				'</td>'.
				'</tr>'
			);

		}
	}
}

//IMPRIME CABEÇALHO COM NOME DO SETOR
function imprimeCabecalho($setor){

	$set = $setor;
	
	switch($setor){
		case 'Vendasnovos': $set = 'Vendas Novos'; break; 
		case 'AssTec': 		$set = 'Assistencia Técnica'; break;
		case 'Seminovos': 	$set = 'Semi Novos'; break;
		case 'Central': $set = 'Central de Clientes'; break;
	}

	echo '<table> <table> <tr><th> ' . $set . '</th><th>Nome Maquina</th><th>Status</th></tr>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./index.css">
</head>
	<body>
			<?php

			$c = count($array_global);

			imprimeCabecalho('Vendasnovos');
			listarDados($c, $array_global, 'Vendasnovos');

			imprimeCabecalho('AssTec');
			listarDados($c, $array_global, 'AssTec');

			imprimeCabecalho('Frotas');
			listarDados($c, $array_global, 'Frotas');

			imprimeCabecalho('Peças');
			listarDados($c, $array_global, 'Peças');

			imprimeCabecalho('Financeiro');
			listarDados($c, $array_global, 'Financeiro');

			imprimeCabecalho('Vemar');
			listarDados($c, $array_global, 'Vemar');

			imprimeCabecalho('Central');
			listarDados($c, $array_global, 'Central');

			imprimeCabecalho('Seminovos');
			listarDados($c, $array_global, 'Seminovos');

			imprimeCabecalho('Diretoria');
			listarDados($c, $array_global, 'Diretoria');

			imprimeCabecalho('NAC');
			listarDados($c, $array_global, 'NAC');

			imprimeCabecalho('Informatica');
			listarDados($c, $array_global, 'Informatica');
				
			?>
		
		<script
		  src="https://code.jquery.com/jquery-3.4.0.min.js"
		  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
		  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="./index.js"></script>
	</body>
</html>




