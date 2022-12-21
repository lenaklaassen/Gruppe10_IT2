<?php

require_once 'database/Database.php';

function getPowerConsumption(){
    $db = new Database();
    return $db->query('SELECT * FROM power_meter')->fetchAll(PDO::FETCH_ASSOC);
};

function getPowerConsumptionbyCategoryAndLength($category, $count){
    $db = new Database();
    if($category == null){
        $result = $db->query("SELECT * FROM power_meter")->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $result = $db->query("SELECT * FROM power_meter WHERE CATEGORY = $category")->fetchAll(PDO::FETCH_ASSOC);
    }
   
    //only get the latest x items by $count
    if ($count != null){
        $sliced_result = array_slice($result,count($result)-$count);
        return $sliced_result;
    }else{
        return $result;
    }
};

function postPowerConsumption($cat, $consumption){
    $timestamp = date('d-m-y h:i:s');
    $db = new Database();
    try{
        $db->query("INSERT INTO power_meter (id,timestamp, category, consumption) VALUES (NULl, '$timestamp', '$cat', '$consumption')");
        return 'success';
    }catch(Exception $e){
        return $e;
    }
};

?>