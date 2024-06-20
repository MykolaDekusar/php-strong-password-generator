<?php
session_start();
$l_password = $_GET['lunghezzaP'] ?? 0;
function passwordGenerator($length)
{
    $data = '1234567890ABCDEFGHIJKLMOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!"%&/()=?^*_;';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= substr(str_shuffle($data), 0, 1);
    }
    return $password;
};

$_SESSION['password'] = passwordGenerator($l_password);
