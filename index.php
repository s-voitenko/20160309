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

$array2 = [
    ['Артем', 'Мельник', rand(18,60)],
    ['Никита', 'Шевченко', rand(18,60)],
    ['Дмитрий', 'Бойко', rand(18,60)]
];
echo "<pre>";
print_r($array2);
echo "</pre>";

?>


