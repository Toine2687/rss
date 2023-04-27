<?php 
require_once __DIR__ . '/../config/const.php';


$displayTopics = (array)json_decode($_COOKIE['topics']);

$displatTopics = array_intersect(TOPICS, $displayTopics);
var_dump($displayTopics);
