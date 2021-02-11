<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Basen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
<link href="stylaktalizacji.css" rel="stylesheet">
</head>
<body>
<?php
    include('header.php');
?>
<main>
    <article class="artykul">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="kar1.jpg" class="d-block w-100" alt="kot" width="1340" height="200">
            </div>
            <div class="carousel-item">
                <img src="kar2.jpg" class="d-block w-100" alt="xxx" width="1340" height="200">
            </div>
            <div class="carousel-item">
                <img src="kar3.jpg" class="d-block w-100" alt="panda" width="1340" height="200">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        
        <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Limit czasowy</th>
      <th scope="col">Rodzaj biletu</th>
      <th scope="col" colspan="2">Poniedziałek - Piątek</th>
      <th scope="col" colspan="2">Sobota, Niedziela, Świeta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"></td>
      <td><b>do 14:00</b></td>
      <td><b>po 14:00</b></td>
      <td><b>do 14:00</b></td>
      <td><b>po 14:00</b></td>
    </tr>
    <tr>
      <th scope="row" rowspan="3">1,5 godz.</th>
      <td>Normalny</td>
      <td>13,00 zł</td>
      <td>19,00 zł</td>
      <td>19,00 zł</td>
      <td>25,00 zł</td>
    </tr>
    <tr>
      <td>Ulgowy</td>
      <td>9,00 zł</td>
      <td>13,00 zł</td>
      <td>13,00 zł</td>
      <td>18,00 zł</td>
    </tr>
        <tr>
      <td>Rodzinny</td>
      <td>8,00 zł</td>
      <td>11,00 zł</td>
      <td>11,00 zł</td>
      <td>15,00 zł</td>
    </tr>
          <tr>
      <th scope="row" rowspan="3">2,5 godz.</th>
      <td>Normalny</td>
      <td>17,00 zł</td>
      <td>25,00 zł</td>
      <td>25,00 zł</td>
      <td>32,00 zł</td>
    </tr>
    <tr>
      <td>Ulgowy</td>
      <td>12,00 zł</td>
      <td>18,00 zł</td>
      <td>18,00 zł</td>
      <td>23,00 zł</td>
    </tr>
        <tr>
      <td>Rodzinny</td>
      <td>10,00 zł</td>
      <td>15,00 zł</td>
      <td>15,00 zł</td>
      <td>19,00 zł</td>
    </tr>
  </tbody>
</table>
        <span class="badge badge-danger">UWAGA!</span>
        <h2>Dopłata za każdą rozpoczętą 1 minutę powyżej limitu czasowego wynosi 0,35 zł!</h2>
    </article>
</main>
    <footer>
<div class="row">
  <div class="col-md-2"><pre><b><i> Dane kontaktowe:</i></b><small>
  Galeria M
  al.1000-leciaP.P.8b
  15-111 Białystok
  tel: 85 653 99 55
  kom: 533 363 202</small></pre></div>
  <div class="col-md-4">            <pre><b><i>    Godziny otwarcia klubu: </i></b><small>
     Poniedziałek - Piątek  06.00 - 22.30 
     Sobota                 08.00 - 20.00 
     Niedziela              09.00 - 20.00</small></pre></div>
  <div class="col-md-6"><img src="ok.jpg" alt="obrazek" width="665" height="200"></div>
</div>        
    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>