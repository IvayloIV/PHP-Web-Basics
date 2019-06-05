<?php

class Employee {
    public $name;
    public $salary;
    public $position;
    public $department;
    public $email;
    public $age;

    function __construct($name, $salary, $position, $department, $email = 'n/a', $age = -1) {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    function __toString() {
        $roundedSalary = number_format($this->salary, 2, '.', '');
        return "{$this->name} {$roundedSalary} {$this->email} {$this->age}";
    }
}

$departments = [];
$n = intval(readline());
for ($i = 0; $i < $n; $i++) {
    $tokens = explode(' ', readline());
    list($name, $salary, $position, $department) = $tokens;
    $salary = floatval($salary);

    if (!key_exists($department, $departments)) {
        $departments[$department] = [
            'totalSalary' => 0,
            'employees' => []
        ];
    }
    $departments[$department]['totalSalary'] += $salary;
    $newEmployee = new Employee($name, $salary, $position, $department);
    if (count($tokens) > 4) {
        $newEmployee->email = $tokens[4];
    }

    if (count($tokens) > 5) {
        $newEmployee->age = intval($tokens[5]);
    }
    $departments[$department]['employees'][] = $newEmployee;
}

usort($departments, function ($a, $b) {
    return ($b['totalSalary'] / count($b['employees'])) - ($a['totalSalary'] / count($a['employees']));
});

$highestSalaryDepart = $departments[0];
usort($highestSalaryDepart['employees'], function ($a, $b) {
   return $b->salary - $a->salary;
});

echo "Highest Average Salary: {$highestSalaryDepart['employees'][0]->department}" . PHP_EOL;
foreach ($highestSalaryDepart['employees'] as $employee) {
    echo $employee . PHP_EOL;
}