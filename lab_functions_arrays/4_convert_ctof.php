<?
// Function to convert Celsius to Fahrenheit
function convertCtoF($c)
{
    return ($c * 9 / 5) + 32;
}

// Test with sample values
echo convertCtoF(0) . "\n";    // Output: 32
echo convertCtoF(30) . "\n";   // Output: 86
echo convertCtoF(100) . "\n";  // Output: 212

