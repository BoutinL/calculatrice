<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <?php
    echo "
    <h1>Calculatrice en php</h1>
    <form action='index.php' method='POST'>
        <label>
            <span>Nombre 1:</span>
            <input type='text' name='nombre1'>
        </label>
        <label>
            <span>Nombre 2:</span>
            <input type='text' name='nombre2'>
        </label>
        <fieldset>
            <legend>Sélectioner un opérateur</legend>
            <label>
                Addition
                <input type='radio' id='addition' name='operateur' value='addition' checked>
            </label>
            <label>
                Soustraction
                <input type='radio' id='soustraction' name='operateur' value='soustraction'>
            </label>
            <label>
                Multiplication
                <input type='radio' id='multiplication' name='operateur' value='multiplication'>
            </label>
            <label>
                Division
                <input type='radio' id='division' name='operateur' value='division'>
            </label>
        </fieldset>
        <input type='submit'>
    </form>";
    $nombre1 = intval($_POST['nombre1']);
    $nombre2 = intval($_POST['nombre2']);
    $result = intval('');
    echo "Nombre 1: $nombre1 <br> Nombre 2: $nombre2 <br> Résultat: ";
    switch($_POST['operateur']){
        case 'addition':
            $result = $nombre1 + $nombre2;
            echo "$result";
            break;
        case 'soustraction':
            $result = $nombre1 - $nombre2;
            echo "$result";
            break;
        case 'multiplication':
            $result = $nombre1 * $nombre2;
            echo "$result";
            break;
        case 'division':
            $result = $nombre1 / $nombre2;
            echo "$result";
            break;
    };
    ?>
</body>
</html>