<?php

spl_autoload_register(function($class_name){

    $filename = "Class".DIRECTORY_SEPARATOR.$class_name . ".php";

    if (file_exists(($filename))){
        require_once($filename);
    } 
    
    else {
        echo "Aquivo não encontrado" . $filename;
    }
});

?>
