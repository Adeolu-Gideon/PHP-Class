<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$handle = fopen('userdata.csv', 'a');
$fwrite ($handle, $name);

fclose($handle);
print_r($handle. '<br>');

?>