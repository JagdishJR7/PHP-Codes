<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names Starting with "A"</title>
</head>

<body>
    <h2>PHP scrip to Display the names which start with character 'A'.</h2>
    <form method="post" action="17_Array5Names.php">
        <label>Enter first name:</label>
        <input type="text" name="names[]"><br>

        <label>Enter second name:</label>
        <input type="text" name="names[]"><br>

        <label>Enter third name:</label>
        <input type="text" name="names[]"><br>

        <label>Enter fourth name:</label>
        <input type="text" name="names[]"><br>

        <label>Enter fifth name:</label>
        <input type="text" name="names[]"><br><br>

        <input type="submit" value="Submit">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Array = $_POST['names'];

        // Names start with A.
        echo "<h3>Names Starting with 'A':</h3>";
        echo "<ul>";
        foreach ($Array as $name) {
            if (strtoupper(substr($name, 0, 1)) === 'A') {
                echo "<li>$name</li>";
            }
        }
        echo "</ul>";
    }
    ?>

</body>

</html>