<?php

$sentence = $_POST['sentence'];

$badWords = array('badword1', 'badword2');

if (isset($_POST['submit'])) {
    foreach ($badWords as $badWord) {
        $sentence = str_replace($badWord, "****", $sentence);
    }

    echo $sentence;
}

