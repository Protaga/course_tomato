<?php
$lastname = filter_var(
    trim($_POST['lastname']),
    FILTER_SANITIZE_STRING
);

$name = filter_var(
    trim($_POST['name']),
    FILTER_SANITIZE_STRING
);

$middlename = filter_var(
    trim($_POST['middlename']),
    FILTER_SANITIZE_STRING
);

$email = filter_var(
    trim($_POST['email']),
    FILTER_SANITIZE_STRING
);

$pass = filter_var(
    trim($_POST['password']),
    FILTER_SANITIZE_STRING
);

$address = filter_var(
    trim($_POST['address']),
    FILTER_SANITIZE_STRING
);

$mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
$result = $mysql->query("SELECT * FROM `users`
  WHERE `email` = '$email'");

$user = $result->fetch_assoc();
$mysql->close();
if (count($user) == 0) {
    $pass = md5($pass);

    $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
    $mysql->query("INSERT INTO `users` (`lastname`, `name`, `middlename`, `email`, `pass`, `address`)
    VALUES('$lastname', '$name', '$middlename', '$email', '$pass', '$address')");

    $mysql->close();
    $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
    $result = $mysql->query("SELECT * FROM `users`
    WHERE `email` = '$email' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();

    setcookie('cookieLastname', $user['lastname'], time() + 60 * 60 * 12, "/");
    setcookie('cookieName', $user['name'], time() + 60 * 60 * 12, "/");
    setcookie('cookieMiddlename', $user['middlename'], time() + 60 * 60 * 12, "/");
    setcookie('cookieEmail', $user['email'], time() + 60 * 60 * 12, "/");
    setcookie('cookieAddress', $user['address'], time() + 60 * 60 * 12, "/");

    header('Location: ../html/profile.php');
} else {
    header('Location: ../html/error-reg.php');
    exit;
}
?>