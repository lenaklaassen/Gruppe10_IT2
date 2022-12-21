<?php
    require_once 'database/models/GasConsumption.php';
    require_once 'utils/calculateConsumptionSums.php';
    require_once 'utils/calculateCosts.php';
    require_once 'utils/calculateTendencies.php';

    $pList = getGasConsumptionByCount(10);

   $consumptions = [];
    foreach($pList as $elem){
        array_push($consumptions, $elem['consumption']);
    }
    
    $consumptionSums = calculateConsumptionSums($consumptions);
    $gasCosts = calculateGasCosts($consumptionSums);
    $trends = calculateTendency($consumptions);
    $streaks = calculateStreaks($consumptions);
    $placements = calculatePlacements($consumptions);
?>
<link rel="stylesheet" href="/app/components/gasConsumptionTable/gasConsumptionTable.css">
<div class="table-power">
    <table class="table table-responsive">
    <thead>
        <tr>
        <th scope="col">Ablesedatum</th>
        <th scope="col">Verbrauch</th>
        <th scope="col">Tendenz</th>
        <th scope="col">Streak</th>
        <th scope="col">Patzierung</th>
        <th scope="col">Σ Verbrauch</th>
        <th scope="col">Σ Kosten</th>
        </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<count($pList);$i++): ?>
        <tr>
            <!--Timestamp-->
            <td>
                <?php echo $pList[$i]['timestamp']; ?>
            </td>
            <!--Consumption--> 
            <td>
                <?php echo $consumptions[$i]; ?>m<sup>3</sup>
            </td> 
            <!-- Trends -->
            <td>
                <?php echo $trends[$i] ?>
            </td>
            <!-- Streak -->
            <td>
                <?php echo $streaks[$i] ?>
            </td>
            <!--Placement -->
            <td>
                <?php echo $placements[$i] ?>
            </td>
            <!-- Sum of consumptions -->
            <td>
                <?php echo $consumptionSums[$i] ?>m<sup>3</sup>
            </td>
            <!-- Sum of costs  -->
            <td>
                <?php echo $gasCosts[$i] ?>€
            </td>

            
        </tr>
        <?php endfor; ?>
    </tbody>
    </table>
    <p>Verbrauch insgesamt: <?php echo array_sum($consumptions)?> m<sup>3</sup></p>
</div>