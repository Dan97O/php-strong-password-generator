
<?php
function passwordGenerate($length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"#$%&/\():;<>*+-.,=?@[]^_`{|}~';
    $password = str_shuffle($chars);
    return substr($password, 0, $length);
}
?>