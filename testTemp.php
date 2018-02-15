<?php
include 'inc/autoload.inc.php';
include 'classes/Dao/daoMeasure.php';
include 'classes/Domaine/Measure.php';

$config = include 'inc/config.inc.php';
?>


<?php 
$daoMesure = new daoMeasure($config);
//$mesure = new Measure(60,30);
//$mesureUpdate = new Measure(13, 30, 20);
//$daoMesure->insertTemp($mesure);

$daoMesure->deleteMesure(12);
//$daoMesure->updateMesure($mesureUpdate);


?>