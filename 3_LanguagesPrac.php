<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop down list practical</title>
</head>
<body>
    <h2>3rd Pract : Drop down list practical.</h2>
    <form method="post" action="3_LanguagesPrac.php">
      <label for="languages">Languages : </label>  
      <select name="languages" id="languages">
        <option value="hindi">Hindi</option>
        <option value="english">English</option>
        <option value="spanish">Spanish</option>
      </select><br><br>
      
      <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $subject = $_POST['languages'];
            switch($subject){
                case "hindi":
                    echo "<p> नमस्ते, मैं कंप्यूटर हूँ </p>";
                    break;

                case "english":
                    echo "<p> Hello, I am Computer. </p>";
                    break;

                case "spanish":
                    echo "<p> hola, soy una computadora </p>";
                    break;
            }
        }
    ?>
</body>
</html>