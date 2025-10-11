<!DOCTYPE html>
<html>
    <head>
        <title>State of the League</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <h1>State of the League database</h1>
        <div id="database">
            <?php include 'Code.php'; ?>
        </div>
        <button onclick="Add.php">Aggiungi giocatore</button>
        <button onclick="Remove.php">Rimuovi giocatore</button>
        <button onclick="Modify.php">Modifica giocatore</button>
    </body>
</html>