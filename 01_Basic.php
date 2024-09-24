<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> This is Php <!-- <?php
$val1 = 12;
$val2 = 5;

//Arithmetic Oerprators,+,-,*,/,% etc
echo "<br>";

echo "THe Value of Var1+var2=";
echo $val1 + $val2;
echo "<br>";
echo "THe Value of Var1-var2=";
echo $val1 - $val2;
echo "<br>";



//Assignment Operators,==,+=,-=,*=,/=;

$newVar = $val1;
echo $newVar;
echo "<br>";
$newVar += $val1;
echo $newVar + 5;
echo "<br>";

//Comparision Operators,!=,<=,>=,<,>;
echo "The Value of 1==4";
echo var_dump(1 == 4);//value ND TYPE CHECK return false



//Incremwnt/Decrement Operator
echo $val1++;
echo "<br>";

echo $val1--;
echo "<br>";

echo ++$val1;
echo "<br>";

echo --$val1;
echo "<br>";

//Logical Operator=and(&&),or(||),xor,(!)

//xor if true return false if false then return false 

// $myVar = (true and true);
$myVar = (false and true);
echo var_dump($myVar);
echo "<br>";
?> -->
    <?php define("PI", 3.14);

    // Data Type
    // String
    echo "<br>";

    echo "DataType:";
    $var = "This is String";
    echo var_dump($var);
    echo "<br>";
    echo "DataType:";
    // int
    $var1 = 12;
    echo var_dump($var1);
    echo "<br>";
    // float
    
    echo "DataType:";
    $var1 = 12.1;
    echo var_dump($var1);
    echo "<br>";
    // boolean
    echo "DataType:";
    $var1 = true;
    echo var_dump($var1);

    echo "<br>";
    echo PI;



    // Array
    // Object
    
    ?>
</body>

</html>