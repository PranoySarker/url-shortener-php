<?php require "../config.php"; ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $select = $conn->query("SELECT * FROM urls WHERE id='$id'");
    $select->execute();
    
    $data = $select->fetch(PDO::FETCH_OBJ);
    
    header("location: ".$data->url."");
    }


?>