<?php
//--------------------------- DATA -----------------------------------------------------
$keys = ["A", "O", "K"];
$values = ["Ahmed", "Osama", "Kamal"];
$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];
$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
//--------------------------------------------------------------------------------

$alphabets = ['a', 'b', 'c']; // declare and assing value to array
count([1, 2, 3, 4, 5]); // get length of array
array_push($alphabets, "d", "e", "f"); // pushing to the end of array
$alphabets[] = 'z'; // push to the ends of the array the letter 'z'

//--------------------------------------------------------------------------------

$alphabets = array_merge($alphabets, range('g', 'y')); // array_merge(string1,string2) concatinate 2 strings

range(1, 10); // return a range of integers starting point (included) to ending point (excluded)

range('a', 'z'); //return an array of key values of letters from a to z
// make sure with print_r(gettype(range('a', 'z')));

//--------------------------------------------------------------------------------

echo '<pre>';
print_r(array_chunk($friends, 2)); // will group each 2 elements of $friends in a sub-array
echo '</pre>';

echo '<pre>';
print_r(array_chunk($countries, 2, True)); // will use the original aray indexes
echo '</pre>';

//--------------------------------------------------------------------------------

echo '<pre>';
print_r(array_change_key_case($countries, CASE_UPPER)); // will upper-case keys
echo '</pre>';

echo '<pre>';
print_r(array_combine($keys, $values)); // will combine $keys as key and $values as values in 1 array (must be the same length).
echo '</pre>';

//--------------------------------------------------------------------------------

array_key_exists("Osama", $friends); // will searsh for Osama in "keys" of $friends array.

//--------------------------------------------------------------------------------

array_count_values($countries); // Count all the "values" of the array and return them as an Array.

//-----------------------foreach---------------------------------------------------

$countries_with_discount = ["MA" => 99, "EGY" => 50, "FR" => 0];
foreach ($countries_with_discount as $country) {
    //echo $country;
}
foreach ($countries_with_discount as $country => $discount) {
    //echo $country . "discount is" . $discount;
}

foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country == "USA") {
        continue; //will ignore this itteration but will continue the loop
    }
    //echo $country . "<br />";
}

//-----------------------endforeach-------------------------------------------------

$numbers = [10, 2, 34, 24, 12, 1, 43, 23];
array_sum($numbers); //array_sum() return the sum of all values withing the array.

//--------------------------------------------------------------------------------
$associativeArray = [
    'key1' => 'value1',
    'key2' => null,
    'key3' => 'value3',
    'key4' => null,
];

$numberOfNonNullElements = 0;

foreach ($associativeArray as $key => $value) {
    if ($value !== null) {
        $numberOfNonNullElements++;
    }
}
//--------------------------------------------------------------------------------
