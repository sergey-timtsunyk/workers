<?php
namespace App\Classes;

use App\Classes\Files\FileJson;

abstract class Worker
{
    const DIR = 'items/worker';

    protected $id;
    protected $salary;
    protected $position;
    protected $itemPath;

    public function __construct($position = 'worker', $salary = 150)
    {
        $this->id = static::countIds();
        $this->position = $position;
        $this->salary = $salary;
    }

    static protected function countIds()
    {
        $dir = opendir(static::DIR);
        $count = 1;
        while($file = readdir($dir)){
            if($file == '.' || $file == '..' || is_dir($dir . $file)){
                continue;
            }
            $count++;
        }
       return $count;
    }

    static public function getList()
    {
        $items = [];
        $counts = static::countIds();

        for ($i=1; $i < $counts; $i++) { 
            $itempath = static::DIR . '/' . $i . '.json';

            if(file_exists($itempath)) {
                $json = new FileJson($itempath, 'r');
                $itemTemp = $json->read();
                $items[$itemTemp['id']] = $itemTemp;
            }
        }

        if(count($items) > 0) {
            return $items;
        }

        return false;
    }

    static public function removeItem($id)
    {
        $itempath = static::DIR . '/' . $id . '.json';

        if(file_exists($itempath)) {
            unlink($itempath);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setSalary($value)
    {
        $this->salary = $value;
    }
    public function setPostition($value)
    {
        $this->position = $value;
    }
}