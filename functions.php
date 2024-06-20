<?php
session_start();
$chars = $_GET['lettere'] ?? 0;
$numbers = $_GET['numeri'] ?? 0;
$special = $_GET['speciali'] ?? 0;
function passwordGenerator($length, $chars, $numbers, $special)
{
    $data = '1234567890ABCDEFGHIJKLMOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!"%&/()=?^*_;';
    $data_char = 'ABCDEFGHIJKLMOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $data_num = '1234567890';
    $data_special = '!"%&/()=?^*_;';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        if ($chars != 0 && $numbers != 0 && $special != 0) {
            $password .= substr(str_shuffle($data), 0, 1);
        } elseif ($chars != 0 && $numbers != 0) {
            $data = '';
            $data .= $data_char . $data_num;
            $password .= substr(str_shuffle($data), 0, 1);
        } elseif ($chars != 0 && $special != 0) {
            $data = '';
            $data .= $data_char . $data_special;
            $password .= substr(str_shuffle($data), 0, 1);
        } elseif ($numbers != 0 && $special != 0) {
            $data = '';
            $data .= $data_num . $data_special;
            $password .= substr(str_shuffle($data), 0, 1);
        } elseif ($chars != 0) {
            $data = '';
            $data .= $data_char;
            $password .= substr(str_shuffle($data), 0, 1);
        } elseif ($numbers != 0) {
            $data = '';
            $data .= $data_num;
            $password .= substr(str_shuffle($data), 0, 1);
        } elseif ($special != 0) {
            $data = '';
            $data .= $data_special;
            $password .= substr(str_shuffle($data), 0, 1);
        } else {
            $password .= substr(str_shuffle($data), 0, 1);
        }
    }
    return $password;
};

$_SESSION['password'] = passwordGenerator($l_password, $chars, $numbers, $special);
