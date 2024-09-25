<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost"; // Server name for XAMPP
    $username = "root"; // Default MySQL root username
    $password = ""; // Empty password since no password is set for root
    $dbname = "trip"; // Define your database name

    // Create a connection
    $con = mysqli_connect($server, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Collect post variables from form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc']; // Assuming 'desc' is for 'other' column

    // SQL query to insert data into the 'trip' table
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    // Execute the query
    if ($con->query($sql) === true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <img class="bg" src="./img1.jpg" alt="Background image">
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <p class="submitMsg">Enter your details below to participate in the trip.</p>
        <!-- Display success message if form is successfully submitted -->
        <?php if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submitting the form.</p>";
        } ?>
        <form action="index.php" method="post"> <!-- Form submission method set to POST -->
            <input type="text" name="name" id="name" placeholder="Enter your Name" required>
            <input type="text" name="age" id="age" placeholder="Enter Your Age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter gender" required>
            <input type="email" name="email" id="email" placeholder="Enter your Email" required>
            <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" required>
            <!-- Added phone input -->
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>