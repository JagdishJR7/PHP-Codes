<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To check string consist of lower case</title>

</head>
<body>
    <h2>PHP code to check string consist of lower case character or not.</h2>
    <form action="10_Check_lowercase.php" method="post">
        <label for="">Enter string : </label>
        <input type="text" name="string"><br><br>

        <input type="submit" name="submit" value="submit"> <br><br>

    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Str = $_POST['string'];
            if(ctype_lower($Str)){
                echo "String consist only lowercase characters.";
            }
            else{
                echo "String does not consist lowercase characters.";
            }
        }
    ?>
</body>
</html>