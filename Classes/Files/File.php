<?php
namespace App\Classes\Files;

abstract class File
{
    protected $handle;
    protected $path;

    public function __construct(string $path, $mode)
    {
        $this->handle = fopen($path, $mode);
        $this->path = $path;
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}