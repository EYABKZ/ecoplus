<?php
include '../Controller/MaterielC.php';
$materielC = new materielC();
$materielC->deletemateriel($_GET["idmateriel"]);
header('Location:ListMaterield.php');

