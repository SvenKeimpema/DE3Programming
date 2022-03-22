<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/newsText.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <img class="headerImage" src="./images/F1Header.jpg">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="./images/logo.png" width="50" height="50" role="img" alt="Boosted" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./nieuws.php">Nieuws</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Teams
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./teams/alfaromeo.html">Alfa Romeo</a></li>
                <li><a class="dropdown-item" href="./teams/alphatauri.html">Alpha Tauri</a></li>
                <li><a class="dropdown-item" href="./teams/alpine.html">Alpine</a></li>
                <li><a class="dropdown-item" href="./teams/astonmartin.html">Aston Martin</a></li>
                <li><a class="dropdown-item" href="./teams/ferrari.html">Ferrari</a></li>
                <li><a class="dropdown-item" href="./teams/haas.html">Haas</a></li>
                <li><a class="dropdown-item" href="./teams/mclaren.html">Mc Laren</a></li>
                <li><a class="dropdown-item" href="./teams/mercedes.html">Mercedes</a></li>
                <li><a class="dropdown-item" href="./teams/redbull.html">Red Bull</a></li>
                <li><a class="dropdown-item" href="./teams/williams.html">Williams</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">User</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="">
      <h2 style="text-align:center;">Nieuws</h2>
      <br>
      <center>
       <?php 
      
        $host = "localhost";
        $username = "id18579870_base";
        $pass = "DCdbLogin890!";
        $dbname = "id18579870_comment";
        
        $conn = mysqli_connect($host, $username, $pass, $dbname);
      
        function str_contains($haystack, $needle) {
            return $needle !== '' && mb_strpos($haystack, $needle) !== false;
        }
        
        function strCheck($checkStr) {
            return !str_contains($checkStr, "label") && !str_contains($checkStr, "consent-placeholder__title") && !str_contains($checkStr, "beginnen met uploaden") && !str_contains($checkStr, "versturen") && !str_contains($checkStr, "adblocker") && !str_contains($checkStr, "class");
        }
        
        include('simple_html_dom.php');
        
        $websiteUrl = "https://www.nu.nl/nu-formule-1/";
        $html = file_get_html($websiteUrl);
        $url = "https://www.nu.nl";
        
        foreach($html->find("a") as $a) {
            $b = (string) $a->attr['href'];
            if(strpos($b, "/nu-formule-1") !== false) {
                $url = $url . $b;
                echo "<br>";
                break;
            }
        }
        
        $html2 = file_get_html($url);
        
        $list = $html2->find("img");
        
        $print = substr($list[3], 0, -28);
        $print = $print . "width=\"958\" height= \"500\"";
        $print = $print . ">";
        
        echo $print;
        
        $list = $html2->find("p");
        
        for($i = 0; $i < sizeof($list); $i++) {
            $tempStr = (string) $list[$i];
            if(strCheck($tempStr)) {
                echo $list[$i];
            }
        }
        
        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else {
            echo "connected!!";
        }
        
        
        if(isset($_POST["comment"])) {
            $comment = $_POST["comment"];
            $sql = "INSERT INTO cammond (username, comm) VALUES ('" . $_COOKIE["DE3UsernameCookie"] . "', '".$comment."')";
            if($conn->query($sql) === TRUE) {
                echo "sql was succesfull";
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
       ?>
      
      <br><br>
      <p>
          <em>
              <strong>
                  al deze informatie komt van nu.nl vandaan
              </strong>
          </em>
      </p>
      </center>
      
      <br><br>
      
      <div class="card">
        <div class="row">
            <!--<div class="col-2"> <img src="https://i.imgur.com/xELPaag.jpg" width="70" class="rounded-circle mt-2"> </div>-->
            <div class="col-10">
                <div class="comment-box ml-2">
                    <h4>Add a comment</h4>
                    <form method="POST">
                        <div class="comment-area"> <textarea id="comment" name="comment" class="form-control" placeholder="what is your view?" rows="4"></textarea> </div>
                        <div class="comment-btns mt-2">
                            <div class="row">
                                <div class="col-6">
                                    <div class="pull-right"> <button class="btn btn-success send btn-sm">Submit <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <?php 
        $host = "localhost";
        $username = "id18579870_base";
        $pass = "DCdbLogin890!";
        $dbname = "id18579870_comment";
        
        $conn = @mysqli_connect($host, $username, $pass, $dbname);
        
        $sql = "SELECT * FROM cammond";
        $result = $conn->query($sql);
        echo "<br>";
        if ($result != null && $result->num_rows > 0) {
    		while($row = mysqli_fetch_assoc($result)) {
    			echo "<div> <h4>" . $row["username"] . "</h4></div><div class=\"solid\"> " . $row["comm"] . "</div><br><br>";
    		}
    	}
        
      ?>
      <br><br>
    </div>

    <!-- popper & js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
