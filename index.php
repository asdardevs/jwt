<?php
require __DIR__ . '/vendor/autoload.php';


// require __DIR__ . '/login.php';

if (!$_COOKIE['rahmat-session']) {
    header('location: /login.php');
}


$key = "janhghjasdsejjsewoiejqwikjkwenriewqwhjdsjhsfbsnjasdhashdudhnewr34785438eshjd48475rijfndshfbsnjr w4487rwhysnhsasjajhsgdhjsad67atsyudjkasdhauikehquieyjgbdksaytutsjhbsajkasodkaasdfhrifjdskfs8763762784hjhjbhjbhjjdfiufsdhnnsuhfkndsmsmnj";
$jwt = $_COOKIE['rahmat-session'];
$decoded = \Firebase\JWT\JWT::decode($jwt, $key, array('HS256'));
print_r($decoded);
