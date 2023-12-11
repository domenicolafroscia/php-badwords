<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="paragraph">Inserisci un paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">

        <label for="censoredWord">Inserisci parola da censurare</label>
        <input type="text" id="censoredWord" name="censoredWord">

        <button type="submit">Invia</button>

    </form>
    
</body>
</html>