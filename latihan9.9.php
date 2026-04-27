<?php
class Employee {
    private $first_name;
    private $last_name;
    private $age;

    // Constructor untuk inisialisasi property
    public function __construct($first_name, $last_name, $age) {
        $this->first_name = $first_name;
        $this->last_name  = $last_name;
        $this->age        = $age;
    }

    // Getter untuk First Name
    public function getFirstName() {
        return $this->first_name;
    }

    // Getter untuk Last Name
    public function getLastName() {
        return $this->last_name;
    }

    // Getter untuk Age
    public function getAge() {
        return $this->age;
    }
}

// Membuat objek Employee pertama
$objEmployeeOne = new Employee('Bob', 'Smith', 30);
echo $objEmployeeOne->getFirstName(); // Bob
echo "<br>";
echo $objEmployeeOne->getLastName();  // Smith
echo "<br>";
echo $objEmployeeOne->getAge();       // 30
echo "<br><br>";

// Membuat objek Employee kedua
$objEmployeeTwo = new Employee('John', 'Smith', 34);
echo $objEmployeeTwo->getFirstName(); // John
echo "<br>";
echo $objEmployeeTwo->getLastName();  // Smith
echo "<br>";
echo $objEmployeeTwo->getAge();       // 34
?>
