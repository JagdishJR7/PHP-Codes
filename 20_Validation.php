<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <h2>HTMl form with input elements: and PHP Script to validation.</h2>
    <form action="20_Validation.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name"><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age"><br><br>

        <label for="address">Address:</label>
        <input type="text" name="address"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email"><br><br>

        <input type="submit" value="Submit">
        <br><br>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $errors = [];

        // a) Name, age, address should not left blank 
        if (empty($name)) {
            $errors[] = "Name is required";
        }

        if (empty($age)) {
            $errors[] = "Age is required";
        }

        if (empty($address)) {
            $errors[] = "Address is required";
        } 

        // b)Age should be greater than 18
        if($age <= 18){
            $errors[] = "Age must be greater than 18.";
        }

        // c)Address should contain 'Delhi'.
        // if(!strpos($address, "Delhi")) {
        //     $errors[] = "Address must contain 'Delhi'";
        // }
        if(strtolower($address) !== "delhi") {
            $errors[] = "Address must contain 'Delhi'";
        }

        // d) Check whether the email entered is valid or not.
        if (empty($email)) {
            $errors[] = "Email is required";
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }

        
        // Display errors or success message
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } 
        else {
            echo "Form submitted successfully!";
        }
    }
    ?>

</body>
</html>