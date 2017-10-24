<?php

require_once 'index1.php';

$robot1 = new motor ('grung grung grung',100);
$robot2 = new motor ('ngeng ngeng nggeng',100);
$robot1->set_berat(100);
$robot2->set_suara ('mberrr mberrr mmberrr');
echo "berat motor :".$robot1->get_berat() . '<br>';
echo "suara motor :".$robot2->get_suara() . '<br>';



?>