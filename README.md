# PHP Array Key Type Juggling Bug

This repository demonstrates a common and subtle bug in PHP related to array key type juggling.  When using both strings and integers as array keys, PHP's loose typing can lead to unexpected results.  The `bug.php` file shows the problematic code, while `bugSolution.php` offers a solution.

## Description

PHP often automatically converts strings to integers when used as array keys. This can cause issues when you intend to have distinct keys based on their string or integer nature. The original code showcases this, while the solution shows how to avoid the unexpected key merging.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the corrected behavior.

## Solution

The solution involves explicitly using string keys where necessary to prevent PHP's automatic type coercion. Using type-hinting and strict comparison can also help prevent this type of error.