<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare two variables.</title>
</head>
<body>
    <h2>PHP code To compare two variables using equality opr.</h2>
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
                echo "THe values are not equal.";
                echo "<br>";
            }

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
        }
    ?>
</body>
</html>