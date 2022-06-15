<?php
$testController = new testController();
if (isset($_POST['result'])) {
    $msg = $_POST['result'];
    $testController->addTest($msg);
} else {
    echo 'nn';
}
