<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting in PHP.</title>
</head>
<body>
    <h2>Sorting in PHP.</h2>
    <form method="post" action="15_Sorting.php">
        <label for="">Enter an array (Using comma's) : </label>
        <input type="text" name="number"> <br><br>

        <input type="submit" name="submit" value="submit"><br>
        <br>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Array = explode(',', $_POST['number']); // Split input string into array
            echo "Original array: ";
            foreach($Array as $value) {
                echo $value . " , ";
            }
            echo "<br>";
            echo "<br>";
            
            // Convert string elements to integers
            foreach($Array as &$value) {
                $value = intval($value);
            }
            
            // Call bubbleSort function
            bubbleSort($Array, count($Array));
            
            echo "Sorted array: ";
            foreach($Array as $value) {
                echo $value . " , ";
            }
        }
        
        // Function to perform bubble sort
        function bubbleSort(&$arr, $n) {
            for ($i = 0; $i < $n - 1; $i++) {
                $swap = false;
                for($j = 0; $j < $n - 1 - $i; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                        $swap = true;
                    }
                }
                // If no swawp occurred, array is sorted.
                if ($swap == 0) {
                    break;
                }
            }
        }
    ?>
</body>
</html>
