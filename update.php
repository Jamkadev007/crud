<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `users` where id =$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$id =$row['id'];
$ism = $row['ism'];
$email = $row['email'];
$tel = $row['tel'];
$pas = $row['password'];

if (isset($_POST['submit'])){
    $ism = $_POST['ism'];
    $email =$_POST['email'];
    $tel =$_POST['telofon'];
    $pass = $_POST['password'];

    $sql = "update `users` set id=$id,ism ='$ism',email = '$email',tel='$tel',password='$pass' where id=$id";
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
            <input type="text" class="form-control" value ="<?php echo $ism;?>" placeholder="ismingizni kiriting:" name="ism" autocomplete = "off">
        </div>
        <div class="mb-3">
            <label>email:</label>
            <input type="email" class="form-control" value ="<?php echo $email;?>" placeholder="emailni kiriting:" name="email" autocomplete = "off">
            
        </div>
        <div class="mb-3">
            <label>telofon:</label>
            <input type="text" class="form-control" value ="<?php echo $tel;?>" placeholder="telofonni kiriting:" name="telofon" autocomplete = "off">

        </div>
        <div class="mb-3">
            <label>password:</label>
            <input type="password" class="form-control" value ="<?php echo $pas;?>" placeholder="passwordni kiriting:" name="password" autocomplete = "off">

        </div>
        
        
        <button type="submit" class="btn btn-primary" name = "submit">update</button>
        </form>
    </div>

</body>



</html>