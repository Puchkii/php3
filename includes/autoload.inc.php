<?php
spl_autoload_register('my_autoloader');

function my_autoloader($className) {
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $path . $className .$ext;

    if (!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
}
?>