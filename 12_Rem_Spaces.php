<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP script to remove spaces.</title>

</head>
<body>
    <h2>PHP script to remove spaces from original string.</h2>
    <form action="12_Rem_Spaces.php" method="post">
        <label for="">Enter the string :</label>
        <input type="text" name="Str"><br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>
    
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Str = $_POST['Str'];
            // We can replace ' ' with '';
            $NewStr = str_replace(' ','',$Str);

            echo "orignial String : $Str.";
            echo "<br>";
            
            Echo "Now, String after removing spaces : $NewStr.";
            
            
        }
    ?>
</body>
</html>