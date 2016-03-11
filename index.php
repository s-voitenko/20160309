<?php
$array = [
    "name" => "Артем",
    "surname" => "Мельник",
    "agerand" => rand(18,60)
];
echo "<pre>";
print_r($array);
echo "</pre>";
echo "$array[name] $array[surname] $array[agerand]";

?>


