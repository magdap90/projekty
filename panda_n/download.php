<?php

//download.php
include('database_connection.php'); 

if(isset($_POST['download']))
{
  $nazwa = $_POST['nazwa'];  
    
    if (!file_exists($nazwa))
    { 
    echo("Na serwerze nie ma pliku o nazwie $nazwa");
    }
    else
    {
    echo("Plik o nazwie $nazwa został odnaleziony.<br><br>W ciągu kilku sekund powinno rozpocząć się pobieranie pliku.
Jeśli pobieranie nie rozpoczęło się automatycznie, proszę kliknąć na ten <a href=$nazwa>link</a>
<META HTTP-EQUIV='Refresh' CONTENT='2; URL=$nazwa'>");
    }
 
}


?>