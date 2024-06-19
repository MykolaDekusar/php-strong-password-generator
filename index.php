<?php
$l_password = $_GET['lunghezzaP'] ?? 0;

echo ($l_password);
function passwordGenerator($length)
{
    $data = '1234567890ABCDEFGHIJKLMOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!"%&/()=?^*_;';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= substr(str_shuffle($data), 0, 1);
    }
    return $password;
}
$password = passwordGenerator($l_password);
echo $password;
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
            <p>Hai inserito <?php echo $l_password; ?> caratteri</p>
            <h3>Password: <?php echo $password; ?></h3>
        <?php else : ?>
            <p>Errore hai inserito 0 caratteri</p>
        <?php endif; ?>
    </section>
</body>

</html>