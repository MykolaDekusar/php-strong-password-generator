<?php
$l_password = $_GET['lunghezzaP'] ?? 0;

echo ($l_password);
function passwordGenerator($length)
{
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= 2;
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
    <title>Strong PAssword Generator</title>
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
        <p>Hai inserito <?php echo $l_password ?> caratteri</p>
    </section>
</body>

</html>