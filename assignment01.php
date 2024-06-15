<?php
/*
Problem-01
================================================================================
Given a list of integers, find the minimum of their absolute values. 
Note:
'Absolute values' means the non-negative value without regard to its sign. For example, the Absolute value of 123 is 123, and the Absolute value of -123 is also 123. 

Sample input 1:
10 12 15 189 22 2 34
Sample output 1: 
2

Sample input 2:
10 -12 34 12 -3 123
Sample output 2:
3
*/
function findMinAbsValue($n){
    $numbers = explode(" ", $n);
    $minAbsVal = PHP_INT_MAX;
    
    foreach($numbers as $number){
        
        if($number >0){
            $absVal = (int)$number;
        }else if($number <0){
            $neagative = $number;
        }
        if($absVal < $minAbsVal){
            $minAbsVal = $absVal;
        }
    }
    return $neagative ? -1*$neagative:$minAbsVal;
}

echo findMinAbsValue("10 12 15 189 22 2 32"
);
/*
Problem 2:
================================================================================
Given a few paragraphs in a file, read the file and count how many words are there. 
For example, if there is a file with the following contents:

Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.  

You need to output: 10

Because there are 10 words. 
Note: There can be multiple paragraphs. You need to count all of the words from all of the paragraphs. 
You need to read the data from a file. 
*/
$file = fopen("interActive.txt", "r");
$read = fread($file,filesize("interActive.txt"));

$wordCount = str_word_count($read);

echo $wordCount;

/*
Problem 3:
================================================================================
Given a sentence, keep the order of the words same, but reverse the characters of each word. 
For example, if the given sentence is: ‘I love programming’ 
The result should be: ‘I evol gnimmargorp’

Here the order of the words is the same as the given sentence, but the order of the characters in the words is reversed. 


*/
$string = "I love programming";
$Arr = explode(" ", $string);
foreach($Arr as $val){
    $reversed = strrev(" ".$val);
    print_r($reversed);
}

/*
Problem 4:
================================================================================
Print the following pattern based on the given number n (can be any number). 
Sample input: 5 
Sample output: 
        *
       ***
      *****
     *******
    *********
*/
function printPyramid($n){
    for($i=1; $i<=$n; $i++){
        for($j = $i; $j<$n;$j++){
            echo " ";
        }
        for($k = 1; $k<=2*$i-1;$k++){
            echo "*";
        }echo "\n";
    }
    echo "\n";
}
echo printPyramid(5);

/*
Problem 5:
==========================================================================
Given an integer n, find the sum of the digits of the integer.

Sample input 1:
62343
Sample output 1: 
18

Sample input 2:
1000
Sample output 2: 
1


*/
function sumDigits($n){
    //converting numbers to string:
    $numbers = strval($n);
    //spliting numbers into seperate digits:
    $digits = str_split($numbers);
    //Initializing sum variable to store the sum value:
    $sum = 0;
    foreach($digits as $value){
        $sum += $value;
    }
    return $sum;
    }
    $input = 1000;
    $result = sumDigits($input);
    echo $result;