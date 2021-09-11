<?php
$employee =[
'name' => 'john',
'email' => 'john@wxample.com',
'phone' => '1234567890'
];

//get the value of emaployee name
echo $employee['name'];

//get all values
foreach ($employee as $key => $value) {
    echo $key. ':' . $value;
    echo '<br>';
}
?>