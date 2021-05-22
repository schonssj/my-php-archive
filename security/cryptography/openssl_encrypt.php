<?php
define('SECRET_IV', pack('a16', 'password'));
define('SECRET', pack('a16', 'password'));

$data = ["name"=>"John"];
// Encrypting data with openssl_encrypt. Parameters: the data, the cipher algorithm, Password 1, the options param (idk how to use this), Password 2.
$openssl = openssl_encrypt(json_encode($data), 'AES-128-CBC', SECRET, 0, SECRET_IV);
echo $openssl;

// Decrypting data with openssl_decrypt.
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
var_dump(json_decode($string, true));
