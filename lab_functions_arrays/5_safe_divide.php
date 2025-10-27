<?php
// Function that safely divides two numbers
function safeDivide($a, $b)
{
    if ($b == 0) {
        return "Error: Division by zero is not allowed!";
    } else {
        return $a / $b;
    }
}

// Test with examples
echo safeDivide(10, 2) . "\n"; // Output: 5
echo safeDivide(7, 0) . "\n";  // Output: Error: Division by zero!

