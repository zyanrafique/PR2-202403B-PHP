<?php
include("dbcon.php")
?>

<?php
$userName = $userEmail = $userPassword  = $userConfirmpassword = "";
$userNameErr = $userEmailErr = $userPasswordErr  = $userConfirmpasswordErr = "";

if(isset($_POST['register'])){
    $userName = $_POST['uName'];
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPassword'];
    $userConfirmpassword = $_POST['uConfirmpassword'];
    
    if(empty($userName)){
        $userNameErr = "NAme is requird";
    }
    if(empty($userEmail)){
        $userEmailErr = "Email is required";

    }
    if(empty($userPassword)){
        $userPasswordErr = "Password is requird";
    }
    if(empty($userEmail)){
        $userConfirmpasswordErr = "confirm password  is required";

    }
     
    else{
        if($userConfirmpassword != $userPassword){
            $userConfirmpasswordErr = "Password does not match";
        }
    }
if(empty($userNameErr) && empty($userEmailErr) && empty($userPasswordErr) && empty($userConfirmpasswordErr)) {
    $checkQuery = $pdo->prepare("SELECT * FROM users WHERE email = :uEmail");
    $checkQuery->bindParam(':uEmail', $userEmail);
    $checkQuery->execute();
    
    if($checkQuery->rowCount() > 0) {
      $userEmailErr = "Email already exists";
    } else {
        $query = $pdo->prepare("INSERT INTO users(name, email, password) VALUES (:uName, :uEmail, :uPassword)");
        $query->bindParam(':uName', $userName);
        $query->bindParam(':uEmail', $userEmail);
        $query->bindParam(':uPassword', $userPassword);
        $query->execute();
        
        echo "<script>alert('User registered successfully!'); location.assign('signin.php');</script>";
    }
}

    
}
?>
