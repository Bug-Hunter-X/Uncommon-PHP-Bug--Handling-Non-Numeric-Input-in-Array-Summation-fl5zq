# Uncommon PHP Bug: Handling Non-Numeric Input in Array Summation

This repository demonstrates a common yet easily overlooked bug in PHP: improper handling of non-numeric values when performing array summation.  The `calculateSum` function is designed to sum an array of numbers. However, if the input array contains non-numeric values (such as strings), the function will throw an error.

The `bug.php` file shows the buggy code, where a simple `for` loop iterates through the array and attempts to add each element directly to the `sum`. If a non-numeric value is encountered, a type error will occur.

The `bugSolution.php` file demonstrates the corrected version which uses strict type checking (`is_numeric()`) to validate each element before adding it to the sum.  This prevents the error and provides better error handling.  The solution also includes informative error messages to help in debugging.

This example highlights the importance of thorough input validation to prevent unexpected behavior and crashes in PHP applications.