<?php 
require_once 'database/models/Categories.php';

$name = $_POST['category'];

$request = postCategories($name);

if($request == 'success'){
    //redirect success
    header('Location: /categories?status=success');
}else{
    //redirect error
    header('Location: /categories?status=error');
}
?>