<?php
include_once ('../model/classes/clinic.php');

$clinic = new Clinic ("LRV", 23493202000118, "clinicalrv@gmail.com", "LRV STREET", 172, "Andar 22", "LRV DISTRICT", 11932479359, 8, 22);

print_r($clinic);
?>