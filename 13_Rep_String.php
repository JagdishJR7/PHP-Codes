<!DOCTYPE html>
<html>
<head>
    <title>Replace 'the'</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="main_string">Enter a string:</label><br>
    <input type="text" id="main_string" name="main_string"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered string
    $main_string = $_POST['main_string'];

    // Replace the first occurrence of 'the' with 'That'
    $modified_string = preg_replace('/\bthe\b/', 'That', $main_string, 1);

    // Output the modified string
    echo "<p>Modified String: $modified_string</p>";
}
?>

</body>
</html>