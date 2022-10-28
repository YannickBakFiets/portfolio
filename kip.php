<!DOCTYPE html>
<html lang="nl">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            justify-content: center;
            align-items: center;
       }

    header{
        background-color: rgb(123, 123, 228);
        width: 100%;
        height: 70px;
        color: white;
        display: flex;
        align-items: center;
    }

    header > h1 {
        margin-left: 20px;
    }

    header > a {
        margin-left: 200px;
        text-decoration: none;
        color: white;
    }

    header > a:hover{
        color: rgb(128, 221, 247);
    }

    header > h1 > a{
        text-decoration: none;
        color: white;
    }

    header > h1 > a:hover{
        color: rgb(128, 221, 247);
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto Kip!</title>
</head>
<body>
        <header>
            <h1><a href="index.php">+ CV</a></h1>
            <a href="database.php">Database</a>
            <a href="contact.php">Contact</a>
            <a href="kip.php">Voorbeeld opdracht 1</a>
            <a href="linkopdracht.php">Voorbeeld opdracht 2</a>
        </header>
    <h1>Hier De Kop</h1>
    <img src="images/kip-met-achtergrond.webp" alt="kip-met-achtergrond" width="300px" height="auto">
    <ul>
        <li>Kip</li>
        <li>Haan</li>
        <li>Kuiken</li>
    </ul>
    <a href="https://www.google.com" target="_blank">Link</a>
    <br></br>
    <TABLE BORDER="1">
        <TR> <TD>Naam</TD> <TD>Score</TD> <TD>Aantal</TD> <TD>Kleur</TD> </TR>
        <TR> <TD>1</TD> <TD></TD> <TD></TD> <TD></TD> </TR>
        <TR> <TD>2</TD> <TD></TD> <TD></TD> <TD></TD> </TR>
        <TR> <TD>3</TD> <TD></TD> <TD></TD> <TD></TD> </TR>
        </TABLE>
</body>
</html>