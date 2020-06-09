<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP4EXO03</title>
</head>
    <body>
        <?php
            function SomeFuncton($string1 , $string2) {
            return $string1 . $string2;
            }
        ?>
        <p><?= SomeFuncton('Hello' , ' World') ?></p>
    </body>
</html>