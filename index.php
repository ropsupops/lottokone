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
                        if (1 <= $_POST) {
                            if ($_POST["first"] <= 30 and $_POST["second"] <= 30 and $_POST["third"] <= 30 and $_POST["fourth"] <= 30 and $_POST["fifth"] <= 30 and $_POST["sixth"] <= 30) {
                                if ($x=5) { //tämä on vain placeholder
                                    //ohjelma arpoo
                                    $numbers = array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
                                    
                                    $counter=0;
                                    do {
                                        $generatedNumbers["$counter"] = array_rand($numbers, 1);
                                        $counter++;
                                    } while ($counter < 6 and !in_array($counter, $generatedNumbers));
    
                                    print_r($generatedNumbers);
                                    //testausta varten!!
                                    echo $generatedNumbers[0] . "<br>" . $generatedNumbers[1] . "<br>" . $generatedNumbers[2] . "<br>" . $generatedNumbers[3] . "<br>" . $generatedNumbers[4] . "<br>" . $generatedNumbers[5] . "<br>";
    
                                    if ($_POST["first"] == $generatedNumbers[0] and $_POST["second"] == $generatedNumbers[1] and $_POST["third"] == $generatedNumbers[2] and $_POST["fourth"] == $generatedNumbers[3] and $_POST["fifth"] == $generatedNumbers[4] and $_POST["sixth"] == $generatedNumbers[5]) {
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