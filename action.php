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
    
    echo "<h3>Nome: </h3>";
    echo "<h4>";
    echo  $_GET['nome'];
    echo "</h4>";

    echo "<h3>Cognome: </h3>";
    echo "<h4>";
    echo  $_GET['cognome'];
    echo "</h4>";

    echo "<h3>Materia preferita:</h3>";
    echo "<h4>";
    echo  $_GET['materia'];
    echo "</h4>";

    

?>
</body>
</html>