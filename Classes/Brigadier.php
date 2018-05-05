<?php
namespace App\Classes;

use App\Classes\Employee;
use App\Classes\Files\FileJson;

class Brigadier extends Worker
{
    const DIR = 'items/brigadier';

    private $name;
    private $employeeList;
    private $workDescription;

    public function __construct($name, $position = 'master', int $salary = 300, array $employees = [])
    {
        parent::__construct($position, $salary);

        $this->id = static::countIds();
        $this->name = $name;
        $this->employeeList = $employees;
        $this->itemPath = self::DIR . '/' . $this->getId() . '.json';
    }

    /**
     * @return array of Employee objects
     */
    public function getEmployeeList()
    {
        return $this->employeeList;
    }


    public function getWorkDescription()
    {
        return $this->workDescription;
    }

    public function save()
    {
        $json = new FileJson($this->itemPath);

        $json->write([
                    'id' => $this->id, 
                    'name' => $this->name, 
                    'position' => $this->position,
                    'salary' => $this->salary,
                    'employees' => $this->employeeList,
                    ]);
    }
}