<?php

session_start();

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'] . '<br>';
    echo $_SESSION['age'];
}
