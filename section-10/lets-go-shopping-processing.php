<?php

if (isset($_POST['submit'])) {
    $creditCard = $_POST['credit-card'];
    $creditCardNumbers = str_split($creditCard);
    $creditCardNumbers = array_reverse($creditCardNumbers);

    $oddPositionSum = 0;
    $evenPositionSum = 0;
    $i = 1;

    foreach ($creditCardNumbers as $digit) {
        if ($i % 2 == 1) {
            $oddPositionSum += $digit;
        } else {
            $multipliedNumber = $digit * 2;
            if ($multipliedNumber > 9) {
                $evenPositionSum += $multipliedNumber - 9;
            } else {
                $evenPositionSum += $multipliedNumber;
            }
        }
        $i++;
    }

    $total = $oddPositionSum + $evenPositionSum;
    $last4 = substr($creditCard, -4, 4);
    if ($total % 10 == 0) {
        echo 'Your credit card number ending in ' . $last4 . ' is valid';
    } else {
        echo 'Your credit card number ending in ' . $last4 . ' is invalid';
    }
}




