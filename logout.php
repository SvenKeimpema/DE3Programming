<?php
    if(isset($_COOKIE["DE3UsernameCookie"])) {
        unset($_COOKIE["DE3UsernameCookie"]);
        setcookie("DE3UsernameCookie", null);
    }
    if(isset($_COOKIE["DE3EmailCookie"])) {
        unset($_COOKIE["DE3EmailCookie"]);
        setcookie("DE3EmailCookie", null);
    }
    if(isset($_COOKIE["DE3PasswordCookie"])) {
        unset($_COOKIE["DE3PasswordCookie"]);
        setcookie("DE3PasswordCookie", null);

    }
    echo '<script type="text/javascript">
            window.location = "./index.php"
          </script>';
?>
