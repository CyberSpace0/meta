<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILES</title>
</head>
<body style="background-color: #808080">
<center>

<?php
$user = 'root';
$host = 'db_mysql';
$pass = 'root';
$database = 'KSA';
$connect = mysqli_connect($host,$user,$pass,$database);

$q = 'select * from names';
$r = mysqli_query($connect,$q);
$row = mysqli_fetch_all($r);
for($i=0;$i < count($row);$i++){
    echo $row[$i][0].'<br>';

}


?>

</center>   

</body>
</html>
