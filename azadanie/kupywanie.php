<?php
session_start();
  //sql
  $conn = mysqli_connect("localhost","root","","silownia");
if ($conn->connect_error) {
	echo "nie dziala mysql";
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['Bay']))
{
  if($_POST['id']== 5) { header('Location: student.php');}
  elseif($_POST['id']== 6) { header('Location: emeryt.php');}
  else{

	
// szukam wolnego id aby sie wbic id_zamowienia
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_zamowienia FROM zamowienie WHERE id_zamowienia=(SELECT max(id_zamowienia) FROM zamowienie)"));
$nastepneWolneID = $row[0]+1;
echo "wstawiam id: ";
echo $nastepneWolneID;
$id = $_POST['id'];// odbieram id jaki chce kupic, wysylam do tabeli
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
}}
elseif (isset($_POST['Bay_trening']))
{
// szukam wolnego id aby sie wbic id_zamowienia
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_zamowienia_treningu FROM zamowienietreningu WHERE id_zamowienia_treningu=(SELECT max(id_zamowienia_treningu) FROM zamowienietreningu)"));
$nastepneWolneID = $row[0]+1;
echo "wstawiam id: ";
echo $nastepneWolneID;
$id = $_POST['id'];// odbieram id jaki chce kupic, wysylam do tabeli
echo $id;
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT czas FROM `trening` WHERE id_treningu ='".$id."'"));// do bazy po id i sprawdzam ile trwa 
$czasTrwania= $row[0];//trening ile miesiecy
echo " +'".$czasTrwania."' month";// wyswietlam dane
echo "</br>";
$today = date('Y-m-d');// pobieram dzisiejsza date w wskazanym stringu formacie
echo $today;
$endDate =  date('Y-m-d', strtotime($today ."+".$czasTrwania." month"));// tworzenie daty wygasniecia karnetu poprzez dodanie do 
echo "</br>";//dzisiejszej daty czas trwania treningu
echo $endDate;
 //sql aby usunąć rekord
 
 $sql = "INSERT INTO `zamowienietreningu` (`id_zamowienia_treningu`, `id_uzyt`, `id_treningu`, `data_zakupu`, `data_waznosci`)
 VALUES ('".$nastepneWolneID."', '".$_SESSION['Id_uzyt']."', '".$id."', '".$today."', '".$endDate."');";
// policzylam wszystkie potrzebne dane dodaje do karnetu ^
if (mysqli_query($conn, $sql)) {
    //echo "<br> Gratulacje kupiłeś trening";
    header('Location: 06.php');//przekierowanie
}else {
    echo "<br> Wystapił blad podczas kupowania: " . mysqli_error($conn);
}

mysqli_close($conn);
}

//////////////////////////////////////


elseif (isset($_POST['Bay_produkt']))
{
// szukam wolnego id aby sie wbic id_zamowienia
$row = mysqli_fetch_row(mysqli_query($conn, "SELECT id_zam_produktu FROM zamowienie_produktu WHERE id_zam_produktu=(SELECT max(id_zam_produktu) FROM zamowienie_produktu)"));
$nastepneWolneID = $row[0]+1;
echo "wstawiam id: ";
echo $nastepneWolneID;
$id = $_POST['id'];// odbieram id jaki chce kupic, wysylam do tabeli
echo $id;


$today = date('Y-m-d');// pobieram dzisiejsza date w wskazanym stringu formacie
echo $today;
 
 $sql = "INSERT INTO `zamowienie_produktu` (`id_zam_produktu`, `id_uzyt`, `id_produktu`, `data_zakupu`)
 VALUES ('".$nastepneWolneID."', '".$_SESSION['Id_uzyt']."', '".$id."', '".$today."');";
// policzylam wszystkie potrzebne dane dodaje do karnetu ^
if (mysqli_query($conn, $sql)) {
    //echo "<br> Gratulacje kupiłeś produkt";
    header('Location: 06.php');//przekierowanie
}else {
    echo "<br> Wystapił blad podczas kupowania: " . mysqli_error($conn);
}

mysqli_close($conn);
}

?>