The solution is to use the strict comparison operator (`===`) instead of the loose comparison operator (`==`).  Strict comparison checks for both value and type equality.

```php
<?php
function checkValue($value) {
  if ($value === 0) {
    return 'Value is zero';
  } else {
    return 'Value is not zero';
  }
}

$test1 = 0;
$test2 = '0';
echo checkValue($test1); // Output: Value is zero
echo checkValue($test2); // Output: Value is not zero (Correct!)
?>
```