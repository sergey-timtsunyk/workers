<?php
    spl_autoload_register(function($class)
    {
        $arrayPath = explode('\\', $class);
        array_shift($arrayPath);
        $path = implode('/', $arrayPath);

        $classPath = sprintf('%s.php', $path);

        require_once $classPath;
    });