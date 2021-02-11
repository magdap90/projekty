<?php
session_start();
$conn = mysqli_connect("localhost","root","","silownia");
if ($conn->connect_error) {
	echo "nie dziala mysql, nie udalo polaczyc sie z baza";
    die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "mysql connection bangla ";
}

 if (isset($_POST['rejestruj']))
{
 echo " start metoda rejestruj/n ";
 $_SESSION['Err2']="";
 $imie = $_POST['firstname'];
 $nazwisko = ($_POST['lastname']);
 $email = $_POST['mail'];
 $username = $_POST['username1'];
 $password1 = $_POST['password1'];
 $password2 = $_POST['password2'];
 
 if (empty($email))
 {
	 $_SESSION['Err2']= "Podany email nie moze byc pusty.";
	 header('Location: 02.php');//przekierowywanie	
 }
 if (!empty($username))
 {
	 $_SESSION['Err2']= "Podany username nie moze byc pusty.";
	 header('Location: 02.php');//przekierowywanie	
 }
 if (empty($password1))
 {
	 $_SESSION['Err2']= "Podane haslo nie moze byc puste.";
	 header('Location: 02.php');//przekierowywanie	
 }
 if (empty($password1) & (empty($email)) & (empty($username)))
 {
	 $_SESSION['Err2']= "Podane pola nie moga byc puste.";
	 header('Location: 02.php');//przekierowywanie	
 }
 
 $sql = "SELECT * FROM uzytkownicy WHERE user = '".$username."'";
    $result = mysqli_query($conn,$sql);
	 if (mysqli_num_rows($result) > 0)
	 {
		 $_SESSION['Err2']= "Podany login jest już zajęty.";
		 header('Location: 02.php');//przekierowywanie
	 }
	 if ($password1 != $password2) // sprawdzamy czy hasła takie same
	 {
		 $_SESSION['Err2']= "Hasła są różne";
		 header('Location: 02.php');//przekierowywanie
	 }

    // szukam wolnego id aby sie wbic
    $row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_uzyt FROM uzytkownicy WHERE id_uzyt=(SELECT max(id_uzyt) FROM uzytkownicy)"));
    $nastepneWolneID = $row[0]+1;
	echo "wstawiam id: ";
	echo $nastepneWolneID;

	//dodawanie do bazy wszystko okej
	 $sql2= "INSERT INTO `uzytkownicy` (`id_uzyt`, `user`, `pass`, `email`) VALUES ('".$nastepneWolneID."', '".$username."', '".$password1."', '".$email."')";
	 if (mysqli_query($conn, $sql2)) 
	 {
		 $_SESSION['Err2']= "Gratulacje! Udało Ci się zarejestrować. Zaloguj się";
		 header('Location: 02.php');//przekierowywanie
	 }
	 else 
	 {
		 echo " Error: " . $sql . "<br>" . mysqli_error($conn);
	 }

};

?>