<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find maximum number between three number.</title>
</head>
<body>
    <h2>Pract-2 : To find the max number between three numbers.</h2>
    <form method="post" action="1_first.php">
        <label for="">Enter first no. : </label>
        <input type="number" name="num1"> <br>

        <label for="">Enter second no. : </label>
        <input type="number" name="num2"> <br>

        <label for="">Enter third no. : </label>
        <input type="number" name="num3"> <br>

        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            if($num1>$num2 && $num1>$num3){
                echo "<p> The maximum no. is : $num1 .</p>";
            }
            
            else if($num2>$num1 && $num2>$num3){
                echo "<p> The maximum no. is : $num2 .</p>";
            }

            else{
                echo "<p> The maximum no. is $num3 .</p>";
            }

        }
    ?>
</body>
</html>