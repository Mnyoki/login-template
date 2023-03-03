<?php

require_once '../login/login.php';

$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die('db access failed');

$query = "create table if not exists userInfo(
          fname varchar(255) not null, lname varchar(255) not null, uname varchar(255) not null unique, email varchar(255) not null unique, password varchar(255) not null)";

$result = $connection->query($query);
if (!$result) die('quering failed');

if (
    isset($_POST['fname']) &&
    isset($_POST['lname']) &&
    isset($_POST['uname']) &&
    isset($_POST['email']) &&
    isset($_POST['password'])
) {
    $fname = get_post($connection, 'fname');
    $lname = get_post($connection, 'lname');
    $uname = get_post($connection, 'uname');
    $email = get_post($connection, 'email');
    $password = get_post($connection, 'password');
    $repass = get_post($connection, 're-password');


    $hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "select * from userInfo where uname='$uname'";
    $result = $connection->query($query);
    if (!$result) die("request failed");

    $rows = $result->fetch_array(MYSQLI_NUM);

    if (empty($rows))
    {
        $query = "select * from userInfo where email='$email'";
        $result = $connection->query($query);
        if (!$result) die('request failed');

        $rows = $result->fetch_array(MYSQLI_NUM);

        if (empty($rows))
        {
            if ($password === $repass) {
                echo "password pass <br>";
                add_user($connection, $fname, $lname, $uname, $email, $hash);

                echo header("Location: ../index.php");
            } else echo "password don't match";
        }
        else echo " email already in use";
    }
    else echo "name taken";
}

$connection->close();

function get_post($connection, $var)
{
    return $connection->real_escape_string($_POST[$var]);
}

function add_user($connection, $fname, $lname, $uname, $email, $hash)
{
    $stmt = $connection->prepare("insert into userInfo values(?, ?, ?, ?, ?)");
    $stmt->bind_param('sssss', $fname, $lname, $uname, $email, $hash);
    $stmt->execute();
    $stmt->close();
}
