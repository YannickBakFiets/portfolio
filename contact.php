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
            <h1>+ Contact</h1>
        </figure>
        <figure>
            <p>- Tel: 0619279243</p>
            <p>- Mail: 261538@cursist.rockopnh.nl</p>
            <p>- Github: YannickBakFiets</p>
        </figure>
        </div>
        <figure>
            <h2>Hier uw informatie</h2>
        </figure>
        <figure>
            <div>
                <form action="contact2.php" method="POST">
                    <label for="voornaam">Voornaam:</label><br>
                    <input type="text" name="voornaam" value=""><br>
                    <label for="achternaam">Achternaam:</label><br>
                    <input type="text" name="achternaam" value=""><br>
                    <label for="telefoon">Telefoon:</label><br>
                    <input type="text" name="telefoon" value=""><br>
                    <label for="email">E-mail:</label><br>
                    <input type="text" name="email" value=""><br><br>
                    <input class="submit" type="submit" value="Submit">
                </form> 
            </div>
        </figure>
    </body>
</html>