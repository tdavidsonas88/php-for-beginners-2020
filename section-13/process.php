<?php

if (isset($_POST['submit'])) {
    setcookie('name', $_POST['name'], time() + 600);
    setcookie('age', $_POST['age'], time() + 600);
    setcookie('colour', $_POST['colour'], time() + 600);
}
