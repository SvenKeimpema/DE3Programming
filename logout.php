<?php
    if(isset($_COOKIE["DE3UsernameCookie"])) {
        unset($_COOKIE["DE3UsernameCookie"]);
    }
    if(isset($_COOKIE["DE3EmailCookie"])) {
        unset($_COOKIE["DE3EmailCookie"]);
    }
    if(isset($_COOKIE["DE3PasswordCookie"])) {
        unset($_COOKIE["DE3PasswordCookie"]);
    }
    echo '<script type="text/javascript">
            window.location = "./index.php"
          </script>';
?>
