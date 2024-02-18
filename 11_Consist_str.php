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
        <input type="text" name="str"><br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>
    
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Str = $_POST['str'];
            if (ctype_lower($Str)){
                echo "The string '$Str' consists of all lowercase letters.</p>";
            }
            else{
                echo "The string '$Str' does not consist of all lowercase letters.</p>";
            }

        }
    ?>
</body>
</html>