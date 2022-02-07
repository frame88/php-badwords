<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->



<?php
$p = "primo esercizio in php, è molto simile al js? o meglio";
$censura = $_GET["cen"];
$p2 = str_replace($censura, "***", $p);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <p><?php echo $p; ?></p>
    <h2>Lunghezza stringa: <?php echo strlen($p); ?></h2>
    <h3>Parola da censurare: <?= $censura; ?></h3>
    <h1>Stringa censurata: <?php echo $p2; ?></h1>
    <p>Lunghezza nuova stringa: <?php echo strlen($p2); ?></p>
</body>
</html>