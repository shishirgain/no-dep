<?php
namespace App\Models\Helper;
class Path
{
    protected $path;
    protected $view;
    function __construct($path, $view)
    {
        $this->path = $path;
        $this->view = $view;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function getView()
    {
        return __DIR__ . '/../../..' . $this->view;
    }
}