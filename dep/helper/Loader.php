<?php
include_once __DIR__ . '/FileFolder.php';
class Loader
{
    public function __construct()
    {
    }

    private static function includeFolder($directory)
    {
        $items = FileFolder::getFileListFormDirectory($directory, 'php');
        foreach ($items as $item) {
            include_once $item;
        }
    }

    public static function loadFolder($directory)
    {
        self::includeFolder($directory);
    }
}
