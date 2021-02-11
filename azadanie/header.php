<div id="gora">
    <?php
    if(isset($_SESSION['zalogowany']))
    {
		/*if ($_SESSION['typ'] == 'admin') {
			
			
		}*/
		echo "<b>Zalogowano jako ".$_SESSION['login'].", ".$_SESSION['typ']."  </b>";
        echo '<a class="btn btn-outline-danger" role="button" href="wylogowywanie.php">Wyloguj</a>';
        
    }
    else
    {
        echo '<a class="btn btn-outline-danger" role="button" href="02.php">Zaloguj sie</a>';
    }
    ?>
</div>

    <header>
        <p><a href="01.php">StylFit</a></p>
    </header>
    <!-- <ul id="logowanie">
        <li><a href="02.php">Zaloguj sie</a></li>
    </ul> -->
	
	

<nav id="menu">
    <ul>
        <li><a href="04.php">PROMOCJE</a></li>
		
		
        <li><a href="05.php">BASEN</a></li>
	
	
        <?php
	    	if(isset($_SESSION['zalogowany']))
			{			
				echo '<li><a href="06.php">MOJE KONTO</a></li>';
				echo '<li><a href="skleppo.php">SKLEP</a></li>';
				echo '<li><a href="silowniapo.php">SIŁOWNIA</a></li>';
				if ($_SESSION['typ'] == 'admin') {
			echo '<li><a href="panel.php">PANEL ADMINISTRACYJNY</a></li>';
		}
			}
			else
			{
				echo '<li><a href="sklepprzed.php">SKLEP</a></li>';
				echo '<li><a href="silowniaprzed.php">SIŁOWNIA</a></li>';
			};
			
		?>
		
    </ul>

</nav>