<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Marks</title>
</head>

<body>
    <h2>Write a PHP script to create an associative array to store marks in 5 subjects.</h2>

    <form method="post" action="18_AssociativeArray.php">
        <label>Math Marks:</label>
        <input type="number" name="marks[Math]"><br>

        <label>Science Marks:</label>
        <input type="number" name="marks[Science]"><br>

        <label>English Marks:</label>
        <input type="number" name="marks[English]"><br>

        <label>History Marks:</label>
        <input type="number" name="marks[History]"><br>

        <label>Geography Marks:</label>
        <input type="number" name="marks[Geography]"><br><br>

        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $marksArray = $_POST['marks'];

        // Display all the subjects and marks
        echo "<h2>All Keys and Values:</h2>";
        echo "<ul>";
        foreach ($marksArray as $subject => $marks) {
            echo "<li>$subject: $marks</li>";
        }
        echo "</ul>"; 
        

        // To sort based on key
        ksort($marksArray);

        // Display the sorted key and values.
        echo "<h2>Sorted Keys and Values:</h2>";
        echo "<ul>";
        foreach ($marksArray as $subject => $marks) {
            echo "<li>$subject: $marks</li>";
        }
        echo "</ul>";
    }
    ?>

</body>

</html>