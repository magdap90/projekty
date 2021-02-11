<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Siłownia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
<link href="stylaktalizacji.css" rel="stylesheet">
</head>
<body>
<?php
//sql
  $conn = mysqli_connect("localhost","root","","silownia");
if ($conn->connect_error) {
	echo "nie dziala mysql";
    die("Connection failed: " . $conn->connect_error);
}
include('header.php');
?>
    <nav id="menuzalogowanego">
        <ul>
            <li><a href="silowniaprzed.php" class="text-dark">Karnety</a></li>
            <li><a href="treningiprzed.php" class="text-dark">Treningi personalne</a></li>
        </ul>
    </nav>
<main>
    <article class="artykul">
    <h2>Wybierz swój ulubiony karnet!</h2>
<table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">Karnet</th>
            <th scope="col">Cena</th>
            <th scope="col">Czas trwania karnetu (w miesiącach)</th>
            <th scope="col">Opis</th>

          </tr>
        </thead>
        <tbody>
          <?php
$qry = mysqli_query($conn,"SELECT * FROM `karnet` ");
  ?>

          <?php while($row = mysqli_fetch_array($qry)) { ?>
          
          <tr>
            <th scope="row"><?php echo $row['nazwa']; ?></th>
             <td><?php echo $row['cena']; ?></td>
             <td><?php echo $row['czas']; ?></td>
             <td><?php echo $row['uwaga']; ?></td>

          </tr>
          <?php } ?>
        </tbody>
      </table>

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