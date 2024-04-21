<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Palindrome Checker</h2>
    <form method="post" action="">
        <label for="">Enter the string : </label>
        <input type="text" name="input_string" required>
        <br> <br>

        <input type="submit" name="submit" value="Check">
        <br> <br>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $Str = $_POST['input_string'];
        $length = strlen($Str);
        $Reverse_Str = "";
        for($i = $length-1; $i>=0; $i--){
            $Reverse_Str .= $Str[$i];
        }
        // echo "The reverse string is : $Reverse_Str. ";
        echo "<br>"; 
        if($Str == $Reverse_Str){
            echo "The string is palindrome.";
            echo "<br>";
        }
        else{
            echo "The string is not palindrome.";
        }
    }
    ?>
</body>
</html>
