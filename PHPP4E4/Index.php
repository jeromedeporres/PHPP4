<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP4EXO04</title>
</head>
    <body>
        <?php
            function SomeFuncton($num1 , $num2) {
                if ($num1 > $num2) {
                    $print = 'le premier nombre est plus grand';
                }elseif ($num1 < $num2) {
                    $print = 'le premier nombre est plus petit';
                }else {
                    $print = 'Les deux nombres sont identiques';
                }
                return $print;
                }
        ?>
        <p><?= SomeFuncton(3, 3) ?></p>
    </body>
</html>