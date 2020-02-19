<?php

	$online = '<img src="new_online.png" height="20" width="20">'; // IMAGEM DE CASO ESTEJA ONLINE
	$offline = '<img src="new_offline.png" height="20" width="20">'; // IMAGEM DE CASO ESTEJA OFFLINE

	$ip = $_GET['ip']; // PEGA VALOR PASSADO PELO AJAX, o IP

	$ip2 =gethostbyname($ip); //TRANSFORMA HOSTNAME pelo IP, EX: TI02 transforma em 192.168.0.100

	exec('ping -n 1 -w 1 ' . $ip2, $saida, $retorno); // EXECUTA COMANDO PING 

	if ($retorno == 0){ // SE RETORNO FOR = 0 o HOST ESTA ONLINE
		echo $online;
	}else{
		echo $offline;
	}

?>
