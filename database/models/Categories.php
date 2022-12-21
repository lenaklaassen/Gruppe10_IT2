<?php
require_once 'database/Database.php';

function getCategories(){
    $db = new Database();
    try{
        $result = $db->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch(Exception $e){
        return $e;
    }
};


function postCategories($cat){
    $db = new Database();
    try{
        $db->query("INSERT INTO categories (id, name) VALUES (NULl, '$cat')");
        return 'success';
    }catch(Exception $e){
        return $e;
    }
};

?>