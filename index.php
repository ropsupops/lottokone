<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottokone</title>
    <style>
        body{
            background-color: 
            <?php
                if ($_POST == $numbers) {
                    // tähän animaatio, jos pelaaja voittaa!!!
                }
            ?>
            ;
        }

    </style>
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
        if (empty ($_POST["first"] or $_POST["second"] or $_POST["third"] or $_POST["fourth"] or $_POST["fifth"] or $_POST["sixth"])) {
            echo "Täytithän kentät!!!";
        } else {
            if (($_POST["first"] or $_POST["second"] or $_POST["third"] or $_POST["fourth"] or $_POST["fifth"] or $_POST["sixth"] >= 1) and ($_POST["first"] or $_POST["second"] or $_POST["third"] or $_POST["fourth"] or $_POST["fifth"] or $_POST["sixth"] <= 30)) {
                if () {
                    echo "Et saa laittaa kahta samaa numeroa!!";
                } else {
                    //ohjelma arpoo
                    $numbers = array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
            
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

                    in_array(...);

                    foreach ($numbers as $key => $value) {
                        # code...
                    }
                    if ($_POST == $numbers) {
                        echo "Mahtavaa arvasit oikein!!!";
                    } else {
                        echo "Voi ei!!! Arvauksesi meni väärin!!!";
                    }
                }
            } else {
                echo "Numeroiden pitää olla 1-30 välillä!!!";
            }
        }
    ?>
</body>
</html>