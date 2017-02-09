<?php
#Задание 1


$fahrenheit  = -50;
while ($fahrenheit <= 50) {
    print ("$fahrenheit градусов по Фаренгейту превращается в ");
    print ( 5/9 * ($fahrenheit - 32)  );
    print (" градусов по Цельсию <BR>");

    $fahrenheit = $fahrenheit + 5;
}


#Задание 2

for ($fahrenheit=-50; $fahrenheit<=50; $fahrenheit+=5) {
    $celsius   = 5/9 * ($fahrenheit-32);
    print "$fahrenheit градусов по Фаренгейту превращается в ".$celsius. " градусов по Цельсию <br>";
}
?>