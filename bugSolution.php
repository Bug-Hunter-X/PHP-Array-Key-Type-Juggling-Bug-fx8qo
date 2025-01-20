To avoid this issue, ensure you consistently use the intended data type for array keys.  Here's a corrected version:

```php
$myArray = [];
$myArray["1"] = "one";
$myArray[1] = "one_int"; //Using a different value to distinguish
$myArray["2"] = "two";
print_r($myArray);
```

This ensures "1" and 1 are treated as separate keys, preserving the intended data structure.  Additionally, using strict comparison (`===`) when checking for the existence of keys can also be beneficial, as this avoids PHP's loose type comparison.