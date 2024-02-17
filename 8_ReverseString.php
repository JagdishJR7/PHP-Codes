<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String.</title>
</head>
<body>
    <h2>Practical-8 : To reverse the string.</h2>
    <form method="post" action="8_ReverseString.php">
        <label for="">Enter any String : </label>
        <input type="text" name="string" > <br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $Str = $_POST['string'];
            $length = strlen($Str);
            $RevesedStr = "";
            for($i = $length -1; $i >= 0; $i--){
                $RevesedStr .= $Str[$i];
            }
            echo "Reverse of the string : $RevesedStr.";
        }
    ?>
</body>
</html>