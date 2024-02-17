<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To check whether the given number is prime or not?</title>
</head>
<body>
    <h2>Fifth pract : To find the given number is prime or not.</h2>
    <form method="post" action="5_fifth.php">
        <label for="">Enter the number : </label>
        <input type="number" name="Prime_number"><br><br>

        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $n = $_POST['Prime_number'];
            $isPrime = true;
            for($i=2; $i<=sqrt($n); $i++){
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                } 
            }

            if($isPrime && $n>1){
                echo "<p> $n is a prime number. </p>";
            }
            else{
                echo "<p> $n is not a prime number. </p>";
            }
        }
    ?>
</body>
</html>