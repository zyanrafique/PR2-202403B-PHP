<?php 
$stdname = 'asif';
echo $stdname;
?>
<h2>Hello</h2>
<?php
$stdAge = 23;
 echo "<h3>".$stdAge."<h3/>";
 echo "<h3>.$stdAge.<h3/>";
 echo '<h3>'.$stdname.'<h3/>';

 ?>
 
 <h1><?php echo $stdname ?></h1>
 <h1><?php echo $stdname . " " . $stdAge ?></h1>
<?php
$stdName = "Aliyan";
$stdEmail="aliyan@gmail.com";
$stdphone="032354635";
 ?>
 <h2><?php echo $stdName. "  " .$stdEmail."  ".$stdphone ?></h2>
 


<?php
$student=[
    ["ali",21,"karachi"],
    ["asif",22,"lahore"],
    ["ai",21,"multan"],
    ["i",21,"sialkot"]
];

var_dump($student);
echo "<br";
 ?>
 <h1> <?php echo $stdName ?></h1>
 <h1> <?php echo $stdAge ?></h1>
 <h1> <?php echo $stdEmail ?></h1>

<table border="1px">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for($i=0; $i < count($student); $i++) {
        ?>
        <tr>
            <td><?php echo $student[$i][0]; ?></td>
            <td><?php echo $student[$i][1]; ?></td>
            <td><?php echo $student[$i][2]; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>