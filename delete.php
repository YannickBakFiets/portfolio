<?php
    require_once "config.php";
    require_once('database.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $sql = "DELETE FROM `contact` WHERE id = $id";
    if($link->query($sql) === TRUE){
        echo "";
        }else{
            echo "oepsie poepsie";
        }
    
}else{
    die('oepsie poepsie');
}
?>