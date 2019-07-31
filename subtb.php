<?php
include('admin/conn.php');
if(isset($_POST['subs'])){
    $contactEmail= $_POST['contactEmail'];
    $date= date('Y/m/d');

    $sql= "INSERT INTO subtb (contactEmail,datee) VALUES 
    ('$contactEmail','$date')";
    if(mysqli_query($dbcon,$sql)){
        header('Location: index.php?status=Subscribe');
        };
}
?>