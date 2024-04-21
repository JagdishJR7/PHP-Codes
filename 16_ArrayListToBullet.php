<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Name Bullet List </title>
</head>

<body>
    <h2>Array name to bullet list.</h2>
    <form action="16_ArrayListToBullet.php" method="POST">
        <label for="input[]">Enter First Elements:</label>
        
        <input type="text" name="input[]"><br>
        
        <label for="input[]">Enter Second Elements:</label>
        <input type="text" name="input[]"><br>
        
        <label for="input[]">Enter Third Elements:</label>
        <input type="text" name="input[]"><br><br>

        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Array = $_POST['input'];

        echo "Original array: ";
        foreach ($Array as $element) {
            echo $element . " , ";
        }
        echo "<br>";
        echo "<br>";

        echo "Expected Array: ";
        echo "<ul>";
        foreach ($Array as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul>";

        $Array1 = array('Hello','Nameste','KemCho');
        echo "Sample : ";
        foreach($Array1 as $element){
            echo $element . " , ";
        }
        echo "<br>";
        echo "<br>";

        echo "Expected Output : ";
        echo "<ul>";
        foreach($Array1 as $element){
            echo "<li>$element</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>