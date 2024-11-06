<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--chasiochioahcichishchiscisic-->
<!--aocacihci-->
    <center>
    <form action="D21.php" method="$_GET">
        <input type="text" name="n1" >
        <br>acajcoqpjc
        <br>
        <input type="text" name="n2" >
        <br>
        <br>
        <input type="submit" value="حاصل" >
    
    <?php
    if(array_key_exists("n1",$_GET) || array_key_exists("n2",$_GET)){
    echo "<br>";  
    echo "<br>";
    echo $_GET["n1"] + $_GET["n2"];
    }                             
    ?>  
     <br>
     <br>
    <input type="submit" value="ضرب"> 
    <?php

    if(array_key_exists("n1",$_GET) || array_key_exists("n2",$_GET)){
    echo "<br>";  
    echo "<br>";
    echo "<br>";
    echo "<br>";            
    echo $_GET["n1"] * $_GET["n2"];
    }
    ?>
    </form>
</center>
</body>
</html>