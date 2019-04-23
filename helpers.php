<?php

if (!class_exists('dd')) {
    function dd($var)
    {
        $method = is_null($var) ? var_dump($var) : print_r($var);

        echo "<pre>";
        $method;
        echo "</pre>";
        exit;
    }
}

if (!class_exists('output')) {
    function output($var)
    {
        echo $var;
    }
}
