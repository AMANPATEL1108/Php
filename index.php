<?php
$insert = false;

if (isset($_POST['name'])) {

    $server = "Loalhost";
    $username = "root";
    $password = "";
    // $db = 'trip';

    $con = mysqli_connect($server, $username, $password); //Datbase notnhere insert directly in query

    if (!$con) {
        die("connection to this database is Faild due to" . mysqli_connect_error());
    }
    // echo "Success connection database";

    $name = $_POST['name'];
    $gender = $_POST['age'];
    $age = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    //trip trip is database and table name
    $sql = "INSERT INTO `trip`.`trip` (`name`,`age`,`gender`,`email`,`phone`,`other`,`dt`) VALUES (
'$name','$age','$gender','$email','$desc','$other',
current_timestamp())";

    if ($con->query($sql) == true) {
        // echo "Successfully Inserted";
        $insert = true;
    } else {
        echo "ERROR:$sql <br> $con->error";
    }

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
    <img class="bg" src="./img1.jpg" alt="">
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <p class=sunmitMsg> Enter Your Detail Submit To Conform to Participate in Trip</p>"; <?php
        if ($insert == true) {
            echo "<p class=`submitMs`>THanks for Submitting form</p>";
        }
        ?>
        <form action="index.php">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age" <input type="text" name="gender"
                id="gender" placeholder="Enter  gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Gender">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Your Other INformation"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>