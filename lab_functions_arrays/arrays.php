<?php

//Part 2.1 Indexed Array
$arr = [5, 4, 6, 9, 2];
$maxElement = max($arr);
$minElement = min($arr);
echo "$maxElement is the largest number\n";
echo "$minElement is the smallest number\n";

//Part 2.2 Associative Array
$grades = ['sam' => 86,
            'roy'=> 96,
            'John' => 77];

foreach ($grades as $key => $value) {
    echo 'Student Name: '. $key .' Grade: '. $value ."\n";
};

//Part 2.3 Array Modification
$firstArr= [1, 2, 3];
array_push( $firstArr, 4);
array_pop( $firstArr );

$arr_merge = array_merge($firstArr, [5, 6]);

foreach ($arr_merge as $value) {
    echo "". $value ." ";
};

echo "\n";

//Part 2.4 - Counting Values

$countArr = [90, 80, 90, 70, 80];
$count = array_count_values($countArr);
print_r ($count);


?>