<?php

    //calculate difference between two values and evaluate tendency
    //fluctuations up to two percent are not taken into account
    function calculateTendency($arr){
        $tendencies = [];
        for($i = 0; $i<count($arr);$i++){
            //calculate absolute fluctuation
            $abs_proc_diff = abs((($arr[$i]-$arr[$i-1])/$arr[$i])* 100);

            if($i==0 || $abs_proc_diff < 2){
                array_push($tendencies,'-');
            }elseif($arr[$i]-$arr[$i-1] > 0 && $abs_proc_diff > 2){
                array_push($tendencies, '&#128200');
            }elseif($arr[$i]-$arr[$i-1] < 0 && $abs_proc_diff > 2){
                array_push($tendencies,'&#128201');
            }
        }
        //return array with tendencies encoded by dichotomous emojis
        return $tendencies;
    }

    //calculate streaks based on following formular:
    /*
    Let a,b,c be three values from an array in order. We classify the streak into three types
    Type 1: (a < b < c) ∧ (| (c - a) / c * 100 | < 2) ⇒ Bad streak
    Type 2: (a > b > c) ∧ (| (c - a) / c * 100 | < 2) ⇒ Good streak
    Type 3: ¬Type1 ∧ ¬Type2 ⇒ Neutral streak
    */
    function calculateStreaks($arr){
        $streaks = [];

        for($i = 0; $i<count($arr);$i++){
            $abs_proc_diff = abs((($arr[$i]-$arr[$i-2])/$arr[$i])* 100);
            if($i<2 || $abs_proc_diff < 2){
                array_push($streaks,'-');
            }elseif($arr[$i-2]> $arr[$i-1] && $arr[$i-1]> $arr[$i] && $abs_proc_diff > 2){
                array_push($streaks, '&#128513');
            }elseif($arr[$i-2]< $arr[$i-1] && $arr[$i-1]< $arr[$i] && $abs_proc_diff > 2){
                array_push($streaks,'&#128533');
            }else{
                array_push($streaks, '-');
            }
        }
        return $streaks;
    }

    //calculate Placements
    function calculatePlacements($arr){
        asort($arr, SORT_NUMERIC);
        //get three lowest values
        $mins = array_slice($arr,0,3, true);
        $placements = array_fill(0, count($arr), '-');
        //fill in medal emojis
        $placements[array_keys($mins)[0]] = '&#129351';
        $placements[array_keys($mins)[1]] = '&#129352';
        $placements[array_keys($mins)[2]] = '&#129353';

        return $placements;
    }
?>