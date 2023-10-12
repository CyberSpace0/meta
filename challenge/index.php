<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #808080">
<?php
$user = 'root';
$host = 'db_mysql';
$pass = 'root';
$database = 'KSA';
$connect = mysqli_connect($host,$user,$pass,$database);


if(isset($_FILES['file'])){
    $x = $_FILES['file'];
    $name = $x['name'];
    $x = explode('.',$name);
    $name = $x[0];
    $name = urldecode($name);
    $name = strtolower($name);
    $block = ['union','order'];
    for ($i=0; $i < 2; $i++) { 
        if(strpos($name,$block[$i])){
            http_response_code(403);
            die('YOU ARE BLOCKED FROM WAF');
        }
    }    
    $query = "insert into names(name) values('".$name."')";
    $result = mysqli_query($connect,$query);    

}





?>

<center>
<br><br><br><br><br><br>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="send">
</form>
</center>

</body>
</html>
