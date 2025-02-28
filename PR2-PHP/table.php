<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAble</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

<div class="container p-5 m-4">
    <form action="" method="POST">
        <input type="text" name="tablenumber"  placeholder="ENTER A NUMBER" class="input">
        <button class="btn btn-info" name="sub">Submit</button>
    </form>
</div>
</body>
</html>

<?php
if(isset($_POST['sub'])){
    $inputVal = $_POST['tablenumber'];

?>
 <table class="table table-striped table-inverse table-responsive">
    <tbody>
    <?php
    for($i=1; $i<=10 ; $i++){
?>

<tr>
            <td> <?php echo$inputVal?></td>
            <td> <?php echo 'x' ?></td>
            <td> <?php echo $i?></td>
            <td> <?php echo '=' ?></td>
            <td> <?php echo $i *$inputVal?></td>
        </tr>
       

        <?php
    }
?>
    
    </tbody>
 </table>
<?php
}
?>
