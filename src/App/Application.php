<?php

namespace App;

class Application extends \Illuminate\Foundation\Application
{
    protected $namespace = 'App\\';
    protected $databasePath = 'src\\App\\Database';
    protected $appPath = 'src\\App';

    public function resourcePath($path = '')
    {
        return $this->appPath.DIRECTORY_SEPARATOR.'Resources'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
