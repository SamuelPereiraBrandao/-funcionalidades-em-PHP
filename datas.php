<?php 
date_default_timezone_set('America/Sao_Paulo');
echo date('d'); //dia em numeros
echo "<br>";
echo date('m'); //mes em numeros
echo "<br>";
echo date('M'); //mes em escrita
echo "<br>";
echo date('y'); //ano com 2 digitos
echo "<br>";
echo date('Y'); //ano com todos digitos
echo "<br>";
echo date('d/m/Y'); //formato padrão
echo "<br>";
echo date('l'); //dia da semana
echo "<br>";
echo date('d/m/Y H:i:s'); //dia mes ano hora minuto
echo "<br>";
echo date('H'); // hora
echo "<br>";
echo date('i'); //minuto
echo "<br>";
echo date('s'); //segundo
echo "<br>";
 //banco de dados
 echo "<hr>";
 $date = date('Y-m-d'); // date
 $datetime = date('Y-m-d H:i:s');
 echo $date;
 echo "<br>";
 echo $datetime;
echo "<br>";
 //time
 echo time();
$time = time();
echo "<br>";
echo date('d/m/Y',$time);
echo "<br>";
//MKTIME
$data_pagamento = mktime(12,30,23,04,15,2023);
echo date('d/m/Y - h:i', $data_pagamento);
//STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);
echo "<hr>";
echo date('d/m/Y', $data)
?>