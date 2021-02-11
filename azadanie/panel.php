<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Panel administracyjny</title>
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
        
    </nav>
<main>
    <article class="artykul">
	 </br>
    <h2>Uzupełnij asortyment, jeśli jest nowy produkt:</h2>
	 </br> </br> 
         <ul>
            <li><button onclick="myFunction()" class="przycisk2">Dodaj nowy produkt</button></li>
            <li><button onclick="myFunction2()" class="przycisk2">Dodaj nowy karnet</button></li>
         </ul>

	  <div id="div1" style="display:none" class="center">
        </br> <h1>Dodaj nowy produkt</h1>
		 
		 			<div id="panel1">
				<form method="POST" action="dodawanie_prod.php">
					<span class="error">
						<?php
							if(isset($_SESSION['Err']))

						?>
					</span>
					<label for="nazwa_produktu">Nazwa produktu:</label>
					<input type="text" id="nazwa_produktu" name="nazwa_produktu"></br>

					<label for="producent">Producent:</label>
					<input type="text" id="producent" name="producent"></br>

					<label for="cena">Cena:</label>
					<input type="text" id="cena" name="cena"></br>


					<label for="zdjecie">Zdjęcie:</label>
					<input type="file" id="zdjecie" name="zdjecie" accept="image/x-png,image/jpeg"></br>

					<label for="opis">Opis produktu:</label>
					<textarea rows="4" cols="50" name="opis"></textarea></br>
					
					<div id="lower1">
            <input type="submit" value="Dodaj" name="dodaj_prod">
					</div>

					</div>
				</form>
      </div>
      </div>
      <div id="div2" style="display:none" class="center">
         </br> <h1>Dodaj nowy karnet</h1>
		 
		 			<div id="panel1">
				<form method="POST" action="dodawanie_karnetu.php">
					<span class="error">
						<?php
							if(isset($_SESSION['Err']))
							echo $_SESSION['Err'];
						?>
					</span>
					<label for="nazwa">Nazwa karnetu:</label>
					<input type="text" id="nazwa" name="nazwa"></br>

					<label for="cena">Cena:</label>
					<input type="text" id="cena" name="cena"></br>

					<label for="czas">Czas:</label>
					<input type="text" id="czas" name="czas"></br>


					<label for="uwaga">Uwaga:</label>
					<textarea rows="4" cols="50" name="uwaga"></textarea></br>
					
					<div id="lower1">
            <input type="submit" value="Dodaj" name="dodaj_karnet">
					</div>

					</div>
				</form>
      </div>
      </div>
		 
		  </br> </br> </br> </br> </br> </br> 
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

      <script>
         function myFunction() {
           var x = document.getElementById("div1");
           if (x.style.display === "none") {
             x.style.display = "block";
           } else {
             x.style.display = "none";
           }
         }
         
         function myFunction2() {
           var x = document.getElementById("div2");
           if (x.style.display === "none") {
             x.style.display = "block";
           } else {
             x.style.display = "none";
           }
         }
      </script>
</body>
</html>