<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <title>Sushi bestellen</title>
</head>
<body>


<h2>Mr Long Sushi Sloterdijk</h2>

<table>
    <thead>
    <tr>
        <th>Sushi</th>
        <th>Aantal stuks</th>
        <th>Prijs</th>
        <th>Omschrijving</th>
        <th>Afbeelding</th>
    </tr>
    </thead>
    <?php neerzetten(); ?>



</table>

</body>
</html>

<?php
function neerzetten(){
  $servername ="localhost";
  $uid="root";
  $pwd="";
  $database="mrlong";
  $con = mysqli_connect($servername,$uid,$pwd,$database);

  $sql = 'SELECT * FROM sushi';
  $statement = $con->query($sql);

  foreach ($statement as $rij) {
    echo "<tr>";
    echo "<th>" . $rij['sushi'] . "</th>";
    echo "<th>" . $rij['aantal'] . "</th>";
    echo "<th>" . $rij['prijs'] . "</th>";
    echo "<th>" . $rij['omschrijving'] . "</th>";
    echo "<th> <img src=" . $rij['afbeelding'] . "></th>";
    echo "<tr>";
  }
}
?>
