<?php


//upload.php

if(!empty($_FILES))//////////////file          name
{
	if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
	{
		$ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
		$allow_ext = array('jpg', 'png','jpeg', 'pdf', 'doc', 'docx');
		if(in_array($ext, $allow_ext))
		{
			$_source_path = $_FILES['uploadFile']['tmp_name']; // sciezka zrodłowa
			$target_path = 'upload/' . $_FILES['uploadFile']['name'];  // sciezka docelowa 
			// $xx = $_FILES['uploadFile']['name']; // tu pobranie samej nazwy pliku
			if(move_uploaded_file($_source_path, $target_path))
			{
				//echo '<p><img src="'.$target_path.'" class="img-thumbnail" width="200" height="160" /></p><br />';
				//echo ''.$target_path.''; // cos juz w dobrym kierunku
				//echo '<p>< src="'.$target_path.'" class="img-thumbnail" width="200" height="160" /></p><br />';
				//// echo 'dadanie pliku';
				//echo ''.$xx.'';//  tu wswietlenie samej nazwy
				//echo '<button type="button"> '.$target_path.'</button>';
				echo ''.$_FILES['uploadFile']['name'].' ';
			}
			//echo $ext;
		}
	}
}

?>