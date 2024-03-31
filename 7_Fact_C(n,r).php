<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fact C(n,r)</title>
</head>

<body>
    <h2>Finding a factorial using C(n,r).</h2>
    <form method="post" action="7_Fact_C(n,r).php">
        <label for="">Enter any number n: </label>
        <input type="number" name="n" > <br>

        <label for="">Enter any number r: </label>
        <input type="number" name="r" > <br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $n = $_POST['n'];
            $r = $_POST['r'];
            function factorial($number){
                if($number ==0 || $number ==1){
                    return 1;
                }
                else{
                    return $number*factorial($number-1);
                }
            }
            
            function combination($n,$r){
                return factorial($n)/(factorial($r)*factorial($n-$r));
            }

            if($n >= $r){
                $result = combination($n,$r);
                echo "C($n,$r) = $result";

            }
            else{
                echo "Error : n must be greater than and equal to r.";
            }

        }
    ?>

</body>

</html>