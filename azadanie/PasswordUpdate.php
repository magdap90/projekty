<!DOCTYPE html>
<html>

<head>
    <title>Aktalizacja hasła</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="stylaktalizacji.css" rel="stylesheet">
</head>

<body>
    <?php
        session_start();
		if(isset($_SESSION['Err']))
		echo $_SESSION['Err'];
	?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form method="POST" action="hasloaktualizuj.php">
                    <label>Current Password</label>
                    <div class="form-group pass_show">
                        <input type="password" class="form-control" placeholder="Current Password" name="oldpassword">
                    </div>
                    <label>New Password</label>
                    <div class="form-group pass_show">
                        <input type="password" class="form-control" placeholder="New Password" name="newpasswod">
                    </div>
                    <label>Confirm Password</label>
                    <div class="form-group pass_show">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="newpasswod2">
                    </div>
                    <input type="submit" class="form-button" value="Update" name="aktalizuj">
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
</body>
</html>