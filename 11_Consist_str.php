<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To check string consist another string.</title>

</head>
<body>
    <h2>PHP code to check string contains another string or not.</h2>
    <form action="11_Consist_str.php" method="post">
        <label for="">Enter the string :</label>
        <input type="text" name="Str"><br><br>

        <label for="">Enter the SubString :</label>
        <input type="text" name="SubStr"><br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>
    
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Str = $_POST['Str'];
            $SubStr = $_POST['SubStr'];
            // We need to check whether this subsrtring consist in string or not 
            // we are making function for that 
            function ConsStr($Str, $SubStr){
                // There is function called strpos which finds checks the 
                return strpos($Str,$SubStr) == True;
            }
            if(ConsStr($Str,$SubStr)){
                echo "Yes, main String is Contains the given SubString";
                echo "<br>";
            }
            else{
                echo "No, main String does not contain the SubString.";
                echo "<br>";
            }
            
        }
    ?>
</body>
</html>