<?php 
//この中では$conn->query();は使えない
    include "User.php";

    $id = $_GET['id'];
    

    $read = new User;
    $row = $read->get_user($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" >
        </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                    <a class="nav-link" href="userlist.php">Users</a>
                    </li>
                </ul>
            </div>
    </nav>

<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" value="<?php echo $row['username'];?>" class="form-control" id="username">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" value="<?php echo $row['password'];?>" class="form-control" id="password">
        </div>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" value="<?php echo $row['firstname'];?>" class="form-control" id="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" value="<?php echo $row['lastname'];?>" class="form-control" id="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control" id="email">
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary btn-block">
    </form>

    <?php

     $id = $_GET['id'];

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        $edit = new User;

        $edit->update($username,$password,$firstname,$lastname,$email,$id);
    }

    ?>   
</div>
    
</body>
</html>