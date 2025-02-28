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
    <td><?php echo $std[0]?></td>
    <td><?php echo $std[1]?></td>
    <td><?php echo $std[2]?></td>
    
 </tr>
<?php
}
?>
    </tbody>
</table>


<table border="1px">

    <thead >
        <tr>Name</tr>
        <tr>Age</tr>
        <tr>City</tr>
    </thead>
    <tbody>
    <?php
for($i=0; $i<count($allstudents);$i++){
?>
 <tr>
    <td><?php echo $allstudents[$i] [0]?></td>
    <td><?php echo $allstudents[$i] [1]?></td>
    <td><?php echo $allstudents[$i] [2]?></td>
    
 </tr>
<?php
}
?>
    </tbody>
</table
</body>
</html>