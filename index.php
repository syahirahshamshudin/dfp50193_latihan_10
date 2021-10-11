<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>

    <?php
    function hello() //tak ada parameter tak ada return value
    {
        echo 'Hello';
    }

    function hai($nama) //ada parameter ada return value
    {
        return 'Hello' . $nama;
    }

    hello();
    echo'<br>';
    echo hai('Sya');
    ?>
    <p><a href="contoh.php">CONTOH FUNCTION</a></p>

</body>
</html>