<?php 
    require_once 'autoload.php';

    use App\Classes\Employee;
    use App\Classes\Brigadier;

    if($_POST['type'] == 'employee') {
        Employee::removeItem($_POST['id']);
    } else {
        Brigadier::removeItem($_POST['id']);
    }
?>