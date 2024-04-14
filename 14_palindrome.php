<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Palindrome Checker</h2>
    <form method="post" action="">
        Enter a string: <input type="text" name="input_string" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $input_string = $_POST['input_string'];
        
        // Function to check if a string is palindrome
        function isPalindrome($str){
            $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str)); // Remove non-alphanumeric characters and convert to lowercase
            return $str == strrev($str); // Compare original string with its reverse
        }
        
        // Check if input string is palindrome
        if(isPalindrome($input_string)){
            echo "<p>$input_string is a palindrome.</p>";
        } else {
            echo "<p>$input_string is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>