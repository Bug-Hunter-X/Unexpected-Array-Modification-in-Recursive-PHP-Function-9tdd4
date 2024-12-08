```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call
    } else {
      $newData[$key] = $value;
    }
  }
  return $newData;
}

$data = [
  'a' => 1,
  'b' => [
    'c' => 2,
    'd' => [
      'e' => 3
    ]
  ]
];

$processedData = processData($data);
print_r($processedData); //Original array remains unchanged
print_r($data); //Original array remains unchanged
```