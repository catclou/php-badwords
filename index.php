<?php
    
    $paragraph = "Il procione, noto anche come orsetto lavatore, è un mammifero onnivoro di mezza taglia della famiglia dei Procionidi, nativo del Nord America.";

    $daCensurare = $_GET["censor"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <p><?php echo $paragraph ?></p>
    <p>La lunghezza di questo paragrafo è di <?php echo strlen($paragraph) ?> caratteri.</p>

    <p>Inserisci la parola da censurare:</p>
    <form method="GET">
        <input type="text" name="censor">
        <button type="submit">Invia</button>
    </form>

    <p>Il paragrafo censurato è:</p>
    <p><?php echo str_replace("$daCensurare", "***", $paragraph);?></p>
</body>
</html>