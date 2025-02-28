<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

<div class="container"></div>
<form action="" method="POST" class="form-control">
<label for="Days">Days</label>
<select name="selectday" id="" class="form-control">
    <option value="Select">select</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
</select>
<button class="btn btn-info"  name="submit">Submit</button>
</form>

</body>
</html>

<?php
 if (isset($_POST['submit']) ) {
    $selectdays = $_POST['selectday'];
    echo $selectdays;
 switch($selectdays){
case 'Monday':
    echo 'Your Monday Meal is crai';
    break;
    case 'Tuesday':
        echo 'Your tuesday Meal is ';
        break;
        case 'Wednesday':
            echo 'Your wednesday Meal is crai';
            break;
            case 'Thursday':
                echo 'Your Thursday Meal is cheken';
                break;
                case 'Friday':
                    echo 'Your friday Meal is mix vagetable';
                    break;
                    case 'Satuday':
                        echo 'Your saturday Meal is daal chawal';
                        break;
                        case 'Sunday':
                            echo 'Your sunday Meal is Biryani';
                            break;

 }
}
?>
