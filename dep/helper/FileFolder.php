<?php
class FileFolder
{
    private static $files = [];

    public function __construct() {
         
    }

    public static function getFileListFormDirectory($dir, $ext = '*')
    {
        $pattern = "/.*.$ext/";
        $file_list = scandir($dir);
        unset($file_list[array_search('.', $file_list, true)]);
        unset($file_list[array_search('..', $file_list, true)]);
        if (count($file_list) < 1) return;
        foreach ($file_list as $file) {
            if (is_dir($dir . '/' . $file)) self::getFileListFormDirectory(($dir . '/' . $file), $ext);
            else {
                if (preg_match($pattern, $file)) {
                    array_push(self::$files, $dir . '/' . $file);
                }
            }
        }
        return self::$files;
    }
}
