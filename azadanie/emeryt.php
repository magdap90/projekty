<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Weryfikacja</title>
	<meta charset="UTF-8">
	<link href="style.css" rel="stylesheet">
	<link href="style2.css" rel="stylesheet">
	<link href="stylaktalizacji.css" rel="stylesheet">
</head>
<body>
<?php
    include('header.php');
?>
	<main>
		<article class="artykul">
			<h3>
				<b>A więc jesteś emerytem... Udowodnij! Wpisz swój pesel i zatwierdź.</b>
			</h3>
			<div id="panel">
				<form method="POST" action="weryfikacja.php"> 
					<b>Pesel:</b>
					<input type="text" name="pesel">
					<br>
					 <?php
						if(isset($_SESSION['zweryfikowany']))
						{
							//header('Location: silowniapo.php');
						}  
						//else echo "Nie jesteś emerytem, kłamczuszku...";
						?> 
					<input type="submit" value="Zatwierdź" name="weryfikuj_emeryta">
				</form>
			</div>
						 </br> </br> </br> </br> </br> </br> 
		</article>

	</main>

 <footer>
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Dane kontaktowe: </th>
      <th scope="col">Godziny otwarcia klubu:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Galeria M</td>
      <td>Poniedziałek - Piątek  06.00 - 22.30</td>
    </tr>
    <tr>
      <td>al.1000-leciaP.P.8b</td>
      <td>Sobota 08.00 - 20.00</td>
    </tr>
    <tr>
      <td>15-111 Białystok</td>
      <td>Niedziela 09.00 - 20.00</td>
    </tr>
	    <tr>
      <td>tel: 85 653 99 55</td>
    </tr>    
	<tr>
      <td>kom: 533 363 202</td>
    </tr>
  </tbody>
</table>    
    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>