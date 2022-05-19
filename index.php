<?php
$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, minima! Commodi vel tempora, neque molestiae nulla architecto deserunt repudiandae sapiente, repellat delectus, nobis expedita ratione maxime quod explicabo tempore dolorem.';
$textLength = strlen($text);
$userWord = ($_GET['word']);
$userWordLength = strlen($userWord);
$newText = str_replace($userWord, '***', $text);
$newTextLength = strlen($newText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Bad Word</h1>
    <!-- Mostro il paragrafo  -->
    <p>Il paragrafo è: <strong><?php echo $text  ?></strong></p>
    <!-- Mostro la lunghezza del paragrafo -->
    <p>La lunghezza del paragrafo è: <strong><?php echo $textLength?></strong></p>
    <hr>
    <!-- Mostro la parola dell'utente -->
    <p>La parola scelta è: <strong><?php echo $userWord ?></strong></p>
    <!-- Mostro la lunghezza della parola scelta dall'utente -->
    <p>La lunghezza della parola scelta è: <strong><?php echo  $userWordLength ?></strong></p>
    <hr>
    <!-- Mostro il paragrafo iniziale modificato -->
    <p>Il paragrafo modificato è: <strong><?php echo $newText ?></strong></p>
    <!-- Mostro la lunghezza del paragrafo modificato -->
    <p>La lunghezza del paragrafo modificato è: <strong><?php echo $newTextLength ?></strong></p>
    <hr>

    
</body>
</html>

<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
Buon divertimento e che la forza sia con voi :baby-yoda: -->