<?php

$page = $_GET['page'];

if ($page == 'login') {
    include "views/auth/login.php";
}
