<?php 
    require 'Calculate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
    .border{
        width:60%;
        margin:10px auto;
    }
    </style>

</head>
<body>
<div class="border rounded">
<center>
<div class="bg-light p-3">
<h1>CALCULATOR</h1>
</div>
<form method="post" action="calculator.php">
    <input type="text" name="value1" class="form-control mt-3 w-50">
    <select name="sign" class="form-control mt-3 w-50">
        <option name="+">+</option>
        <option name="-">-</option>
        <option name="*">*</option>
        <option name="/">/</option>
      </select>
    <input type="text" name="value2" class="form-control mt-3 w-50">
    <input type="submit" name="submit" value="Calculate" class="btn btn-outline-primary btn-lg w-50  mt-3">
    <input type="reset" name="reset" value="Reset" class="form-control mt-3 w-50">
    <br>
    <?php 
    $calculate = new Calculate;

    if(isset($_POST['submit'])){
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $sign = $_POST['sign'];
        echo "Amount is : ".$calculate->solve($value1,$value2,$sign);
    }
    ?>
</form>
</center>
</div>  
</body>
</html>
