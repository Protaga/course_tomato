<?php
setcookie('cookieLastname', $user['lastname'], time() - 60 * 60 * 12, "/");
setcookie('cookieName', $user['name'], time() - 60 * 60 * 12, "/");
setcookie('cookieMiddlename', $user['middlename'], time() - 60 * 60 * 12, "/");
setcookie('cookieEmail', $user['email'], time() - 60 * 60 * 12, "/");
setcookie('cookieAddress', $user['address'], time() - 60 * 60 * 12, "/");

header('Location: ../html/main.php')
    ?>