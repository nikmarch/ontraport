<?php

class ConverterFactory {
    public static function getConverter($command, $input, $separator) {
        switch($command) {
        case 'multy':
            $instance = new MultyDimensionArrayConverter($input, $separator);
            break;
        case 'one': 
        default:
            $instance = new OneDimensionArrayConverter($input, $separator);
            break;
        }
        return $instance;
    }
}
