<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
<!-- function ma hmm na variable bna na aur print kiya ha   ,echo ,print 
echo ma commo seprated kr sakta ha 
print ma nahi kr sakta 
esliya echo zyada use fulll ha 
1)local Scope
2)global Scope
3)static scope

PHP ma hmm na html strauctre use kray na kray koi fraq nahi perta abi ka liya baad ma use kra ga 
-->


<?php
$x=10;
function printVal(){
    global $x;
    echo $x ."<br>";
}
printVal();

function hello(){
    $x=10;
    echo "local scope " .$x ."<br>";
}
hello();

function staticScope(){
    static $x=1;
    echo $x;
    $x++;
}
staticScope();
echo "<br>";
staticScope();
echo "<br>";
?>

</body>
</html>`