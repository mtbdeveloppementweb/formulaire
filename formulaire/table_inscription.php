<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "root", "", "demo"); if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error()); }
$sql = "CREATE TABLE inscription(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link, $sql)){
echo "Table created successfully."; } else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); }
mysqli_close($link); 
?>   
</body>
</html>