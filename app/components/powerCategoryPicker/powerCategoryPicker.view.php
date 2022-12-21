<?php
require_once 'database/models/Categories.php';

$cList = getCategories();

$categories = [];
foreach($cList as $elem){
    array_push($categories, $elem['name']);
}

$ids = [];
foreach($cList as $elem){
    array_push($ids, $elem['id']);
}
?>

<link rel="stylesheet" href="/app/components/powerCategoryPicker/powerCategoryPicker.css">


<select id="category" class="form-select button"  name="category" aria-label="Default select example">
    <option selected>Wähle Kategorie</option>
    <?php for($i=0;$i<count($categories);$i++): ?>
        <option value= <?php echo $ids[$i] ?> > <?php echo $categories[$i]?> </option> 
    <?php endfor; ?>
</select>