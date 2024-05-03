<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19_Explode string program.</title>

</head>

<body>
    <h2>PHP script to explode a string delimited with ## into an array.</h2>
    <form method="post" action="19_ExplodeStr.php">
        <label for="">Enter a string : </label>
        <input type="text" name="string"><br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $string = $_POST['string'];

        $array = explode('##', $string);

        // Loop through the array and print each element in the desired format
        foreach ($array as $index => $element) {
            echo "Array[$index]= $element ";
            echo "<br>";
        }
    }
    ?>
</body>

</html>