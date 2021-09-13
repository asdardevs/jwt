<?php

require __DIR__ . '/vendor/autoload.php';


if ($_COOKIE['rahmat-session']) {
    header('location: /index.php');
}

$key = "janhghjasdsejjsewoiejqwikjkwenriewqwhjdsjhsfbsnjasdhashdudhnewr34785438eshjd48475rijfndshfbsnjr w4487rwhysnhsasjajhsgdhjsad67atsyudjkasdhauikehquieyjgbdksaytutsjhbsajkasodkaasdfhrifjdskfs8763762784hjhjbhjbhjjdfiufsdhnnsuhfkndsmsmnj";
$payload = array(
    'username' => 'Asdarmld',
    'RAHMAT' => 'Asdarmld',
    'sal' => 'aa',
    'aa' => 'aa',
    'aaaa' => 'aa',
);



$jwt = \Firebase\JWT\JWT::encode($payload, $key);
setcookie('rahmat-session', $jwt);
