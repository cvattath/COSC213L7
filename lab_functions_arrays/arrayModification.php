<?php

$firstArr= [1, 2, 3];
array_push( $firstArr, 4);
array_pop( $firstArr );

$arr_merge = array_merge($firstArr, [5, 6]);

foreach ($arr_merge as $value) {
    echo "". $value ." ";
};

?>