<?php

// P    Representação de período: vem antes de dia, mês,ano e stream_socket_get_name
// T    Representação de tempo: vem antes de hora, minuto e segundo
// %	% literal	%
// Y	Anos, em representação numérica, com dois dígitos e zero à esquerda	Years, numeric, at least 2 digits with leading 0	01, 03
// y	Anos, em representação numérica	1, 3
// M	Meses, em presentação numérica, com dois dígitos e zero à esquerda	01, 03, 12
// m	Meses, em presentação numérica	1, 3, 12
// D	Dias, em presentação numérica, com dois dígitos e zero à esquerda	01, 03, 31
// d	Dias, em presentação numérica	1, 3, 31
// a	Número total de dias resultante de DateTime::diff() ou (unknown), caso contrário	4, 18, 8123
// H	Horas, em presentação numérica, com dois dígitos e zero à esquerda	01, 03, 23
// h	Horas, em presentação numérica	1, 3, 23
// I	Minutos, em presentação numérica, com dois dígitos e zero à esquerda	01, 03, 59
// i	Minutos, em presentação numérica	1, 3, 59
// S	Segundos, em presentação numérica, com dois dígitos e zero à esquerda	01, 03, 57
// s	Segundos, em presentação numérica	1, 3, 57
// R	Sinal "-" quando negativo, "+" quando positivo	-, +
// r	Sinal "-" quando negativo, sem sinal quando positivo

//Exibirá a data
echo date('d/m/y') . '<br>';

//Metodo da própria linguagem
$data = new DateTime();
echo $data->format('d-m-Y H:i:s') . '<br>';

//---------------------------------------------------------

$data1 = new DateTime();

//Periodo
$intervalo = new DateInterval('PT5M');

//Adiciona um periodo de 5 minutos
//add - adiciona o valor do parametro
$data1->add($intervalo);

var_dump($data1);

//---------------------------------------------------------

//Objeto
$data2 = new DateTime();

//Periodo
$tirar = new DateInterval('P5Y10M5DT10H50M10S');

//Retira 5anos, 10meses, 5dias, 10horas, 50minutos, 10segundos
//sub - subtrai o valor do parametro
$data2->sub($tirar);

var_dump($data2);


