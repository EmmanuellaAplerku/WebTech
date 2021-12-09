<?php

require __DIR__ . '/my_add_functions.php';
include __DIR__ . '/other_functions.php';

echo "Hello! Welcome to My Math Tutor <br>";
echo "<br>";
echo "The sum of your entries is: <br>";
echo add(15,25);
echo "<br>";
echo "<br>";
echo "The product of your entry and 100 is: <br>";
echo multiply(28);

?>