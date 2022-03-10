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
$link = mysqli_connect("localhost", "root", "", "demo");
  if($link === false){
      die("ERREUR:Impossible de se connecter.". mysqli_connect_error());
  }
$PRENOM= mysql_real_escape_string($link, $_REQUEST ['PRENOM']);
$NOM= mysql_real_escape_string($link, $_REQUEST ['NOM']);
$DATE_DE_NAISSANCE= mysql_real_escape_string($link, $_REQUEST ['DATE_DE_NAISSANCE']);
$LIEU_DE_NAISSANCE= mysql_real_escape_string($link, $_REQUEST ['LIEU_DE_NAISSANCE']);
$EMAIL= mysql_real_escape_string($link, $_REQUEST ['EMAIL']);
$FORMATION= mysql_real_escape_string($link, $_REQUEST ['FORMATION']);

$sql = "INSERT INTO inscription (id, PRENOM, NOM, DATE_DE_NAISSANCE, LIEU_DE_NAISSANCE, EMAIL, FORMATION) 
VALUES ('$PRENOM', '$NOM', '$DATE_DE_NAISSANCE','$LIEU_DE_NAISSANCE','$EMAIL','$FORMATION')";

  if(mysqli_query($link,$sql)){
      echo"Enregistrement inseres avec succes.";
    
  }else{
echo "erreur: impossible d'executer $sql.". mysqli_error($link);
  }

mysqli_close($link);
?>
</body>
</html>