<?php

session_start();

require "../app/core/init.php";

$url = $_GET['url'] ?? 'home';
$url = strtolower($url);
$url = explode("/", $url);
