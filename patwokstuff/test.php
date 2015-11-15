<?php

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];

    $myArray = Array($number1, $number2, $number3);

   echo '<pre>';
    print_r ($myArray);
    echo '</pre>';


?>