<?
include 'config.php';
include 'Calculator.php';

$calculator = new Calculator();

$calculator->setFirstNum(39);
$calculator->setSecondNum(22);

$a = $calculator->getFirstNum();
$b = $calculator->getSecondNum();

$sum = $calculator->getSum($a, $b);
$min = $calculator->getMin($a, $b);
$square = $calculator->getSquare($a);
$divide = $calculator->getDiv($a, $b);
$multiple = $calculator->getMultiple($a, $b);
$percent = $calculator->getPercent($a, $b);
$calculator->setMemory($multiple);
$memory = $calculator->getMemory();


$calculator->setFirstNum($memory);
$c = $calculator->getFirstNum();
$d = $calculator->getSecondNum();

$result = $calculator->getMultiple($c, $d);

include './templates/index.php';
?>