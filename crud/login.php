<?php
include("quary.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Correct Bootstrap CDN Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<div class="container p-5">
    <form action="" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="uEmail" id="email" class="form-control" value="<?php echo $userEmail ?>" placeholder="Enter your email">
            <small class="text-danger"><?php echo $userEmailErr ?></small>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="uPassword" id="password" class="form-control" value="<?php echo $userPassword ?>" placeholder="Enter your password">
            <small class="text-danger"><?php echo $userPasswordErr ?></small>
        </div>

        <button type="submit" class="btn btn-info mt-3" name="userlogin">Login</button>
    </form>
</div>

</body>
</html>
