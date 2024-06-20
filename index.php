<?php
require __DIR__ . '/functions.php';
var_dump($_SESSION['password']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <h1>Strong Password Generator</h1>
    <section>
        <form action="index.php" method="GET">
            <label for="lunghezzaP">Inserisci lunghezza password</label>
            <input type="text" name="lunghezzaP">
            <button>Invia</button>
        </form>

    </section>
    <section>
        <h2>Ecco la tua password:</h2>
        <?php if ($l_password > 0) : ?>
            <?php $_SESSION['length'] = $l_password; ?>
            <?php header('Location: ./showPassword.php'); ?>
        <?php else : ?>
            <p>Errore hai inserito 0 caratteri</p>
        <?php endif; ?>
    </section>
</body>

</html>