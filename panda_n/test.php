<html> 
<head> 
 
<title>Upload</title> 
</head> 
<body> 
 
<div> 
<form enctype="multipart/form-data" action="upload1.php" method="POST"> 
<input type="hidden" name="MAX_FILE_SIZE" value="50000000" /> 
<input name="plik" type="file" /> 
<input name="plikzdj" type="file" />
<br /> 
Nazwa:<br /> 
<input type="text" name="title" /><br /> 
Link do filmu:<br /> 
<input type="text" name="lnk" /><br /> 
Link do zdjecia:<br /> 
<input type="text" name="thumb_url" /><br /> 
<input type="submit" value="dodaj" /> 
 
 
 
<input type="submit" value="Wyslij plik" /> 
</form> 
</div> 
 
</body>
</html>