


<div class="container" style="border: 1px solid black; padding: 20px;">
<h3>Grade Checked by use php:</h3>
<?php
$marks=10;
if($marks>90){
    echo "Grade A+";
}
elseif($marks>70){
    echo "Grade A";
}
else{
    echo "Fail" . "<br>";
}
?>
<!-- TABLE PRINT  by using Php   from input-->
<div class="container" style="border: 1px solid black; padding: 20px;margin-top: 10px;margin-bottom: 10px;">
    <h3>Table print using PHP:</h3>
    <form method="POST">
        <input type="number" name="number" placeholder="Enter number for table">
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if (isset($_POST['number']) && !empty($_POST['number'])) {
        $num = $_POST['number'];
        // Loop to print the table up to the entered number
        for ($i = 1; $i <= $num; $i++) {
            echo $num . " x " . $i . " = " . ($i * $num) . "<br>";
        }
    }
    ?>
</div>


<!-- TABLE PRINT  by using Php-->
<?php
$number = 5; // User se number input

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Multiplication Table of $number</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>$number x $i = " . ($number * $i) . "</td></tr>";
}

echo "</table>" ."<br>";
?>

<div class="container"  style="border: 1px solid black; padding: 20px;margin-top: 10px;margin-bottom: 10px;">
    <h3>Check number is odd or even:</h3>
<form method="POST">
    <input type="text" name="number" placeholder="Enter a number">
    <button type="submit">Check</button>
</form>

<?php
// Check if number is submitted and not empty
if(isset($_POST['number']) && !empty($_POST['number'])) {
    $number = $_POST['number'];
    // Check if number is even
    if ($number % 2 == 0) {
        echo "$number is an Even Number";
    } else {
        echo "$number is an Odd Number";
    }
}
?>
</div>

<!-- Calclate sum of number like 5 (1+2+3+4+5=15) -->
<div class="container" style="border: 1px solid black; padding: 20px;margin-top: 10px;margin-bottom: 10px;">
    <h3>Calculate the sum of number:</h3>
<form method="POST">
    <input type="number" name="number" placeholder="Enter a number">
    <button type="submit">Calculate Sum</button>
</form>

<?php
if(isset($_POST['number']) && !empty($_POST['number'])) {
    $n = $_POST['number'];
    $sum = 0;
    $i = 1;

    while ($i <= $n) {
        $sum += $i;
        $i++;
    }

    echo "The sum of first $n numbers is: $sum" . "<br>";
}
?>
</div>

<div class="container" style="border: 1px solid black; padding: 20px;margin-top: 10px;margin-bottom: 10px;">
    <h3>For Each method:   </h3>
<?php
$fruits = ["Apple", "Banana", "Cherry"];    
foreach($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>  
</div>  





