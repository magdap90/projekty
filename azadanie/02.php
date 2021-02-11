<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Logowanie</title>
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
			<h2>
				<b>Logowanie:</b>
			</h2>
			<div id="panel">
				<form method="POST" action="logowanie.php">
					<b>Login:</b>
					<input type="text" name="login">
					<br>
					<b>Hasło:</b>
					<input type="password" name="haslo">
					<br>
					<?php
						if(isset($_SESSION['zalogowany']))
						{
							header('Location: 01.php');
						}
						//else echo "Wpisano złe dane.";
						?> 
					<input type="submit" value="Zaloguj" name="loguj">
				</form>
			</div>
		</article>
		<aside class="side">
			<p>
				<b>Rejestracja:</b>
			</p>
			<div id="panel1">
				<form method="POST" action="rejestracja.php">
					<span class="error">
						<?php
							if(isset($_SESSION['Err2']))
							echo $_SESSION['Err2'];
						?>
					</span>
					<label for="firstname">Imię:</label>
					<input type="text" id="firstname" name="firstname">

					<label for="lastname">Nazwisko:</label>
					<input type="text" id="lastname" name="lastname">

					<label for="mail">Adres email:</label>
					<input type="text" id="mail" name="mail">


					<label for="username1">Nazwa użytkownika:</label>
					<input type="text" id="username1" name="username1">

					<label for="password1">Hasło:</label>
					<input type="password" id="password1" name="password1">

					<label for="password2">Powtórz hasło:</label>
					<input type="password" id="password2" name="password2">
					<div id="lower1">
						<input type="submit" value="Rejestruj" name="rejestruj">
					</div>
				</form>
			</div>
		</aside>
	</main>

</body>

</html>