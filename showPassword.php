<?php
session_start();
if (empty($_SESSION)) {
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Displayer</title>
</head>

<body>
    <h1>Password: <?php echo $_SESSION['password']; ?></h1>
    <p>Hai inserito <?php echo $_SESSION['length']; ?> caratteri</p>
</body>

</html>