<?php
require_once 'database/Database.php';

function getGasConsumptionByCount($count){
    $db = new Database();
    $result = $db->query("SELECT * FROM gas_meter")->fetchAll(PDO::FETCH_ASSOC);
    //only get the latest x items by $count
    $sliced_result = array_slice($result,count($result)-$count);

    return $sliced_result;
};
function postGasConsumption($consumption){
    $timestamp = date('d-m-y h:i:s');
    $db = new Database();
    try{
        $db->query("INSERT INTO gas_meter (id,timestamp, consumption) VALUES (NULl, '$timestamp', '$consumption')");
        return 'success';
    }catch(Exception $e){
        return $e;
    }
};
?>