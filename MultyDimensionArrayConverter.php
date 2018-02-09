<?php

class MulryDimesionArrayConvertor {
  const MULTY_DIMENTION = 'multy';
  protected $input;

  public function __construct(Array $input) {
    $this->input = $input;
  }

  public function convert($to_dimention) {
    $result = [];
    switch($to_dimention) {
      case self::MULTY_DIMENTION:
        $this->convertMultiToOneDimention($this->input, $result);
        break;
    }
    return $result;
  }

  function convertMultiToOneDimention($input, &$result, &$result_key = '') {

    foreach($input as $key => $value) {

      $new_key = $result_key ? sprintf("%s/%s", $result_key, $key) : sprintf("%s", $key);

      if (is_array($value)) {
        $this->convertMultiToOneDimention($value, $result, $new_key);
      } else {
        $result[$new_key] = $value;
      }
    }

  }

  function convertOneToMultiDimention($input) {

  }

}
