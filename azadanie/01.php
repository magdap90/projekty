<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <title>StylFit</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="stylaktalizacji.css" rel="stylesheet">
</head>
<body>
<?php
    include('header.php');
?>
    <div>
        <img src="ciezarki.jpg" alt="obrazek" width="1340" height="200">
        <a href="05.html"><img src="promka.png" alt="promka"></a>
    </div>
    <main>
        <article class="artykul">
            <a href="05.html"><img src="open.jpg" alt="karnet na czas nieokresony"></a>
            <h2><b>Karnet na czas nieokreślony! 
        Ty decydujesz o długości swojego członkostwa!</b></h2>
            <a href="03.html"><img src="open1.jpg" alt="karnet na czas nieokresony"></a>
        </article>

        <aside class="side">
            <img src="xx.jpg" alt="obrazek" width="670" height="300">
            <img src="xz.jpg" alt="obrazek" width="670" height="300">
        </aside>
    </main>
    <footer>
        <div id="stopka">
            <pre><b><i> Dane kontaktowe:</i></b>
 Galeria M
 al.1000-lecia P.P. 8b
 15-111 Białystok
 tel: 85 653 99 55
 kom: 533 363 202</pre>
            <pre><b><i>    Godziny otwarcia klubu: </i></b>
    Poniedziałek - Piątek  06.00 - 22.30 
    Sobota                 08.00 - 20.00 
    Niedziela              09.00 - 20.00</pre>
            <img src="ok.jpg" alt="obrazek" width="655" height="200">
        </div>

    </footer>
</body>
</html>