<?php
    
    require_once 'autoload.php';

    use App\Classes\Validator;
    use App\Classes\Employee;
    use App\Classes\Brigadier;

    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $validator = new Validator($_POST);
        $result = $validator->validate();

        if($result['error'] == false) {
            $params = $validator->getParams();
            if($params['itemtype'] === 'employee') {
                $item = new Employee($params['name'], $params['position'], $params['salary'], $params['instruments']);
            } else {
                $item = new Brigadier($params['name'], $params['position'], $params['salary'], $params['employees']);
            }

            $item->save();
        }

        $validator->getJsonData();
    }