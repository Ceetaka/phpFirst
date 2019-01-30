<?php
require 'User.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    //creataclass instance
    $user = new User("parameter1","parameter2");
    echo $user->test();
    echo $user->hello_world();
    echo $this->display();
    // echo<br>
    // echo $user->find_user("Jane Doe");
    // echo<br>
    // echo $user->find_user("Jonathan Doe");

    ?>
</body>
</html>