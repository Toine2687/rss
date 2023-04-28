<?php 
require_once __DIR__ . '/../config/const.php';


$displayTopics = (array)json_decode($_COOKIE['topics']);

$displayTopics = array_intersect(TOPICS, $displayTopics);


if (in_array($displayNB, ARTICLE_NB) == true){
$displayNb = ($_COOKIE['articleNb']);
}else {
    $displayNB = 6;
}
