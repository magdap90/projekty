<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Zmiana hasła</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
    <link href="stylaktalizacji.css" rel="stylesheet">
</head>

<body>
  <?php
session_start();
include('header.php');
?>
    <nav id="menuzalogowanego">
        <ul>
            <li><a href="06.php" class="text-dark">Historia zamówień</a></li>
            <li><a href="07.php" class="text-dark">Przedłóż karnet</a></li>
            <li><a href="08.php" class="text-dark">Zmiana hasła</a></li>
        </ul>
    </nav>
  <main>
    <article class="artykul">

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="kar1.jpg" class="d-block w-100" alt="kot" width="1340" height="200">
          </div>
          <div class="carousel-item">
            <img src="kar2.jpg" class="d-block w-100" alt="xxx" width="1340" height="200">
          </div>
          <div class="carousel-item">
            <img src="kar3.jpg" class="d-block w-100" alt="panda" width="1340" height="200">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <h2>Zmień hasło</h2>
      <?php
		if(isset($_SESSION['Err']))
	?>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <form method="POST" action="hasloaktualizuj.php">
              <label>Stare hasło</label>
              <div class="form-group pass_show">
                <input type="password" class="form-control" placeholder="Stare haslo" name="oldpassword">
              </div>
              <label>Nowe hasło</label>
              <div class="form-group pass_show">
                <input type="password" class="form-control" placeholder="Nowe haslo" name="newpasswod">
              </div>
              <label>Powtórz hasło</label>
              <div class="form-group pass_show">
                <input type="password" class="form-control" placeholder="Powtorz haslo" name="newpasswod2">
              </div>
              <input type="submit" class="form-button" value="Zmień" name="aktalizuj">
            </form>


            <script>
              $(document).ready(function () {
                $('.pass_show').append('<span class="ptxt">Show</span>');
              });
              $(document).on('click', '.pass_show .ptxt', function () {
                $(this).text($(this).text() == "Show" ? "Hide" : "Show");
                $(this).prev().attr('type', function (index, attr) {
                  return attr == 'password' ? 'text' : 'password';
                });
              });
            </script>

          </div>
        </div>
      </div>

    </article>
  </main>
  <footer>
    <div class="row">
      <div class="col-md-2">
        <pre><b><i> Dane kontaktowe:</i></b><small>
  Galeria M
  al.1000-leciaP.P.8b
  15-111 Białystok
  tel: 85 653 99 55
  kom: 533 363 202</small></pre>
      </div>
      <div class="col-md-4">
        <pre><b><i>    Godziny otwarcia klubu: </i></b><small>
     Poniedziałek - Piątek  06.00 - 22.30 
     Sobota                 08.00 - 20.00 
     Niedziela              09.00 - 20.00</small></pre>
      </div>
      <div class="col-md-6"><img src="ok.jpg" alt="obrazek" width="665" height="200"></div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>