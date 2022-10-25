<?php

$globalVariable = 'グローバル変数です';

function checkScope($str) {
  $localVariable = 'ローカル変数です';
  echo $localVariable;

  global $globalVariable;
  echo $globalVariable;

  echo $str;
}

echo $globalVariable;
echo $localVariable;

checkScope();

checkScope($globalVariable);

?>