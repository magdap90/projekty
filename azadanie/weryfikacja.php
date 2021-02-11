<?php
session_start();

$conn2 = mysqli_connect("localhost","root","","dane");

if ($conn2->connect_error) {
	echo "nie dziala mysql";
    die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "mysql polaczylo z sql dane ";
}
$conn = mysqli_connect("localhost","root","","silownia");

if ($conn->connect_error) {
	echo "nie dziala mysql";
    die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "mysql polaczylo z sql silownia ";
}
 if (isset($_POST['weryfikuj_studenta']))
{
 echo " start metoda weryfikuj studenta";
 $_SESSION['Err']="";
$nr_albumu = $_POST['nr_albumu'];

 echo $nr_albumu;
$sql = "SELECT * FROM osoba WHERE nr_albumu = '".$nr_albumu."' ";
//$sql = "SELECT * FROM uzytkownicy WHERE user = '".$login."'";
	$result = mysqli_query($conn2,$sql);
	 if (mysqli_num_rows($result) > 0)
	 {
		
		$row = mysqli_fetch_array($result);

		 echo "Zweryfikowano";
		 $_SESSION['zweryfikowany'] = true;
		 $_SESSION['nr_albumu'] = $row['nr_albumu']; 
		
		 echo $_SESSION['nr_albumu'];
		 // szukam wolnego id aby sie wbic id_zamowienia
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_zamowienia FROM zamowienie WHERE id_zamowienia=(SELECT max(id_zamowienia) FROM zamowienie)"));
$nastepneWolneID = $row[0]+1;
echo "wstawiam id: ";
echo $nastepneWolneID;
$id = 5;// odbieram id jaki chce kupic, wysylam do tabeli
echo $id;
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT czas FROM `karnet` WHERE id_karnetu ='".$id."'"));// do bazy po id i sprawdzam ile trwa 
$czasTrwania= $row[0];//karnet ile miesiecy
echo " +'".$czasTrwania."' month";// wyswietlam dane
echo "</br>";
$today = date('Y-m-d');// pobieram dzisiejsza date w wskazanym stringu formacie
echo $today;
$endDate =  date('Y-m-d', strtotime($today ."+".$czasTrwania." month"));// tworzenie daty wygasniecia karnetu poprzez dodanie do 
echo "</br>";//dzisiejszej daty czas trwania karnetu
echo $endDate;
// sql aby usunąć rekord
 $sql = "INSERT INTO `zamowienie` (`id_zamowienia`, `id_uzyt`, `id_karnetu`, `data_zakupu`, `data_waznosci`)
 VALUES ('".$nastepneWolneID."', '".$_SESSION['Id_uzyt']."', '".$id."', '".$today."', '".$endDate."');";
// policzylam wszystkie potrzebne dane dodaje do karnetu ^
if (mysqli_query($conn, $sql)) {
    //echo "<br> Gratulacje kupiłeś karnet";
    header('Location: 06.php');//przekierowanie
}else {
    echo "<br> Wystapił blad podczas kupowania: " . mysqli_error($conn);
} 
mysqli_close($conn);
		// header('Location: 01.php');//przekierowywanie
	 }
   else 
   {
	   $_SESSION['Err']= "Nie ma takiego numeru albumu";
	   echo "<br>Nie ma takiego numeru albumu </br>";
        header('Location: student.php');//przekierowywanie
        // die;	
   }
}
elseif (isset($_POST['weryfikuj_emeryta']))
{
 echo " start metoda weryfikuj emeryta";
 $_SESSION['Err']="";
$pesel = $_POST['pesel'];

 echo $pesel;
$sql = "SELECT * FROM osoba WHERE pesel = '".$pesel."' ";
//$sql = "SELECT * FROM uzytkownicy WHERE user = '".$login."'";
	$result = mysqli_query($conn2,$sql);
	 if (mysqli_num_rows($result) > 0)
	 {
		
		$row = mysqli_fetch_array($result);

		 echo "Zweryfikowano";
		 $_SESSION['zweryfikowany'] = true;
		 $_SESSION['pesel'] = $row['pesel']; 
		
		 echo $_SESSION['pesel'];
		 // szukam wolnego id aby sie wbic id_zamowienia
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_zamowienia FROM zamowienie WHERE id_zamowienia=(SELECT max(id_zamowienia) FROM zamowienie)"));
$nastepneWolneID = $row[0]+1;
echo "wstawiam id: ";
echo $nastepneWolneID;
$id = 6;// odbieram id jaki chce kupic, wysylam do tabeli
echo $id;
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT czas FROM `karnet` WHERE id_karnetu ='".$id."'"));// do bazy po id i sprawdzam ile trwa 
$czasTrwania= $row[0];//karnet ile miesiecy
echo " +'".$czasTrwania."' month";// wyswietlam dane
echo "</br>";
$today = date('Y-m-d');// pobieram dzisiejsza date w wskazanym stringu formacie
echo $today;
$endDate =  date('Y-m-d', strtotime($today ."+".$czasTrwania." month"));// tworzenie daty wygasniecia karnetu poprzez dodanie do 
echo "</br>";//dzisiejszej daty czas trwania karnetu
echo $endDate;
// sql aby usunąć rekord
 $sql = "INSERT INTO `zamowienie` (`id_zamowienia`, `id_uzyt`, `id_karnetu`, `data_zakupu`, `data_waznosci`)
 VALUES ('".$nastepneWolneID."', '".$_SESSION['Id_uzyt']."', '".$id."', '".$today."', '".$endDate."');";
// policzylam wszystkie potrzebne dane dodaje do karnetu ^
if (mysqli_query($conn, $sql)) {
    echo "<br> Gratulacje kupiłeś karnet";
    header('Location: 06.php');//przekierowanie
}else {
    echo "<br> Wystapił blad podczas kupowania: " . mysqli_error($conn);
} 
mysqli_close($conn);
		// header('Location: 01.php');//przekierowywanie
	 }
   else 
   {
	   $_SESSION['Err']= "Nie ma takiego numeru albumu";
	   echo "<br>Nie ma takiego numeru albumu </br>";
        header('Location: emeryt.php');//przekierowywanie
        // die;	
   }
}
?>