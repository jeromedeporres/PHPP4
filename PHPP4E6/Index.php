<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP4EXO06</title>
</head>
    <body>
        <?php
            function SomeFuncton($nom , $prénom , $age) {
                return 'Bonjour ' . $nom . ' ' . $prénom . ', ' . 'tu as ' . $age . ' ans.';
            }
            ?>
        <p><?= SomeFuncton('ANTON MARTIN de PORRES' , 'Jérôme' , 36) ?></p>
    </body>
</html>