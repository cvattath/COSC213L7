<?php
$grades = ['sam' => 86,
            'roy'=> 96,
            'John' => 77];

foreach ($grades as $key => $value) {
    echo 'Student Name: '. $key .' Grade: '. $value ."\n";
};
?>