<?php

spl_autoload_register(function($class){
    include $class.".php";
});

$input = json_decode(file_get_contents('./multi-dimentional.json'), true);

// show input
echo "Input array:\n";
print_r($input);
echo "\n";

$converter = new OneDimensionArrayConverter($input, AbstractArrayConverter::DEFAULT_SEPARATOR);
$result = $converter->convert();

print_r($result);
