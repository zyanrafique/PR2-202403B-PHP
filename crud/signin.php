<?php
include("quary.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQJnLQ8H0Fs20P7KKoNfFcczUu0A2qA9E7B2wLgtG3rE6UqBgJp5Y9X2q" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <form action="" method="POST">
<div class="form-group">
  <label for="">Name:</label>
  <input type="text" name="uName" id=""  class="form-control" value="<?php echo $userName ?>" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-danger"><?php echo $userNameErr   ?></small>
</div>
<div class="form-group">
  <label for="">Email:</label>
  <input type="text" name="uEmail" id=""  class="form-control" value="<?php echo $userEmail ?>" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-danger"><?php echo $userEmailErr   ?></small>
</div>
<div class="form-group">
  <label for="">Password:</label>
  <input type="text" name="uPassword" id=""  class="form-control" value="<?php echo $userPassword ?>" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-danger"><?php echo $userPasswordErr   ?></small>
</div>
<div class="form-group">
  <label for="">ConfirmPassword:</label>
  <input type="text" name="uConfirmpassword" id=""  class="form-control" value="<?php echo $userConfirmpassword ?>" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-danger"><?php echo $userConfirmpasswordErr   ?></small>
</div>
<button type="submit" class="btn btn-info" name="register">Register</button>
    </form>
</div>
</body>
</html>
