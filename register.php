<?php
include("db.php");

if(isset($_POST['button'])){
    if(strlen($_POST['title']) > 0 && strlen($_POST['text']) >0){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $query = $dbh->query("INSERT INTO register(`tittle`, `task`) VALUES ('$title', '$text')");

        if($query){
            $_SESSION['message'] = "Task Save";
            $_SESSION['message_style'] = "success";
            header("location:index.php");
        } 
    } else{
        $_SESSION['message_wrong'] = "Have been problem";
        $_SESSION['message_style_wrong'] = "danger";
        header("location:index.php");
    }
}
?>