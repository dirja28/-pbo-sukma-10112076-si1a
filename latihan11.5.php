<?php
class Comparator{
private $key;

public function __construct($key){
    $this->key = $key;
}
public function __invoke($a, $b){
    return $a[$this->key] <=> $b[$this->key];
}
}

$customers = [
    ['name' => 'Alice', 'age' => 30],
    ['name' => 'Bob', 'age' => 25],
    ['name' => 'Charlie', 'age' => 35],
];

usort($customers, new Comparator('name'));
print_r($customers);

usort($customers, new Comparator('age'));
print_r($customers);
?>
