<?php
include('admin/conn.php');
if(isset($_POST['sub'])){
    $contactName= $_POST['contactName'];
    $contactEmail= $_POST['contactEmail'];
    $contactSubject= $_POST['contactSubject'];
    $contactMessage= $_POST['contactMessage'];
    $sql= "INSERT INTO contacttb (contactName,contactEmail,contactSubject,contactMessage) VALUES 
    ('$contactName','$contactEmail','$contactSubject','$contactMessage')";
    if(mysqli_query($dbcon,$sql)){
        echo "string";
        header('Location: index.php?contact=Message');
        };
}
?>