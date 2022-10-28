<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
        figure{
            display:flex;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
    <body>

        <header>
            <h1><a href="index.php">+ CV</a></h1>
            <a href="database.php">Database</a>
            <a href="contact.php">Contact</a>
            <a href="kip.php">Voorbeeld opdracht 1</a>
            <a href="linkopdracht.php">Voorbeeld opdracht 2</a>
    </header>
    <figure>
        <div>
            <button class="button"><a href="contact.php">Voeg uzelf toe</a></button>
        </div>
    </figure>
    <figure>
  <thead>
  <table class="table">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Telefoon</th>
            <th>Email</th>
            <th>Wijzig</th>
        </tr>

          <?php
            $query = "SELECT id, voornaam, achternaam, telefoon, email FROM contact";
            $result = mysqli_query($link, $query);
            function delete(){
                $sql_delete = "DELETE FROM contact WHERE $id =$_GET ['id']";
             }
            if ($result->num_rows > 0) {
              $arrList = array();
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['voornaam']."</td>";
                echo "<td>".$row['achternaam']."</td>";
                echo "<td>".$row['telefoon']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td><a href='./delete.php?id= " .$row['id'] ."'>verwijder</a></td>";
                echo "</tr>";
                }
            } 
          ?>
    </tbody>
</table>
</figure>
</html>