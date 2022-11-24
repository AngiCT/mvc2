<?php

//horas
echo '<br>La hora es : ' . time();
echo '<br>La hora en un mes: ' . strtotime("+1 month");

//fechas : date, DateTime
echo '<br>La fecha es : ' . date('d/F/Y');

$fecha = new DateTime("now");
echo '<br>';
var_dump($fecha);

$fecha = new DateTime("+11 weeks");
echo '<br>Intento de fecha : ' . $fecha->format("d@M@Y"); //Para convertir un objeto en string con la clase DateTime.

$mifecha = DateTime::createFromFormat("d/m/Y","30/07/2002");
echo '<br>';
var_dump($mifecha);
echo '<br>Fecha en español: ' . $mifecha->format("j-n-Y");