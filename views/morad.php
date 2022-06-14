<?php

$data = new testController();
$users = $data->addTest();
header("location: profileEtudient");
?>