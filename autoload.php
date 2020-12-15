<?php

spl_autoload_register(function(string $path) {
    $path = str_replace('\\', '/', $path);
    $path = str_replace('Alura/Banco', 'src', $path);
    spl_autoload($path, '.php');
});
