<?php

switch ($menu) {
    case 'uservasarlas':
        require_once './pages/uservasarlas.php';
        break;
    case 'logout':
        require_once './pages/logout.php';
        break;
    case 'login':
        require_once './pages/login.php';
        break;
    case 'regisztracio':
        require_once './pages/regisztracio.php';
        break;
    case'sikeres':
        require_once './pages/sikeres.php';
        break;
    case 'home':
        if ($id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
            require_once './pages/Tvmodositas.php';
        } else {
            require_once './pages/home.php';
        }
        break;
    default:
        require_once './pages/home.php';
        break;
}

