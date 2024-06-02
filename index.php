<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-31</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <form action="" method="get">
            <input type="text" name="num" id="" placeholder="Enter Any Number">
            <button type="submit">Calculate Factorial</button>
        </form>
        <p>
            <?php
            if (!empty($_GET)) {
                $num = $_GET['num'];
                $factorial = 1;
                for ($i = 1; $i <= $num; $i++) {
                    $factorial = $factorial * $i;
                }
                echo $factorial;
            }
            ?>
        </p>
    </div>
</body>

</html>