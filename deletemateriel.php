<?php
include '../controller/materielc.php';
$materielc = new materielc();
$materielc->deletemateriel($_GET["id"]);
header('Location:listmateriel.php');
