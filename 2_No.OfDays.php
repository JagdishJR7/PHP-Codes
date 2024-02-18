<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To find the no. days in a given month.</title>
</head>

<body>
    <h2>2nd pract : To find the no. of days in a month.</h2>
    <form method="post" action="2_No.OfDays.php">
        <label for="">Enter the month (1-12)</label>
        <input type="number" name="number" min="1" max="12"><br><br>

        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $month = $_POST["number"];
        switch ($month) {
            case 1:
                echo "<p>No. of days in $month is 31 </p>.";
                break;

            case 3:
                echo "<p>No. of days in $month is 31</p>.";
                break;

            case 5:
                echo "<p>No. of days in $month is 31</p>.";
                break;

            case 7:
                echo "<p>No. of days in $month is 31</p>.";
                break;

            case 8:
                echo "<p>No. of days in $month is 31</p>.";
                break;

            case 10:
                echo "<p>No. of days in $month is 31</p>.";
                break;

            case 12:
                echo "<p>No. of days in $month is 31</p>.";
                break;

            case 4:
                echo "<p>No. of days in $month is 30</p>.";
                break;

            case 6:
                echo "<p>No. of days in $month is 30</p>.";
                break;

            case 9:
                echo "<p>No. of days in $month is 30</p>.";
                break;

            case 11:
                echo "<p>No. of days in $month is 30</p>.";
                break;

            case 2:
                echo "<p>No. of days in $month is 28</p>.";
                break;

            default:
                echo "<p> Invalid Month number. </p>";
        }
    }
    ?>
</body>

</html>
