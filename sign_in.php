<?php

if (!isset($_SESSION['user']))
{
  session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $email = (isset($_POST['email'])) ? $_POST['email'] : null;
  $password = (isset($_POST['password'])) ? $_POST['password'] : null;

  if (!empty($email) && !empty($password))
  {
    $db = new SQLite3('db/db.sqlite');
    $query = $db->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
    $query->bindValue(1, $email, SQLITE3_TEXT);
    $query->bindValue(2, $password, SQLITE3_TEXT);
    $result = $query->execute();

    if (empty($result))
    {
      $error = true;
    }
    else
    {
      header('Location: news.php');
    }
  }
  else {
    $error = true;
  }
}

include 'views/sign_in.html.php';
?>
