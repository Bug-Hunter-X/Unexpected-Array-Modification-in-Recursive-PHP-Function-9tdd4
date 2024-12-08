```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    }
  }
  return $data;
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
print_r($processedData);
```