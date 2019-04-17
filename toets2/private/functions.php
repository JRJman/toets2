<?php

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
?>
