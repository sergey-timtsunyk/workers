<?php

namespace App\Classes\Files;

class FileJson extends File implements Filechange
{
    public function __construct(string $path, $mode = 'w+')
    {
        parent::__construct($path, $mode);
    }

    public function read()
    {
        return json_decode(file_get_contents($this->path), true);
    }

    public function write(array $data = [])
    {
        $json = json_encode($data);

        fwrite($this->handle, $json);
    }
}