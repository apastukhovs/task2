<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="calculator">
    <h3>Calculator</h3>
    <div class="display">
      <p>
    	   <?php echo "Summa: " . $a . ' + ' . $b . ' = ' . $sum; ?>
      </p>
      <p>
    	   <?php echo "Subtraction: " . $a . ' - ' . $b . ' = ' . $min; ?>
      </p>
      <p>
    	   <?php echo "Multiplication: " . $a . ' * ' . $b . ' = ' . $multiple; ?>
      </p>
      <p>
    	   <?php echo "Devision: " . $a . ' / ' . $b . ' = ' . $divide; ?>
      </p>
      <p>
    	   <?php echo "Square root: " . '&#8730;' . $a . ' = ' . $square; ?>
      </p>
      <p>
         <?php echo "Percents: " . $a . ' % ' . $b . ' = ' . $percent; ?>
      </p>
      <p>
         <?php echo 'Memory: ( ' . $a . ' + ' . $b.' )' . ' * ' . $d.' = ' . $result; ?>
      </p>
    </div>
  </div>
</body>
</html>