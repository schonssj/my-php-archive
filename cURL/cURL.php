<?php
$cep = "88520-000";
$link = "https://viacep.com.br/ws/$cep/json/";
// The curl_init() function initialize a cURL session.
$ch = curl_init($link);
// The curl_setopt() function sets an option on the given cURL session handle.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// The curl_exec() function perform a cURL session.
$response = curl_exec($ch);
// The curl_close() function close a cURL session.
curl_close($ch);
// The received data must be decoded.
$data = json_decode($response, true);
print_r($data);
