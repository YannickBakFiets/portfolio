<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_contact";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['voornaam'];
$lastname = $_POST['achternaam'];
$mail = $_POST['email'];
$telefoon = $_POST['telefoon'];

$sql = "INSERT INTO contact (ID, voornaam, achternaam, email, telefoon) VALUES (NULL, '$name', '$lastname', '$mail', '$telefoon ');";
$result = $conn->query($sql);
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
            <img src="images/IMG_1771.jpg" alt="Kat met sinaasappel hoed">
        </figure>
        <figure>
            <h1>Het staat in de database!</h1>
        </figure>
</html>