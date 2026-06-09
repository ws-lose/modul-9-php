<?php
session_start();

$users = [
    "Ali"     => "password1",
    "Bona"    => "password2",
    "Charlie" => "password3",
    "Dede"    => "password4",
    "Emon"    => "password5"
];

$username = $_POST['username'];
$password = $_POST['password'];

if(array_key_exists($username, $users))
{
    if($users[$username] == $password)
    {
        $_SESSION['username'] = $username;

        header("Location: home.php");
    }
    else
    {
        header("Location: login.php?pesan=Password yang dimasukkan salah");
    }
}
else
{
    header("Location: login.php?pesan=Username tidak terdaftar");
}
?>