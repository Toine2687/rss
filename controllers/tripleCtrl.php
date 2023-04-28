<?php
require_once __DIR__ . '/../config/init.php';





if (empty($_COOKIE)) {
    header('location: /controllers/parametersCtrl.php');
}

include __DIR__ . '/../views/header.php';
include __DIR__ . '/../views/triple.php';
include __DIR__ . '/../views/footer.php';
