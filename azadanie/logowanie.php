<?php
session_start();
$conn = mysqli_connect("localhost","root","","silownia");

if ($conn->connect_error) {
	echo "nie dziala mysql";
    die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "mysql connection bangla ";
}

 if (isset($_POST['loguj']))
{
 echo " start metoda loguj";
$login = $_POST['login'];
$haslo = $_POST['haslo'];
 echo $login;
$sql = "SELECT * FROM uzytkownicy WHERE user = '".$login."' AND pass = '".$haslo."'";
//$sql = "SELECT * FROM uzytkownicy WHERE user = '".$login."'";
    $result = mysqli_query($conn,$sql);
	 if (mysqli_num_rows($result) > 0)
	 {
		$row = mysqli_fetch_array($result);
		 echo " ZALOGOWANO";
		 $_SESSION['zalogowany'] = true;
		 $_SESSION['login'] = $row['user'];
		 $_SESSION['Id_uzyt'] = $row['id_uzyt'];
		 $_SESSION['typ'] = $row['rodzaj_uzyt'];
		
		 echo $_SESSION['login'];
		 header('Location: 01.php');//przekierowywanie
	 }
   else 
   {
	   echo "Wpisano złe dane.";
   header('Location: 02.php');
   }
}
?>