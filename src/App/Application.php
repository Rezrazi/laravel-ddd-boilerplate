<?php

namespace App;

class Application extends \Illuminate\Foundation\Application
{
    protected $namespace = 'App\\';
    protected $databasePath = __DIR__ . '/Database';
    protected $appPath = __DIR__;

    public function resourcePath($path = '')
    {
        return $this->appPath . DIRECTORY_SEPARATOR . 'Resources' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}
