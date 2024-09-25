<?php


// reverse String---------------------------------------1
echo strrev("hello");  // Output: "olleh"
//----------------------------
//isprime or not------------------------------------------2
echo "<br>";
function isPrime($num)
{  //first
    if ($num <= 1)
        return false;
    //second
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo isPrime(10) ? "True" : "False";  // Output: "True"

//fibonacci-------------------------------------------------3

echo "<br>";

fibonacci(6);
function fibonacci($n)
{
    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $n; $i++) {
        $sum = $a + $b;
        $a = $b;
        $b = $sum;
    }
    echo $sum;
}
echo "<br>";

//factorial----------------------------------------------4

factorial(5);

function factorial($facno)
{
    $sum = 1;


    for ($i = 1; $i <= $facno; $i++) {
        $sum = $i * $sum;
    }
    echo $sum;

}

//palidrome or not-----------------------------------------------5

echo "<br>";
echo palidrone("madam");
function palidrone($str)
{
    $reversed = strrev($str);
    if ($str === $reversed) {
        return "yes";
    }
    return "No";
}

//sum of digit---------------------------------------------6
echo "<br>";
sum(4, 5);

function sum($num1, $num2)
{
    $sumofall = $num1 + $num2;
    echo $sumofall;
}


//find a maximum number from array--------------------------------------7
echo "<br>";

$no = [1, 2, 3, 4];

largerfind($no);

function largerfind($no)
{
    $next = -1;
    foreach ($no as $high) {
        if ($next < $high) {
            $next = $high;
        }
    }
    echo $next;
}

//vowels calculates ---------------------------------------------8
echo "<br>";

function countVowels($str)
{
    $vowel_count = preg_match_all('/[aeiouAEIOU]/', $str);
    return $vowel_count;
}

// Example
echo countVowels("hello world");  // Output: 3


//check two String are anagrams or not-----------------------------------9
echo "<br>";

echo anagrams("amn", "mana") ? "true" : "false";

function anagrams($str1, $str2)
{

    $str1 = str_split($str1);
    $str2 = str_split($str2);
    sort($str1);
    sort($str2);
    return $str1 == $str2;
}

//Find second largest number in array-------------------10
echo "<br>";

$numberfindsecondlarges = [1, 2, 5, 6, 4, 5, 9, 8, 7];


echo secondLargest($numberfindsecondlarges);

function secondLargest($num)
{

    rsort($num);
    $newarr = array_unique($num);
    return $num[1];

}



?>