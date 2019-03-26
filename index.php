<?
include 'config.php';
include 'calc.php';

$calc = new Calculator();

echo $calc->getSum(8, 9);
echo $calc->getMin(8, 9);
echo $calc->getSquare(8);

include './templates/index.php';
?>