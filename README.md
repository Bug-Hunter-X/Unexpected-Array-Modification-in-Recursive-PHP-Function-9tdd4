# Unexpected Array Modification in Recursive PHP Function

This repository demonstrates a subtle bug in a recursive PHP function that unexpectedly modifies the original array.  The function `processData` is designed to process nested arrays, but due to the way it's implemented, it directly modifies the input array instead of creating a copy. This leads to unexpected behavior and potential data corruption.

The `bug.php` file contains the buggy code. The `bugSolution.php` provides a corrected version that addresses the issue by creating a copy of the array before processing it recursively.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output. You'll notice that the original `$data` array is modified by the function.

## Solution

The solution is to create a copy of the array before processing it recursively.  This prevents modification of the original array.