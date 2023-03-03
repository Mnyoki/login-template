<?php

require_once '../login/login.php';

$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die('db access failed');

if (isset($_POST['username']) && isset($_POST['password']))
{
    $username = get_post($connection, 'username');
    $passwordLogin = get_post($connection, 'password');

    $query = "select * from userInfo where uname='$username'";

    $result = $connection->query($query);

    if (!$result) die ('select from db failed');
    elseif ($result->num_rows)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        //$result->close;

        if (isset($_POST['submit']))
        {

        
        if (password_verify($passwordLogin, $row[4])) echo header("Location: ../pages/index.php");  
        /* echo htmlspecialchars("$row[0] $row[1] : you are logged in as $row[2]");
        else echo ('invalid username or password.');*/
        }
    }
    else die ('invalid username or password.');

   
}
