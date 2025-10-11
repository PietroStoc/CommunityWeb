<!DOCTYPE html>
<html>
    <head>
        <title>Aggiungi giocatore</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <h1>Aggiungi un nuovo giocatore</h1>
        <form action="Insert.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="team">Squadra:</label>
            <input type="text" id="team" name="team" required><br><br>
            <label for="position">Posizione:</label>
            <input type="text" id="position" name="position" required><br><br>
            <input type="submit" value="Aggiungi giocatore">
        </form>
    </body>
</html>