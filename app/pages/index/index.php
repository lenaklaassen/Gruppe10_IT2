<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="/app/pages/global.css">
    <link rel="stylesheet" href="/app/pages/index/index.css">

     <!-- include bootstrap ui library -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar Component -->
    <?php require 'app/components/navbar/navbar.view.php'; ?>
    <!--Layout-->
    <div class="grid-container">
        <div class="container-power">
            <h2>Dein Stromverbrauch</h2>
            <!--Power Consumption Table Component-->
            <?php 
            //set category to 1 and print out the latest 10 items
            $category = 1;
            $count = 10;
            require 'app/components/powerConsumptionTable/powerConsumptionTable.view.php';

            ?>
        </div>
        <div class="vertical-divider"></div>
        <!--display table for gas consumption-->
        <div class="container-gas">
            <h2>Dein Gasverbrauch</h2>
            <?php 
            //print out the latest 10 items
            $count = 10;
            require 'app/components/gasConsumptionTable/gasConsumptionTable.view.php';
            ?>
        </div>
    </div>
    <?php require_once 'app/components/footer/footer.view.php' ?>
</body>
</html>