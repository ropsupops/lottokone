<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="content">
        <h1>€€€ Lottery €€€</h1>
        <form action="index.php" method="POST">
            <input type="number" name="1" min="1" max="30" required>
            <input type="number" name="2" min="1" max="30" required>
            <input type="number" name="3" min="1" max="30" required>
            <input type="number" name="4" min="1" max="30" required>
            <input type="number" name="5" min="1" max="30" required>
            <input type="number" name="6" min="1" max="30" required> <br>
            <input id="button" type="submit" value="LET'S PLAY!">
            <!-- Kiitos Heidille avusta (min-max & required)-->
        </form>
        <h2>
            <?php
                if (isset($_POST["submit"])){
                    foreach ($_POST as $choice) {
                        if (in_array($choice, $_POST)) {
                            echo "NO DUPLICATES!!!";
                            // ei toimi tällä hetkellä
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
            ?>
        </h2>
        <div id="winner">
            <h3>
                <?php 
                    if ($correct == 6) {
                        echo "YOU HAVE WON!!! GONGRATULATIONS!!!";
                    }
                ?>
            </h3>
        </div>
        <h3>
            <?php 
                echo "Your numbers:" . " " . $_POST["1"] . " " . $_POST["2"] . " " . $_POST["3"] . " " . $_POST["4"] . " " . $_POST["5"] . " " . $_POST["6"] . "<br>";
                echo "Winning numbers:" . " " . $generatedNumbers[0] . " " . $generatedNumbers[1] . " " . $generatedNumbers[2] . " " . $generatedNumbers[3] . " " . $generatedNumbers[4] . " " . $generatedNumbers[5] . "<br>";
            ?>       
        </h3>
        <h2>
            <?php
                echo "You got " . $correct . " right";
            ?>
        </h2>
    </div>
</body>
</html>