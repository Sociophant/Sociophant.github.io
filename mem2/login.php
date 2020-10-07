<?php
$username = $_POST["username"];
$password = $_POST["password"];

$password = sha1($password);

if ($username == "Chimera" && $password == "2851fe99dff2c69366d80ded344a9a5a9fdb7046") {
  header('Location: index.html');
}