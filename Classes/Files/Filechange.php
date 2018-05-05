<?php

namespace App\Classes\Files;

interface Filechange
{
    public function read();
    public function write();
}