<?php require('config.php');

 if (isset($_GET['id'])){
    $id = $_GET['id'];
    
    $delete_query = "DELETE FROM tasks WHERE id=$id";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result){
        echo header('location: index.php?msg=dsucess');
    }
    else{
        echo header('location : index.php?msg=derror');
    }
 }
?>