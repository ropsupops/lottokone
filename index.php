<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery</title>
    <style>
        body{
            background-color: 
            <?php                    
                if ($correct == 6) {
                    //YOU WIN!!!
                }
            ?>
            ;
        }

    </style>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Lottery</h1>
            <form action="index.php" method="POST">
                <input type="number" name="1" min="1" max="30" require>
                <input type="number" name="2" min="1" max="30" require>
                <input type="number" name="3" min="1" max="30" require>
                <input type="number" name="4" min="1" max="30" require>
                <input type="number" name="5" min="1" max="30" require>
                <input type="number" name="6" min="1" max="30" require>
                <input id="nappi" type="submit" min="1" max="30" require>
                <!-- Kiitos Heidille avusta-->
            </form>
            <h2>
                <?php
                    if (isset($_POST["submit"])){
                        foreach ($_POST as $choice) {
                            $counter = 1;
                            if (in_array($choice, $_POST)) {
                                echo "EI SAA OLLA KAHTA SAMAA!!!";
                                $counter++;
                                // ei toimi tällä hetkellä!!!
                            } else {
                                $counter++;
                            }
                        }
                    }
                    
                    $generatedNumbers = array();

                    while (count($generatedNumbers) < 6) {
                        $correctNumber = rand(1,30);
                        if (!in_array($correctNumber, $generatedNumbers)) {
                            array_push($generatedNumbers, $correctNumber);
                        }
                    }

                    $correct = 0;

                    foreach ($_POST as $number) {
                        if (in_array($number, $generatedNumbers)) {
                            $correct++;
                        }
                    }
                    
                    if ($correct == 6) {
                        //YOU WIN!!!
                    }

                    echo "Your numbers:" . $_POST["1"] . $_POST["2"] . $_POST["3"] . $_POST["4"] . $_POST["5"] . $_POST["6"] . "<br>";
                    echo "Winning numbers:" . $generatedNumbers[0] . "<br>" . $generatedNumbers[1] . "<br>" . $generatedNumbers[2] . "<br>" . $generatedNumbers[3] . "<br>" . $generatedNumbers[4] . "<br>" . $generatedNumbers[5] . "<br>";

                    echo "Sait " . $correct . " oikein";
                ?>
            </h2>
        </div>
    </div>
</body>
</html>