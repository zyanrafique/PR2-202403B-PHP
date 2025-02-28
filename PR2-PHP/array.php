<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<!-- Array ma hmm na var_dump(),print_r & forloop(){} pa kaam kiya ha 
var_dump() array ki count total, data type num of crahcter  -->


    <?php

    $stdName =["ali","raza","asif"];
   // var_dump($stdName);
   // echo "<br>";
   // print_r($stdName);
   // echo "<br>";

    ?>
    <ul>
        <?php
        for($i=0;$i<=2;$i++){
?>
<li><?php  echo $stdName[$i]?></li>
            <?php
        }
        ?>
    </ul>
</body>
</html>

