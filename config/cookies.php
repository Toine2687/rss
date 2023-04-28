<?php 
require_once __DIR__ . '/../config/const.php';


$displayTopics = (array)json_decode($_COOKIE['topics']);

$displayTopics = array_intersect(TOPICS, $displayTopics);


$displayNb = ($_COOKIE['articleNb']);
if (in_array($displayNb, ARTICLE_NB) == false){
    $displayNB = 6;
}

