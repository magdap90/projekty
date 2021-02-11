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

 if (isset($_POST['dodaj_karnet']))
{
 echo " start metoda dodaj_karnet/n ";
 $_SESSION['Err']="";
 $nazwa = $_POST['nazwa'];
 $cena = $_POST['cena'];
 $czas = $_POST['czas'];
 $uwaga = $_POST['uwaga'];
 
 


    // szukam wolnego id aby sie wbic
    $row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_karnetu FROM karnet WHERE id_karnetu=(SELECT max(id_karnetu) FROM karnet)"));
    $nastepneWolneID = $row[0]+1;
	echo "wstawiam id: ";
	echo $nastepneWolneID;

	if (empty($nazwa))
	{
		$_SESSION['Err']= "Nie moze byc bez nazywy produktu.";
		//echo "Nie moze byc bez nazywy produktu.";
		header('Location: panel.php');//przekierowywanie	
	}

	//dodawanie do bazy wszystko okej
	 $sql2= "INSERT INTO `karnet` (`id_karnetu`, `nazwa`, `cena`, `czas`, `uwaga`) 
     VALUES ('".$nastepneWolneID."', '".$nazwa."','".$cena."', '". $czas."', '".$uwaga."')";
	 if (mysqli_query($conn, $sql2)) 
	 {
		// $_SESSION['Err']= "Gratulacje! Udało Ci się dodac karnet";
         header('Location: silowniapo.php');//przekierowywanie
         echo "dupaaaa";
	 }
	 else 
	 {
		 echo " Error: " . $sql . "<br>" . mysqli_error($conn);
	 }

};

?>