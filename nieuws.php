<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/newsText.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <img class="headerImage" src="./images/F1Header.jpg">
    <?php include 'menu.php'; ?>

    <div class="">
      <h2 style="text-align:center;">Nieuws</h2>
      <br>
      <center>
       <?php

        $host = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "de3database";

        $conn = mysqli_connect($host, $username, $pass, $dbname);

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


        if(isset($_POST["comment"]) && isset($_COOKIE["DE3UsernameCookie"])) {
            $comment = $_POST["comment"];
            $sql = "INSERT INTO cammond (username, comm) VALUES ('" . $_COOKIE["DE3UsernameCookie"] . "', '".$comment."')";
            if($conn->query($sql) === TRUE) {
              $comment = null;
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
    if(isset($_POST["comment"]) && !isset($_COOKIE["DE3UsernameCookie"])) {
      echo "<h3> je moet eerst inloggen! </h3>";
    }
    ?>
    <center>
     <?php
        $host = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "de3database";

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
    </center>
    </div>

    <!-- popper & js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
