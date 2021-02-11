
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'chat');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // jeśli kliknięto przycisk Zapisz 
    // nazwa przesłanego pliku
    $filename = $_FILES['myfile']['name'];

    // miejsce docelowe pliku na serwerze
    $destination = 'upload/' . $filename;

    // pobierz rozszerzenie pliku
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // Fizyczny plik w tymczasowym katalogu przesyłania na serwerze
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg', 'png', 'jpeg', 'pdf', 'doc', 'docx'])) {

       // $uploadStatus = 0; 
        echo "You file extension must be .zip, .pdf or .docx";
        //$response['message'] = "musi byc .zip, .pdf .docx";

    } elseif ($_FILES['myfile']['size'] > 1000000) { // plik nie powinien być większy niż 1
        
        //$uploadStatus = 0; 
        echo "File too large!";
        //$response['message'] ="plik za duzyy!";

    } else {

        // przenieś przesłany (tymczasowy) plik do określonego miejsca docelowego
        if (move_uploaded_file($file, $destination)) {
            // szukam wolnego id 

            //echo session_id();
            //print_r($_SESSION);
            //echo $_SESSION['username'];
            //echo $_SESSION['user_id'];
            $row = mysqli_fetch_row(mysqli_query($conn,  "SELECT id FROM files WHERE id=(SELECT max(id) FROM files)"));
            $nextFreeID = $row[0]+1;
            // wstawiam file
            $sql = "INSERT INTO files (id, name, id_uzt) VALUES ('$nextFreeID','$filename',  '".$_SESSION['user_id']."')";
            if (mysqli_query($conn, $sql)) {
                echo "udlao sie przeslać";
                //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                header('Location: files.php');
                //$uploadStatus = 1;
               // $response['message'] = "udalo sie przeslać";
            }
        } 
        else 
        {
           // $uploadStatus = 0; 
            echo "cos poszlo nie tak.";
           // $response['message'] = "Failed to upload file.";
        }
    }
    //echo json_encode($response);
    mysqli_close($conn);
}


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('upload/' . $file['name']));
        readfile('upload/' . $file['name']);


        exit;
    }
    exit;
    mysqli_close($conn);
}
?>
</html>