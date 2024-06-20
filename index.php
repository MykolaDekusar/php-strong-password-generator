<?php
require_once __DIR__ . '/functions.php';
if ($_SESSION['length']  >= 8) {
    header('Location: ./showPassword.php');
};
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
            <div>
                <input type="checkbox" name="lettere">
                <label for="lettere">Vuoi lettere nella password?</label>
            </div>
            <div>
                <input type="checkbox" name="numeri">
                <label for="numeri">Vuoi numeri nella password?</label>
            </div>
            <div>
                <input type="checkbox" name="speciali">
                <label for="speciali">Vuoi caratteri speciali nella password?</label>
            </div>
        </form>

    </section>
    <section>
        <?php if ($_SESSION['length']  >= 8) : ?>
            <?php header('Location: ./showPassword.php'); ?>
        <?php endif; ?>
        <p>Se non selezioni nulla la tua password avrà tutte le caratteristiche</p>
        <?php if ($l_password < 8) : ?>
            <p>Inserisci un numero di almeno 8 caratteri</p>
        <?php endif; ?>
    </section>
</body>

</html>