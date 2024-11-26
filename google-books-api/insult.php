<?php

header('Content-Type: application/json; charset=utf-8');

$ch = curl_init("https://pirate.monkeyness.com/api/insult");

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);

$data = array(
    'insult' => $response
);

echo json_encode($data);