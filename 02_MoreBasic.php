<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>

<body>
    <div class="container">
        <h1>Lets Learn PHP </h1>
        <p>Your party Status Is here</p>
        <?php
        // $age = 7;
        // if ($age > 18) {
        //     echo "You can Go to Party";
        // } else if ($age == 7) {
        //     echo "ou Are 7 years";
        // } else {
        //     echo "You Not Go to PArty";
        // }
        $languages = array("python", "java", "Php");
        // echo $languages[0];
        
        $a = 0;
        while ($a <= 10) {
            echo "<br>";
            echo "Value of a is :";
            echo $a;
            $a++;
        }
        //while
        $a = 0;
        while ($a < count($languages)) {
            echo "<br>";
            echo "Languages of a is :";
            echo $languages[$a];
            $a++;
        }
        //do while
        $a = 0;
        do {
            echo "<br>";
            echo "Languages of a do while  is :";
            echo $languages[$a];
            $a++;
        } while ($a < count($languages));

        //for loop
        for ($i = 0; $i < count($languages); $i++) {
            echo "<br>";
            echo "Count of using for loop:";
            echo $languages[$i];
        }

        //for each
        foreach ($languages as $value) {
            echo "<br>";
            echo "the Value for each is :";
            echo $value;
        }

        print5();
        function print5()
        {
            echo "FIVE";
        }


        function printNumber($number)
        {
            echo "<br>YOur Number is :";
            echo $number;
        }
        printNumber(5);
        echo "<br>";



        ?>
    </div>
</body>

</html>