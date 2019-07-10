<?php

if (!class_exists('toMoney')) {
    function toMoney($amount, $currency = 'R$') {
        return $currency . ' ' . number_format($amount, 2, ',', '.');
    }
}

if (!class_exists('dd')) {
    function dd($var) {
        $method = is_null($var) ? var_dump($var) : print_r($var);

        echo "<pre>";
        $method;
        echo "</pre>";
        exit;
    }
}

if (!class_exists('output')) {
    function output($var) {
        echo $var;
    }
}

function exception_handler($exception) {
  echo "<b>Uncaught exception:</b> " , $exception->getMessage() . " on " . $exception->getFile() . " line " . $exception->getLine();
}

set_exception_handler('exception_handler');