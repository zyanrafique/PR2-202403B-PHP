<!-- /**
 * Demonstrates various string manipulation functions in PHP, including:
 * - Splitting a string into an array using `explode()`
 * - Printing the array using `print_r()`
 * - Extracting the file extension from a filename
 * - Checking if a file extension is valid
 * - Counting the number of words in a string using `str_word_count()`
 * - Getting the length of a string using `strlen()`
 * - Comparing two strings using `strcmp()`
 * - Reversing a string using `strrev()`
 * - Converting a string to lowercase using `strtolower()`
 * - Capitalizing the first letter of a string using `ucfirst()`
 * - Replacing a substring within a string using `str_replace()`
 */ -->
<?php
$str="Hello world! i'm zyan here";
$strarray= explode(' ' ,$str);
print_r($strarray);
echo "<br>";

$fileName="image.jpg";
$filearray= explode('. ' ,$fileName); //output array(0 => image, 1 => jpg)
print_r($filearray); //output array(0 => image, 1 => jpg)
echo "<br>"; 
$output=$filearray[count($filearray)-1] ; //output jpg
echo $output ."<br>";
if ($output == "png" || $output == "jpeg") {
    echo "valid extension"; 
} else {
    echo "invalid extension";
}

echo "<br>"; 
echo str_word_count($str);//output 5
echo "<br>"; 
echo strlen($str);//output 23
echo "<br>";

$stdName = "admin";
$userAuth = strcmp($stdName, 'admin' );
if ($userAuth == 0) {
    echo "admin login"; 
} else {
    echo "invalid login";

}

$pmName = "Asif";
echo strrev($pmName) . "<br>"; //output fisa
echo strtolower($pmName) . "<br>"; //output asif
echo ucfirst($pmName) . "<br>"; //output Asif
echo str_replace("Asif", "Hassan", $pmName) . "<br>";//output Hassan

?>
