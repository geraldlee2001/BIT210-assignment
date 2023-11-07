<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// Your secret key (must match the one used for encoding)
$key = 'bit210';

// The JWT you want to decode\
if ($_COOKIE['token']) {
  $jwt = $_COOKIE['token']; // Replace with the actual JWT you want to decode
  $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
  echo
  @!!$decoded ? "<a class=\"btn btn-primary w-20\" id='profile'> " . $decoded->username . "</a>"
    : ' <a class="btn btn-primary w-20" href="./login.html">Login</a>';
} else {
  echo ' <a class="btn btn-primary w-20" href="./login.html">Login</a>';
}
