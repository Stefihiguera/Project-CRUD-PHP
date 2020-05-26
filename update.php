<?php
include("db.php");

if(isset($_POST['button'])){
    if(strlen($_POST['title'])>0 && strlen($_POST['text'])>0){
        $id = $_POST['id'];
        $tittle = $_POST['title'];
        $text = $_POST['text'];
        $query = $dbh->query("UPDATE `register` SET `id`='$id',`tittle`='$tittle', task = '$text' WHERE id = '$id'");
        
        if ($query) {
            $_SESSION['message_update'] = "Update Succesfully";
            $_SESSION['message_update_color'] = "success";
            header("Location:index.php");
        }
    }
}
?>