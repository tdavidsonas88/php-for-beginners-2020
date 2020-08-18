<?php

session_start();

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'] . '<br>';
}

if (isset($_SESSION['age'])) {
    echo $_SESSION['age'];
}
