<?php
include("quary.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Correct Bootstrap CDN Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<div class="container   p-4">
  <h3 class="text-center ">Register</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text" name="uName" class="form-control" value="<?php echo $userName ?>" placeholder="">
            <small class="text-danger"><?php echo $userNameErr ?></small>
        </div>

        <div class="form-group">
            <label for="">Email:</label>
            <input type="text" name="uEmail" class="form-control" value="<?php echo $userEmail ?>" placeholder="">
            <small class="text-danger"><?php echo $userEmailErr ?></small>
        </div>

        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" name="uPassword" class="form-control" value="<?php echo $userPassword ?>" placeholder="">
            <small class="text-danger"><?php echo $userPasswordErr ?></small>
        </div>

        <div class="form-group">
            <label for="">Confirm Password:</label>
            <input type="password" name="uConfirmpassword" class="form-control" value="<?php echo $userConfirmpassword ?>" placeholder="">
            <small class="text-danger"><?php echo $userConfirmpasswordErr ?></small>
        </div>

        <button type="submit" class="btn btn-info mt-3" name="adduser">Register</button>
    </form>
</div>

</body>
</html>
