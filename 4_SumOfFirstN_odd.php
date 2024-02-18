<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To find the sum of first n odd number</title>
</head>
<body>
    <h2>Fourth pract : To find the sum of first n odd number.</h2>
    <form method="post" action="4_SumOfFirstN_odd.php">
        <label for="">Enter 'n' number : </label>
        <input type="number" name="number" ><br><br>

        <input type="submit" value="submit" name="submit">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $n = $_POST['number'];
            $sum = 0;
            for($i = 1; $i<=$n; $i++){
                $sum += 2*$i-1;
            }
            echo "<p> The sum of the first $n odd number is : $sum .";
        }
    ?>
</body>
</html>
