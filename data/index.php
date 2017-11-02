<?php

$username = 'bidulotron';
$userpass = 'jerky@ndS4ltyB33f!';
$id = '2';

$token = md5($username.$userpass.$id);

var_dump($token);
