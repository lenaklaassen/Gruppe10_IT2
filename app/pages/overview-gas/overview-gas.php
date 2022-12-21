<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übersicht Stromverbrauch</title>

    <link rel="stylesheet" href="/app/pages/global.css">
    <link rel="stylesheet" href="/app/pages/overview-gas/overview-gas.css">

    <!-- include bootstrap ui library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
     <!-- Navbar Component -->
     <?php require 'app/components/navbar/navbar.view.php'; ?>
     <div class="grid-container">
        <h1 class="heading">Dein Gasverbrauch in der Übersicht</h1>
        <?php require 'app/components/gasConsumptionTable/gasConsumptionTable.view.php';?>
     </div>
     <?php require_once 'app/components/footer/footer.view.php' ?>
</body>
</html>