<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP4EXO08</title>
</head>
    <body>
        <?php
            function SomeFuncton($num1 = 1 , $num2 = 1 , $num3 = 1) {
                return $num1 + $num2 + $num3;
            }
            ?>
        <p><?= SomeFuncton('5' , '3') ?></p>
    </body>
</html>