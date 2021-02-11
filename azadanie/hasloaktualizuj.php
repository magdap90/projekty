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

 if (isset($_POST['aktalizuj']))
{
 echo " start metoda aktalizuj/n ";
 $_SESSION['Err']="";
 $oldpassword = $_POST['oldpassword'];
 $password1 = $_POST['newpasswod'];
 $password2 = $_POST['newpasswod2'];
 $username = $_SESSION['login'];
 
 if (empty($oldpassword))
 {
	 $_SESSION['Err']= "Stare hasło jest puste.";
     header('Location: 08.php');//przekierowywanie
     die;	
 }
 if (empty($password1))
 {
	 $_SESSION['Err']= "Podane hasło nie może być puste.";
	 header('Location: 08.php');//przekierowywanie
     die;		
 }
 if ($password1 != $password2) // sprawdzamy czy hasła takie same
 {
     $_SESSION['Err']= "Hasła są różne.";
	 header('Location: 08.php');//przekierowywanie
     die;		
 }
 
 $sql = "SELECT * FROM uzytkownicy WHERE user = '".$username."' AND pass='".$oldpassword."'";
    $result = mysqli_query($conn,$sql);
	 if (mysqli_num_rows($result) <1)
	 {
		 $_SESSION['Err']= "Złe stare hasło.";
         header('Location: 08.php');//przekierowywanie
         die;	
	 }



	//dodawanie do bazy wszystko okej
	 $sql2= "UPDATE `uzytkownicy` SET `pass` = '".$password1."' WHERE `uzytkownicy`.`id_uzyt` = '".$_SESSION['Id_uzyt']."';";
	 if (mysqli_query($conn, $sql2)) 
	 {
		 $_SESSION['Err']= "";
         header('Location: 01.php');//przekierowywanie
	 }
	 else 
	 {
		 echo " Error: " . $sql . "<br>" . mysqli_error($conn);
	 }

};

?>