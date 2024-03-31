<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare two variables.</title>
</head>
<body>
    <h2>PHP code To compare two variables using equality/Identity opr.</h2>
    <form method="post" action="9_Comp_Var.php">
        <label for="">Enter the first Var : </label>
        <input type="number" name="num1"><br><br>

        <label for="">Enter the second Var : </label>
        <input type="number" name="num2"> <br><br>

        <input type="submit" name="submit" value="submit"> <br><br>

    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            // using equality operator.
            echo "Using Equality Opr : ";
            // echo "<br>";
            if($num1 == $num2){
                echo "The values are equal.";
                echo "<br>";
            }
            else{
                echo "The values are not equal.";
                echo "<br>";
            }
                
            echo "<br>";

            // using identity operator
            echo "Using Identity Opr : ";
            // echo "<br>";
            if($num1 === $num2){
                echo "The values are equal. ";
                echo "<br>";
            }
            else{
                echo "The values are not equal.";
            }

            echo "<br>";
            echo "<br>";
            echo "<br>";

            echo "<p> - Using assigned Variables.</p>";
            echo "<br>";

            $n1 = 5;
            $n2 = "5";
            echo "n1 = $n1";
            echo "<br>";
            
            echo "n2 = $n2";
            echo "<br>";
            
            echo "<p> Using equality operator::</p>";
            // echo "<br>";
            
            if($n1 == $n2){
                echo "The values are equal.";
                echo "<br>";
            }
            else{
                echo "Values are not equal.";
                echo "<br>";
            }
            echo "<p> Using Identity operator::</p>";
            // echo "<br>";

            if($n1 === $n2){
                echo "The values and datatypes both are equal.";
                echo "<br>";
            }
            else{
                echo "one of Value or Datatype is not same.";
                echo "<br>";
            }

        }
    ?>
</body>
</html>
