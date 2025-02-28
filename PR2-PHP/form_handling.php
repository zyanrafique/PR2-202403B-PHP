<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    

<div class="container p-4 m-5">
  <h1 class="ml-4 p-5">FORM HANDLING</h1>
  <div class="col-md-6">
     <form action="" method="GET">   <!-- mehtode POST , GET -->
    <div class="form-group">
      <label for="">Name:</label>
      <input type="text" name=" userName" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Email:</label>
      <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <button class="btn btn-info mt-4"  type="submit"  name="adduser">submit</button>
    </form>
    </div>
</div>
</body>
</html>
<?php
// POT Mehtod
// if(isset($_POST['adduser'])){
//     $userName = $_POST['userName'];
//     $userEmail = $_POST['userEmail'];
//     echo $userName . " " . $userEmail ;
// }
    

// GET Mehtod

if(isset($_GET['adduser'])){
    $userName = $_GET['userName'];
    $userEmail = $_GET['userEmail'];
    echo $userName . " " . $userEmail;
}
?>