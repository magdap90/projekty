<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Moje konto</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <li><a href="06.php" class="text-dark">Historia zamówień</a></li>
      <li><a href="07.php" class="text-dark">Przedłóż karnet</a></li>
      <li><a href="08.php" class="text-dark">Zmiana hasła</a></li>
    </ul>
  </nav>

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
      <h2>Moje zamówione karnety</h2>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nazwa karnetu</th>
            <th scope="col">Data zamówienia</th>
            <th scope="col">Data ważności</th>
            <th scope="col">Koszt</th>
          </tr>
        </thead>
        <tbody>
          <?php //ZMIANA
$qry = mysqli_query($conn,"SELECT * FROM `zamowienie` INNER JOIN `karnet` ON zamowienie.id_karnetu = karnet.id_karnetu WHERE Id_uzyt='".$_SESSION['Id_uzyt']."'");
  ?>

          <?php while($row = mysqli_fetch_array($qry)) { ?>
          
          <tr>
            <th scope="row"><?php echo $row['nazwa']; ?></th>
             <td><?php echo $row['data_zakupu']; ?></td>
             <td><?php echo $row['data_waznosci']; ?></td>
            <td><?php echo $row['cena'];//KONIEC ZMIANAAAAA ?></td> 
          </tr>
          <?php } ?>
        </tbody>
      </table>
	  
	  
	  
	  
      <h2>Moje zamówione treningi personalne</h2>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nazwa treningu</th>
            <th scope="col">Data zamówienia</th>
            <th scope="col">Data ważności</th>
            <th scope="col">Koszt</th>
          </tr>
        </thead>
        <tbody>
          <?php //ZMIANA
$qry = mysqli_query($conn,"SELECT * FROM `zamowienietreningu` INNER JOIN `trening` ON trening.id_treningu = zamowienietreningu.id_treningu  WHERE Id_uzyt='".$_SESSION['Id_uzyt']."' ORDER BY `zamowienietreningu`.`id_zamowienia_treningu` ASC");
  ?>

          <?php while($row = mysqli_fetch_array($qry)) { ?>
          
          <tr>
            <th scope="row"><?php echo $row['nazwa']; ?></th>
             <td><?php echo $row['data_zakupu']; ?></td>
             <td><?php echo $row['data_waznosci']; ?></td>
            <td><?php echo $row['cena'];//KONIEC ZMIANAAAAA ?></td> 
          </tr>
          <?php } ?>
        </tbody>
      </table>
	  
	  <!--
	 
	 SPACJA
	 
	 -->
	 
	    <h2>Moje zamówione produkty</h2>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">Produkt</th>
            <th scope="col">Data zamówienia</th>
            <th scope="col">Koszt</th>
          </tr>
        </thead>
        <tbody>
       <?php //ZMIANA
$qry = mysqli_query($conn,"SELECT * FROM `zamowienie_produktu` INNER JOIN `produkt` ON produkt.id_produktu = zamowienie_produktu.id_produktu  WHERE Id_uzyt='".$_SESSION['Id_uzyt']."' ORDER BY `zamowienie_produktu`.`id_zam_produktu` ASC");
  ?>
  
          <?php while($row = mysqli_fetch_array($qry)) { ?>
          
          <tr>
            <th scope="row"><?php echo $row['nazwa_produktu']; ?></th>
             <td><?php echo $row['data_zakupu']; ?></td>
            <td><?php echo $row['cena'];//KONIEC ZMIANAAAAA ?></td> 
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </article>
  </main>
  <footer>
    <div class="row">
      <div class="col-md-2">
        <pre><b><i> Dane kontaktowe:</i></b><small>
  Galeria M
  al.1000-leciaP.P.8b
  15-111 Białystok
  tel: 85 653 99 55
  kom: 533 363 202</small></pre>
      </div>
      <div class="col-md-4">
        <pre><b><i>    Godziny otwarcia klubu: </i></b><small>
     Poniedziałek - Piątek  06.00 - 22.30 
     Sobota                 08.00 - 20.00 
     Niedziela              09.00 - 20.00</small></pre>
      </div>
      <div class="col-md-6"><img src="ok.jpg" alt="obrazek" width="665" height="200"></div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>