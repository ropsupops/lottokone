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
    <form action="">
        <input type="number">
        <input type="number">
        <input type="number">
        <input type="number">
        <input type="number">
        <input type="number">
        <input type="submit">
    </form>
    <?php 
        $numerot = $_POST;

        if ($numerot < 0 and $numerot > 31) {
            // tähän lottokone
        } else {
            include 'info.php';
        }

    ?>
</body>
</html>