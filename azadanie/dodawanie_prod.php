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

 if (isset($_POST['dodaj_prod']))
{
 echo " start metoda dodaj_prod/n ";
 $_SESSION['Err']="";
 $nazwa_produktu = $_POST['nazwa_produktu'];
 $producent = ($_POST['producent']);
 $cena = $_POST['cena'];
 $zdjecie = $_POST['zdjecie'];
 $opis = $_POST['opis'];
 
 


    // szukam wolnego id aby sie wbic
    $row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_produktu FROM produkt WHERE id_produktu=(SELECT max(id_produktu) FROM produkt)"));
    $nastepneWolneID = $row[0]+1;
	echo "wstawiam id: ";
	echo $nastepneWolneID;

	if (empty($nazwa_produktu))
	{
		echo "Nie może być bez nazwy produktu.";
		header('Location: panel.php');//przekierowywanie	
	}

	//dodawanie do bazy wszystko okej
	 $sql2= "INSERT INTO `produkt` (`id_produktu`, `nazwa_produktu`, `producent`, `cena`, `zdjecie`, `opis_produktu`)
	  VALUES ('".$nastepneWolneID."', '".$nazwa_produktu."', '".$producent."', '".$cena."', '".$zdjecie."', '".$opis."')";
	 if (mysqli_query($conn, $sql2)) 
	 {
		// $_SESSION['Err']= "Gratulacje! Udało Ci się dodac prdukt";
		 header('Location: skleppo.php');//przekierowywanie
	 }
	 else 
	 {
		 echo " Error: " . $sql . "<br>" . mysqli_error($conn);
	 }

};

?>