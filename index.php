<?
include 'config.php';
include 'Calculator.php';

$calculator = new Calculator();

$calculator->setFirstNum(9);
$calculator->setSecondNum(4);

$a = $calculator->getFirstNum();
$b = $calculator->getSecondNum();

$sum = $calculator->getSum();
$min = $calculator->getMin();
$square = $calculator->getSquare();
$divide = $calculator->getDiv();
$multiple = $calculator->getMultiple();
$percent = $calculator->getPercent();
$calculator->setMemory($multiple);
$memory = $calculator->getMemory();

$calculator->setFirstNum($memory);
$c = $calculator->getFirstNum();
$d = $calculator->getSecondNum();

$result = $calculator->getMultiple($c, $d);

include './templates/index.php';
?>
