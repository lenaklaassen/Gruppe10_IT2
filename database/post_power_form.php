<?php 
require_once 'database/models/PowerConsumption.php';

$category = $_POST['category'];
$consumption = $_POST['consumption'];

$request = postPowerConsumption($category, $consumption);

if($request == 'success'){
    //redirect success
    header('Location: /capture-power?status=success');
}else{
    //redirect error
    header('Location: /capture-power?status=error');
}
?>