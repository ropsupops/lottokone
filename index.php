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
        //ohjelma arpoo
        

        //käyttäjä arvaa
        if (empty($_POST[1 or 2 or 3 or 4 or 5 or 6])) {
            include 'info.php';
        } else {
            if ($_POST[1 or 2 or 3 or 4 or 5 or 6] >= 1 and $_POST[1 or 2 or 3 or 4 or 5 or 6] <= 30) {
               echo "hei"; 
            }
            else{
                include 'info.php';
            }
        }

    ?>
</body>
</html>