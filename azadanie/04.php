<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>O nas</title>
<meta charset="UTF-8">
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
        
        <h3><span class="badge badge-danger">  ZBIERAJ PUNKTY!  </span></h3>
        <h2><span class="badge badge-pill badge-primary">Jak działa?</span></h2>
        <p>     Zbierz 1000 punktów na karcie, a dostaniesz darmowy karnet OPEN z wjazdem do najlepszych klubów fitness na cały miesiąc!</p>
        
        <table class="table table-striped table-success">
  <tbody>
    <tr>
      <th scope="row">COMFORT</th>
      <td>1 miesiac</td>
      <td>59 zł</td>
      <td>100 punktów</td>
    </tr>
    <tr>
      <th scope="row">OPEN</th>
      <td>1 miesiac</td>
      <td>99 zł</td>
      <td>150 punktów</td>
    </tr>
    <tr>
      <th scope="row">COMFORT</th>
      <td>2 miesiące</td>
      <td>118 zł</td>
      <td>150 punktów</td>
    </tr>
    <tr>
      <th scope="row">OPEN</th>
      <td>2 miesiace</td>
      <td>198 zł</td>
      <td>200 punktów</td>
    </tr>
    <tr>
      <th scope="row">COMFORT</th>
      <td>3 miesiące</td>
      <td>159 zł</td>
      <td>200 punktów</td>
    </tr>
    <tr>
      <th scope="row">OPEN</th>
      <td>3 miesiące</td>
      <td>269 zł</td>
      <td>300 punktów</td>
    </tr>
  </tbody>
</table>
        
<h2><span class="badge badge-pill badge-primary">JAK ODEBRAĆ DARMOWY KARNET OPEN?</span></h2>
        <pre>   Gdy już zbierzesz przynajmniej 1000 punktów, możesz wymienić je na miesięczny karnet OPEN.
    Wystarczy, że w formularzu zakupu, w menu wyboru płatności, zaznaczysz opcję PUNKTY. 
    Liczba punktów na Twoim koncie automatycznie pomniejszy się o 1000. 
    Po odebraniu karnetu OPEN nadal możesz brać udział w akcji, zbierać punkty i odbierać kolejne karnety.</pre>
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