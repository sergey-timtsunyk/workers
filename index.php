<?php 
    require_once 'autoload.php';

    $employees = App\Classes\Employee::getList();
    $brigadiers = App\Classes\Brigadier::getList();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <h1>Работники</h1>
            <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#employee_create">Создать работника</button>

            <?php 
                require_once 'templates/employees.php';
             ?>

        </div>
        <div class="col-md-6">
            <h1>Бригадиры</h1>
            <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#brigadier_create">Создать бригадира</button>

            <?php 
                require_once 'templates/brigadiers.php';
            ?>
        </div>
    </div>
    <?php 
        require_once 'templates/modals.php';
    ?>
    
    <script src="js/index.js"></script>
</body>
</html>