<?php

include '../model/reserva.class.php';

$reserva = new Reserva;

$reserva->setNome($_POST['textnome']);
$reserva->setTelefone($_POST['texttelefone']);
$reserva->setEmail($_POST['textemail']);
$reserva->setRg($_POST['textrg']);
$reserva->setDias($_POST['textdias']);
$reserva->setTipoReserva($_POST['textReserva']);


echo " ".$reserva->__toString();


