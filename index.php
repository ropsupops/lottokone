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
                // tähän animaatio, jos pelaaja voittaa!!!
            ?>
            ;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
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
            <h2>
                <?php
                    //käyttäjä arvaa
                    if (empty ($_POST["first"] or $_POST["second"] or $_POST["third"] or $_POST["fourth"] or $_POST["fifth"] or $_POST["sixth"])) {
                        echo "Täytithän kentät!!!";
                    } else {
                        if (($_POST["first"] or $_POST["second"] or $_POST["third"] or $_POST["fourth"] or $_POST["fifth"] or $_POST["sixth"] >= 1) and ($_POST["first"] or $_POST["second"] or $_POST["third"] or $_POST["fourth"] or $_POST["fifth"] or $_POST["sixth"] <= 30)) {
                            if ($x=5) {
                                //ohjelma arpoo
                                $numbers = array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
                            
                                $chosenNumber = array (
                                    "num1" => array_rand($numbers, 1),
                                    "num2" => array_rand($numbers, 1) , $chosenNumber["num1"],
                                    "num3" => array_rand($numbers, 1) , $chosenNumber["num1" and "num2"],
                                    "num4" => array_rand($numbers, 1) , $chosenNumber["num1" and "num2" and "num1"],
                                    "num5" => array_rand($numbers, 1) , $chosenNumber["num1" and "num2" and "num3" and "num4"],
                                    "num6" => array_rand($numbers, 1) , $chosenNumber["num1" and "num2" and "num3" and "num4" and "num5"]
                                );

                                //testausta varten!!
                                echo $chosenNumber["num1"] . "<br>" . $chosenNumber["num2"] . $chosenNumber["num3"] . $chosenNumber["num4"] . $chosenNumber["num5"] . $chosenNumber["num6"];

                                if ($_POST["first"] == $chosenNumber["num1"] and $_POST["second"] == $chosenNumber["num2"] and $_POST["third"] == $chosenNumber["num3"] and $_POST["fourth"] == $chosenNumber["num4"] and $_POST["fifth"] == $chosenNumber["num5"] and $_POST["sixth"] == $chosenNumber["num6"]) {
                                    echo "Mahtavaa arvasit oikein!!!";
                                } else {
                                    echo "Voi ei!!! Arvauksesi meni väärin!!!";
                                }
                            } else {
                                echo "Et saa laittaa kahta samaa numeroa!!";
                            }
                        } else {
                            echo "Numeroiden pitää olla 1-30 välillä!!!";
                        }
                    }
                ?>
            </h2>
        </div>
    </div>
</body>
</html>