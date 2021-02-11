<!--
//files_admin.php
!-->

<?php
session_start();
include('filesLogic.php');


if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<div class="container">
    <div class="row">
        <button type="submit" name="str" onClick="location.href='index.php';">strona glowna</button>
    </div>
        <div class="col-md-2 col-sm-3">
				<p align="right">Hi - <?php echo $_SESSION['username']; ?> - <a href="logout.php">Wyloguj</a></p>
	    </div>

    </div>





<div id = "latestData">
<table>
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Akcja</th>
</thead>
<tbody>
<?php 

$qry = mysqli_query($conn,"SELECT * FROM `files` WHERE id_uzt='".$_SESSION['user_id']."' ");
  ?>
    <?php while($row = mysqli_fetch_array($qry)) { ?>
          
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><a href="files.php?file_id=<?php echo $row['id'] ?>">Download</a></td>
        </tr>
    <?php } ?>


</tbody>
</table>
</div>


</body>

<script>  
$(document).ready(function(){


 /* $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'upload.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,

            success: function(response){ //console.log(response);
                $('.statusMsg').html('');
                if(response.status == 1){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        })
        */
  });






});  
</script>