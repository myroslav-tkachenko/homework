<?php
#Задание 1


$fahrenheit  = -50;
while ($fahrenheit <= 50) {
    echo ("$fahrenheit градусов по Фаренгейту превращается в ");
    echo ( 5/9 * ($fahrenheit - 32)  );
    echo (" градусов по Цельсию <br>");

    $fahrenheit = $fahrenheit + 5;
}


#Задание 2

for ($fahrenheit=-50; $fahrenheit<=50; $fahrenheit+=5) {
    $celsius   = 5/9 * ($fahrenheit-32);
    echo "$fahrenheit градусов по Фаренгейту превращается в ".$celsius. " градусов по Цельсию <br>";
}
?>