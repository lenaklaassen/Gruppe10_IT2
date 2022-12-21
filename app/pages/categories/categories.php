<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorien erfassen</title>

   
    <link rel="stylesheet" href="/app/pages/categories/categories.css">
    <link rel="stylesheet" href="/app/pages/global.css">

    <!-- include bootstrap ui library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="/app/pages/categories/categories.js"></script>
</head>
<body>
    <!-- Navbar Component -->
    <?php require 'app/components/navbar/navbar.view.php'; ?>
    
     <!--Layout-->
    <div class="grid-container">
        <h1 class="heading">Füge eine neue Stromkategorie hinzu:</h1>
        <!-- Form -->
        <form name="form-cat" method="POST" action='/post_category' class="form-cat" onsubmit="return validateForm()" >
            <input type="text" name="category" class="input-cat" placeholder="Gib eine Kategorie ein">
            <input type="submit" class="btn btn-primary btn-lg button">
        </form>
         <!-- Success/error Message -->
         <?php
            if($_GET['status'] == 'success'){
                echo "<div class='alert alert-success fade show' role='alert'>
                Kategorie erfolgreich hinzugefügt!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }elseif($_GET['status'] == 'error') {
                echo "<div class='alert alert-danger' role='alert'>
                Es ist eine Fehler aufgetreten!</div>";
            }
        ?>
    </div>
    <?php require_once 'app/components/footer/footer.view.php' ?>
</body>
</html>