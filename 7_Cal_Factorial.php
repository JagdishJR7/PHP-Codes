<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print the factorial of a number.</title>

</head>
<body>
    <h2>7th Pract : To the factorial of a number .</h2>
    <form method="post" action="7_Cal_Factorial.php">
        <label for="">Enter the number : </label>
        <input type="number" name="number"><br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $n = $_POST['number'];
            $result=1;
            // $i=1;
            for($i=1; $i<=$n; $i++){
                $result = $result*$i;
            }
            echo "Factocial of $n is $result.";
        }
    ?>
</body>
</html>