<?php
$servername ="localhost";
$uid="root";
$pwd="";
$database="mrlong";
$con = mysqli_connect($servername,$uid,$pwd,$database);

//foto upload
if(isset($_FILES['image'])){

  $sushi = $_POST['sushi'];
  $aantal = $_POST['aantal'];
  $prijs = $_POST['prijs'];
  $omschrijving = $_POST['omschrijving'];

  $errors = array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];

  $filename_deel = explode('.',$_FILES['image']['name']);
  $bestandstype = end($filename_deel);
  $file_ext = strtolower($bestandstype);
  $bestandstypen = array("jpeg","jpg","png");

  bestanden_upload($con,$sushi,$aantal,$prijs,$omschrijving,$file_name);
}
function bestanden_upload($con,$sushi,$aantal,$prijs,$omschrijving,$file_name){
  $sql="INSERT INTO sushi(id,sushi,aantal,prijs,omschrijving,afbeelding)
  values('', '$sushi','$aantal','$prijs','$omschrijving','uploads/$file_name')";
$file_name="";
if ($con->query($sql)=== TRUE){
  echo "Je afbeelding is geupload";
}
else{
  echo "<script>alert('Error".$sql."<br>".$con->error.";</script>";
}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <title>Afbeeldingen uploaden</title>
</head>
<body>
  <h1>Sushi afbeeldingen uploaden</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="sushi">sushi</label>
    <input type="text" name="sushi" required><br>
    <label for="aantal">aantal</label>
    <input type="text" name="aantal" required><br>
    <label for="prijs">prijs</label>
    <input type="text" name="prijs" required><br>
    <label for="omschrijving">omschrijving</label>
    <input type="text" name="omschrijving" required><br>
    <label for="foto">foto</label>
    <input type="file" name="image" required><br>
    <input type="submit" value="submit">
  </form>
</body>
</html>
