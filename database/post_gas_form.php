<?php 
require_once 'database/models/GasConsumption.php';

$consumption = $_POST['consumption'];

$request = postGasConsumption($consumption);

if($request == 'success'){
    //redirect success
    header('Location: /capture-gas?status=success');
}else{
    //redirect error
    header('Location: /capture-gas?status=error');
}
?>