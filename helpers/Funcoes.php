<?php

session_start();

function formErro($campo)
{
    if (isset($_SESSION[$campo])) {
        echo '<small class="text-danger">';
        echo $_SESSION[$campo];
        unset($_SESSION[$campo]);
        echo '</small>';
    }
}