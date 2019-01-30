<?php include "User.php"; ?>
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

    <table class="table table-striped table-hover mt-5">

      <thead class="thead-dark">
        <tr class="">
          <th class="lead">Id</th>
          <th class="lead">UserName</th>
          <th class="lead">Name</th>
          <th class="">email</th>
          <th class="">Action</th>
          <th></th>
        </tr>
      </thead>
        <tbody>
        <?php 
          $users = new User;
        
          $result = $users->get_users();
          //print_r($result);
          // var_dump($result);
          if($result){
            foreach($result as $row){
              $user_id = $row['user_id'];
              echo "<tr>";
              echo "<td>".$row['user_id']."</td>";
              echo "<td>".$row['username']."</td>";
              echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td><a href='edituser.php?id=$user_id' class='btn btn-sm btn-info mr-2'>Edit</a>
              <a href='delete.php?id=$user_id' class='btn btn-sm btn-danger text-white'>Delete</a></td>";
              echo "<td></td>";
              echo "</tr>";
            }
          }
        ?>

        </tbody>
      </table>
    <a href="createuser.php" class="btn btn-primary">ADD User</a>
</body>
</html>