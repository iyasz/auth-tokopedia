<?php

$page = $_GET['page'];

if ($page == 'login') {
    include "views/auth/login.php";
} elseif ($page == 'register') {
    include "views/auth/register.php";
} elseif ($page == "home") {
    include "views/home/index.php";
}
