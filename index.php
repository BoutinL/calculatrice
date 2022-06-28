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
                <br>
                <label>
                    <span>Nombre 2:</span>
                    <input type='text' name='nombre2'>
                </label>
                <fieldset>
                    <legend>Sélectioner un opérateur</legend>
                    <label>
                        Addition
                        <input type='radio' id='addition' name='operateur' value='addition' checked><br>
                    </label>
                    <label>
                        Soustraction
                        <input type='radio' id='soustraction' name='operateur' value='soustraction'><br>
                    </label>
                    <label>
                        Multiplication
                        <input type='radio' id='multiplication' name='operateur' value='multiplication'><br>
                    </label>
                    <label>
                        Division
                        <input type='radio' id='division' name='operateur' value='division'>
                    </label>
                </fieldset>
                <input type='submit' name='submit' value='Calculer'>
            </form>
        ";
        if(isset($_POST['submit'])){
            $nombre1 =  str_replace(',' , '.' , $_POST['nombre1']);
            $nombre2 = str_replace(',' , '.' , $_POST['nombre2']);
            echo "Nombre 1: $nombre1 <br> Nombre 2: $nombre2 <br> Résultat: ";
            if (is_numeric($nombre1) === true && is_numeric($nombre2) === true){
                $nombre1 = floatval($nombre1);
                $nombre2 = floatval($nombre2);
                $operateur =  $_POST['operateur'];
                switch($operateur){
                    case 'addition':
                        echo $nombre1 + $nombre2;
                        break;
                    case 'soustraction':
                        echo $nombre1 - $nombre2;
                        break;
                    case 'multiplication':
                        echo $nombre1 * $nombre2;
                        break;
                    case 'division':
                        echo $nombre2 == 0 ? "Vous ne pouvez pas diviser un nombre par 0 !" : $nombre1 / $nombre2 ;
                        break;
                };
            }elseif(is_numeric($nombre1) === false || is_numeric($nombre2) === false){
                echo "Veuillez renseigner une chaîne numérique !";
            }
        }
    ?>
</body>
</html>