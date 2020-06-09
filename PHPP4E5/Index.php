<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP4EXO05</title>
</head>
    <body>
        <?php
            function SomeFuncton($num , $string) {
                return $num . $string;
            }
            ?>
        <p><?= SomeFuncton('1' , ' World') ?></p>
    </body>
</html>