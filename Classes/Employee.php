<?php

namespace App\Classes;

use App\Classes\Files\FileJson;

class Employee extends Worker
{
    const DIR = 'items/employee';

    private $name;
    private $instrumentList;

    public function __construct($name, $position = 'worker', int $salary = 150, array $instruments = [])
    {
        parent::__construct($position, $salary);

        $this->name = $name;
        $this->instrumentList = $instruments;
        $this->itemPath = self::DIR . '/' . $this->getId() . '.json';
    }

    public function getInstrumentList()
    {
        return $this->instrumentList;
    }

    /**
     *
     */
    public function save()
    {
        $json = new FileJson($this->itemPath);

        $json->write([
            'id' => $this->id,
            'name' => $this->name,
            'position' => $this->position,
            'salary' => $this->salary,
            'instruments' => $this->instrumentList,
        ]);
    }
}