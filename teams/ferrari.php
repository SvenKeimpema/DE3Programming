<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/master.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <img class="headerImage" src="../images/F1Header.jpg">

    <?php include 'teamsMenu.php'; ?>

    <div class="">
      <h2 style="text-align:center;">Ferrari</h2>
    </div><br>

    <!-- Carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/ferrari/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/ferrari/3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/ferrari/4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/ferrari/5.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="">
      <h4>Ferrari F1-75: Nieuwe formule 1-auto voor seizoen 2022.</h4>
      <p class="textHeader">Ferrari presenteert zijn nieuwe Formule 1-auto: de F1-75. Niet alleen met zijn naamgewving is de auto anders dan zijn voorgangers, ook het ontwerp én de livery aan
        behoorlijk op de schop.
      </p><br><br>
      <p>De naamgeving van Ferrari was vorig jaar logischer. Toen heette de auto immers nog SF21H. Nu maakt de Maranello daar F1-75 van. Dit jaar is het immers 75 jaar geleden dat de eerste
        productieauto van Ferrari, de 125 Sport, van de band rolde. Eerder deed Ferrari iets soortgelijks met de SF70H in 2017. De nieuwe auto oogt dankzij de gewijzigde regelgeving, net als
        de rest van het veld, behoorlijk anders dan zijn voorganger.
      </p>
      <p>De F1-75 liijkt met zijn koelribben boven de luchtinlaten op de eerder onthulde AMR22 van Aston Martin. Aan de achterkant loopt de Ferrari veel minder taps toe dan bijvoorbeeld de MCL36
        van McLaren. De achtervleugels van de Ferrari en McLaren lijken dan wel weer meer op elkaar, waarbij de vleugel van de Ferrari wel iets meer gebogen lijkt te zijn. Verder heeft de F1-75
        grotere endplates voorzien van kleine inkepingen aan de onderkant op de voorvleugel, 18-inch wielen met gladde wieldoppen en een livery die bestaat uit een combinatie van rood en donkerrood.
        Onder de kap lift dezelfde geblazen 1.6 V6 als vorig jaar, die ondersteuning krijgt van een MGU-H en MGU-K. Wel moet de motor nu volgens de reglementen op E10-brandstof draaien.
      </p>
      <p>Het eerder genoemde McLaren is een belangrijk ijkpunt, omdat die renstal vorig jaar de voornaamste concurrent was van Ferrari. De afgelopen jaren zijn niet al te best geweest voor de vermaarde
        Italiaanse Scuderia, maar vorig jaar toonde Ferrari teken van herstel. Waar het team in 2020 nog op de zesde plek eindigde in het constructeurskampioenschap, eindigde Ferrari vorig jaar als
        derde achter Mercedes en Red Bull, met 48.5 punten voorsprong op nummer vier McLaren. Dat was mede te danken aan de constante prestaties van zowel Carlos Sainz ( 164.5 punten ) als Charles
        Leclerc ( 159 punten ). Beide coureurs verscheinen ook dit jaar aan de start voor Ferrari en uiteraard hopen ze weer mee te kunnen doen voor de podiumplaatsen.
      </p>
      <center>
        <div class="">
          <img src="../images/ferrari/1.jpg" width="70%">
        </div>
      </center>
      <br>
      <p style="font-size: 11px; float: right; margin-right: 5px;">geplaats op: 17-02-2022 | door autoweek.nl</p>
    </div><br>

    <!-- popper & js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
