<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print the pattern using nested of loop.</title>

</head>
<body>
    <h2>Sixth Pract : To print the pattern using nested of loop </h2>
    <form method="post" action="6_Pattern.php">
        <label for="">Enter the number of rows for which you want the pattern : </label>
        <input type="number" name="rows_number"> <br><br>

        <input type="submit" name="submit" value="submit"> <br><br>

    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $n = $_POST['rows_number'];
            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>
