<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stromverbrauch erfassen</title>

    <link rel="stylesheet" href="/app/pages/global.css">
    <link rel="stylesheet" href="/app/pages/capture-power/capture-power.css">

    <!-- include bootstrap ui library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script>
        //form validation
        function validateForm() {
            let category = document.forms['form-post-power']['category'].value;
            let consumption = document.forms['form-post-power']['consumption'].value;
            if (consumption == "" || consumption == null){
                alert('Bitte gebe etwas ein!');
                return false;
            }else if(category == "Wähle Kategorie"){
                alert('Bitte wähle eine Kategorie aus!');
                return false;
            }
        }
    </script>
</head>
<body>
     <!-- Navbar Component -->
     <?php require 'app/components/navbar/navbar.view.php'; ?>

     <!--Main Content-->
     <div class="grid-container">
        <h1 class="heading">Erfasse einen neuen Stromverbrauch</h1>
        <form name="form-post-power" action="/post_power" method="POST" class="form-post-power" onsubmit="return validateForm()">
            <?php include_once 'app/components/powerCategoryPicker/powerCategoryPicker.view.php' ?>
            <input type="number" name="consumption" class="input-pwcon" placeholder="Verbrauch in kWh">
            <input type="submit" class="btn btn-primary button" value="Speichern">
        </form>

         <!-- Success/error Message -->
         <?php
            if($_GET['status'] == 'success'){
                echo "<div class='alert alert-success fade show' role='alert'>
                Stromverbrauch erfolgreich hinzugefügt!
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