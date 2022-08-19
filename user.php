<?php

include 'connect.php';
if (isset($_POST['submit'])){
    $ism = $_POST['ism'];
    $email =$_POST['email'];
    $tel =$_POST['telofon'];
    $pass = $_POST['password'];

    $sql = "insert into `users`(ism,email,tel,password) values ('$ism','$email','$tel','$pass')";
    $result = mysqli_query($con,$sql);
    if ($result){
        // echo 'yuborildi';
        header('location:home.php');

    }
    else{
        die(mysqli_error($con));
    }
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro'yxatdan otish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <form  method = "POST">
        <div class="mb-3">
            <label>Ismingiz:</label>
            <input type="text" class="form-control" placeholder="ismingizni kiriting:" name="ism" autocomplete = "off">
        </div>
        <div class="mb-3">
            <label>email:</label>
            <input type="email" class="form-control" placeholder="emailni kiriting:" name="email" autocomplete = "off">
            
        </div>
        <div class="mb-3">
            <label>telofon:</label>
            <input type="text" class="form-control" placeholder="telofonni kiriting:" name="telofon" autocomplete = "off">

        </div>
        <div class="mb-3">
            <label>password:</label>
            <input type="password" class="form-control" placeholder="passwordni kiriting:" name="password" autocomplete = "off">

        </div>
        
        
        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
    </div>

</body>



</html>