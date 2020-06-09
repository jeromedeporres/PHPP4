<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP4EXO07</title>
</head>
    <body>
        <?php
            function someFunction($age , $gender) {
                if ($age >= 18 && $gender == 'homme') {
                    $print = 'Vous êtes un homme et vous êtes majeur';
                }elseif ($age <= 18 && $gender == 'homme') {
                    $print = 'Vous êtes un homme et vous êtes mineur';
                }if ($age >= 18 &&  $gender == 'femme'){
                    $print = 'Vous êtes une femme et vous êtes majeure';
                }elseif ($age <= 18 && $gender == 'femme') {
                    $print = 'Vous êtes une femme et vous êtes mineure';
                }
                return $print;
                }
        ?>
        <p><?= someFunction(2 , 'femme') ?></p>
    </body>
</html>