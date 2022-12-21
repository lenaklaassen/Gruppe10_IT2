<?php
    //calculate partial sums of a given array
    function calculateConsumptionSums($arr){
        $sum_array = [];
        //iterate over array and calculate sum of created subarrays
        for($i = 1; $i <= count($arr); $i++){
            $a = array_slice($arr,0,$i);
            array_push($sum_array, array_sum($a));
        }

        return $sum_array;
    }
?>
