<?php

// snakeCase
check_postal_code();

$postalCode = '123-4567';

// camelCase
function checkPostalcode($str) {
  $replaced = str_replace('-', '', $str);
  $length = strlen($replaced);

  if($length === 7) {
    return true;
  }
  return false;
}


?>