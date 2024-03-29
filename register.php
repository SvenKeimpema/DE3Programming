<?php

    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "de3database";
    $tempConn = @mysqli_connect($host, $username, $pass, $dbname);

	if (!$tempConn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $existingEmailFound = false;
    $existingUsernameFound = false;
	if(isset($_POST["username"]) && isset($_POST["emailAddr"]) && isset($_POST["password"])){
	    $username = $_POST["username"];
	    $email = $_POST["emailAddr"];
	    $pass = $_POST["password"];
	    $sql = "SELECT * FROM webUser";
	    $result = $tempConn->query($sql);
	    $index = 0;

	    if ($result != null && $result->num_rows > 0) {
    		while($row = mysqli_fetch_assoc($result)) {
    			$sql = "UPDATE webUser SET id=\"$index\" WHERE id=\"" . $row["id"] . "\"";
    			$tempConn->query($sql);
    			$index += 1;
    		}
    	}

		$sql = "SELECT * FROM webUser";
	    $result = $tempConn->query($sql);
	    if ($result != null && $result->num_rows > 0) {
    		while($row = mysqli_fetch_assoc($result)) {
    			if($row["email"] == $email) {
    			    $existingEmailFound = true;
    			    break;
    			}else if($row["username"] == $username) {

    			}
    		}
    	}

	    if(!$existingEmailFound && !$existingUsernameFound) {
	        $sql = "INSERT INTO `webUser`(`username`,`email`, `pass`) VALUES('$username', '$email', '$pass')";
     	    if ($tempConn->query($sql) === FALSE) {
     	        echo $tempConn->error;
     	    }
	        $tempConn->close();
	    }else {
	        echo "username or email found!";
	    }

        setcookie("DE3UsernameCookie", $username);
		setcookie("DE3EmailCookie", $email);
		setcookie("DE3PasswordCookie", $pass);

		echo '<script type="text/javascript">
                window.location = "./index.php"
              </script>';
    	die();
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/loginStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>testing</title>
  </head>
  <body>
		<div class="">
			<a href="#" onclick="history.back()">Terug naar vorige pagina</a>
		</div>
    <div class="text-center mt-5">
      <form style="max-width: 350px; margin: auto" method="post">
        <img class="mt-4 mb-4" src="images/logo.png" height="100">
        <h1 class="mb-3 font-weight-normal">register</h1>
        <input type="username" id="username" name="username" class="form-control mb-1" placeholder="Vul username hier in" required autofocus>
        <input type="email" id="emailAddr" name="emailAddr" class="form-control mb-1" placeholder="Vul email hier in" required autofocus>
        <input type="password" id="password" name="password" class="form-control" placeholder="Vul password hier in">
        <div class="checkbox mt-3">
        </div>
        <div class="mt-3">
          <button class="btn btn-lg btn-primary">register</button>
        </div>
				<div class="">
					<p>Om in te loggen <a href="./login.php">Klik hier!</a></p>
				</div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
