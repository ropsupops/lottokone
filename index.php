<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottokone</title>
</head>
<body>
    <h1>Lottokone</h1>
    <form action="index.php" method="POST">
        <input type="number" name="first">
        <input type="number" name="second">
        <input type="number" name="third">
        <input type="number" name="fourth">
        <input type="number" name="fifth">
        <input type="number" name="sixth">
        <input id="nappi" type="submit">
    </form>
    <?php
        //käyttäjä arvaa
        if (empty($_POST[1 or 2 or 3 or 4 or 5 or 6])) {
            include 'info.php';
        } else {
            if ($_POST[1 or 2 or 3 or 4 or 5 or 6] >= 1 and $_POST[1 or 2 or 3 or 4 or 5 or 6] <= 30) {
                //ohjelma arpoo
                $numbers=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
        
                /*
            
                array(
                    $num1 = (array_rand($numbers, 1)),
                    $num2 = (array_rand($numbers, 1)),
                    $num3 = (array_rand($numbers, 1)),
                    $num4 = (array_rand($numbers, 1)),
                    $num5 = (array_rand($numbers, 1)),
                    $num6 = (array_rand($numbers, 1)),
                );

                */

                foreach ($numbers as $key => $value) {
                    # code...
                }
            } else {
                include 'info.php';
            }
        }

    ?>
</body>
</html>