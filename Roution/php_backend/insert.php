<?php
if (isset($_POST['submit'])) {
    $name = $_POST['addname'];
    $email = $_POST['addemail'];
    $address = $_POST['addaddress'];
    $phone = $_POST['addphone'];

    $sql = "INSERT INTO curd SET
     name='$name',
     email='$email',
     address='$address',
     phone='$phone'
     ";
    
$res = mysqli_query($conn, $sql);
if ($res) {

header("refresh: 1; ");
}
else{
    echo "$res";
    } 
}



?>