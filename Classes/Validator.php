<?php

    namespace App\Classes;

    class Validator
    {
        private $params;
        private $errors;

        public function __construct(array $params = [])
        {
            // if($params['itemtype'] == 'brigadier') {
            //     if(!isset($params['employees'])) {
            //         $params['employees'] = [];
            //     }
            // }
            foreach ($params as $key => $value) {
                if($key != 'employees') {
                    $value = trim($value);
                    $value = strip_tags($value);
                    $value = htmlspecialchars($value);
                    //$value = iconv('Windows-1251', 'utf-8', $value);
                }

                $this->params[$key] = $value;
            }
            $this->errors['error'] = false;
        }

        public function getParams()
        {
            return $this->params;
        }

        public function validate()
        {
            foreach ($this->params as $key => $value) {

                if($key == 'salary') {
                    $value = (int) $value;
                }
                if($key == 'instruments') {
                    $this->params[$key] = explode(',', $value);
                }
                if(empty($value)) {
                    $this->errors['error'] = true;
                    $this->errors['fields'][] = $key;
                    $this->errors['status'][$key] = "Invalid $key";
                }
            }

            if($this->errors['error'] == false) {
                $this->errors['status'] = 'SUCCESS!';
            }

            return $this->errors;
        }

        public function getJsonData()
        {
            echo json_encode($this->errors);
        }
    }