<?php
print_r($argv);
var_dump($argv);

echo "Input first number: ";
fscanf(STDIN, "%d\n", $number_1);
echo "Input second number: ";
fscanf(STDIN, "%d\n", $number_2);
//var_dump($number_2);

if (is_int($number_1) && is_int($number_2)) if ($number_2 !== 0) {
  //echo "Result: " . $number_1 / $number_2 . PHP_EOL;
  fwrite(STDOUT, "Result: " . $number_1 / $number_2 . PHP_EOL);

} else {
  echo "Делить на 0 нельзя" . PHP_EOL;
  //fwrite(STDERR, "Делить на 0 нельзя" . PHP_EOL);

      } else {
  echo "Введите, пожалуйста, число" . PHP_EOL;
}
