<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <button class = "btn btn-primary my-5 "><a href="user.php" class = "text-light" style="text-decoration: none;">Odam qo'shish</a></button>
    <table class="table">



        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Ism</th>
            <th scope="col">Email</th>
            <th scope="col">Tel Nomer</th>
            <th scope="col">Parol</th>
            <th scope="col">Amallar</th>

            </tr>
        </thead>

        <tbody>
            <?php
                $sql = "Select * from `users`";
                $result = mysqli_query($con,$sql);
                if ($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id =$row['id'];
                        $ism = $row['ism'];
                        $email = $row['email'];
                        $tel = $row['tel'];
                        $pas = $row['password'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$ism.'</td>
                        <td>'.$email.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$pas.'</td>
                        <td>
                        <button class = "btn btn-primary" ><a href="update.php?updateid='.$id.'" class = "text-light" style="text-decoration: none;">Tahrirlash</a></button>
                        <button class = "btn btn-danger" ><a href="delete.php?deleteid='.$id.'" class = "text-light" style="text-decoration: none;">ochirish</a></button>
                        </td>
                        </tr>';
                    }
                  
                }

            ?>
            <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr> -->
        </tbody>
    </table>

    </div>



</body>
</html>