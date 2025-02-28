<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$allstudents=[
    ["ali",21,"karachi"],
    ["asif",22,"lahore"],
    ["ai",21,"multan"],
    ["i",21,"sialkot"]
];
//var_dump($allstudents);
//echo "<br>";
?>
<h1>Hello</h1>
<?php
//print_r($allstudents);
//echo "<br>"
?>


<!-- <table border="1px">

    <thead >
        <tr>Name</tr>
        <tr>Age</tr>
        <tr>City</tr>
    </thead>
    <tbody>
    <?php
//for($i=0; $i<count($allstudents);$i++){
?>
 <tr>
   <?php
   //for($b=0;$b<count($allstudents[$i]);$b++){
    ?>
    <td>//<?php echo $allstudents[$i][$b]  ?></td>
    <?php
  // }
   ?>
 
 </tr>
<?php
//}
?>
    </tbody>
</table  -->

<table border="1px">

    <thead >
        <tr>Name</tr>
        <tr>Age</tr>
        <tr>City</tr>
    </thead>
    <tbody>
    <?php
foreach($allstudents as $std){
?>
 <tr>
   <?php
   foreach( $allstudents as [$s]){
    ?>
    <td><?php echo $allstudents [$std] [$s]?></td>
    <?php
   }
   ?>

    
 </tr>
<?php
}
?>
    </tbody>
</table>



</body>
</html>