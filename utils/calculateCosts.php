<?php 

//calculate power costs based on accumulated consumption
//formula is determined by values of the electricity supplier 'e-wie-einfach'
function calculatePowerCosts($arr){
    $costPerKWH = 0.34;
    $costs =[];
    foreach($arr as $element){
        array_push($costs, round($element*$costPerKWH,3));
    }

    return $costs;
}

//calculate gas costs based on accumulated consumption
//formula is determined by values of the gas supplier 'EnBW'
function calculateGasCosts($arr){
    $costs = [];
    $calorific_value = 9.760;
    $conversion_factor = 0.9711;
    $costPerKWH = 0.0478;
    foreach($arr as $element){
        array_push($costs, round($element*$calorific_value*$conversion_factor*$costPerKWH,2));
    }

    return $costs;
}

?>