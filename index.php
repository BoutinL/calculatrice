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
    <form action='storage.php' method='POST'>
        <span>Nombre 1:</span>
        <input type='text' name='nombre1'>
        <span>Nombre 2:</span>
        <input type='text' name='nombre2'>
        <fieldset>
            <legend>Sélectioner un opérateur</legend>
            <input type='radio' id='addition' name='addition'>
            <label for'addition'>Addition</label>
            <input type='radio' id='soustraction' name='soustraction'>
            <label for'soustraction'>Soustraction</label>
            <input type='radio' id='multiplication' name='multiplication'>
            <label for'multiplication'>Multiplication</label>
            <input type='radio' id='division' name='division'>
            <label for'division'>Division</label>
        </fieldset>
        <input type='submit'>
    </form>";
    ?>
</body>
</html>