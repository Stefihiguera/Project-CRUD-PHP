<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $dbh->query("DELETE FROM register WHERE id = '$id'");

    if($query){
        $_SESSION['message_delete'] = "Success Delete";
        $_SESSION['message_delete_color'] = "danger";
        header("location:index.php");
    }
}
?>