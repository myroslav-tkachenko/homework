<?php

print 'How are you?';
print "I'm fine.";

?>


<?php


$hamburger = 4.95;
$coctail = 1.95;
$cola = 0.85;
$tax = 0.075;
$tip = 0.16;

$price = ((2 * $hamburger) + $coctail + $cola);
$fulPrice = ($price * $tax);
$totalPrice = ($price * $tip);
$all = $price + $fulPrice + $totalPrice;
echo "Цена за еду {$price}\n";
echo "Налог {$fulPrice}\n";
echo "Чаевые {$totalPrice}\n";
echo "Полная стоимость с учетом всего {$all}\n";


?>

<?php
        $hamburger = ['Гамбургер', 4.95, 2];
        $coctail = ['Молочный коктейль', 1.95, 1];
        $cola = ['Кола', 0.85, 1];
        $tax = 0.075;
        $tip = 0.16;

        $fulPrice = ($hamburger[1] * $hamburger[2]);
        $fulPrice = $fulPrice + ($coctail[1] * $coctail[2]);
        $fulPrice = $fulPrice + ($cola[1] * $cola[2]);


        //$price = ((2 * $hamburger) + $coctail + $cola);
        $price = ($fulPrice * $tax);
        $totalPrice = ($fulPrice * $tip);
        $all = $price + $fulPrice + $totalPrice;
        //echo "Цена за еду {$price}\n";
        //echo "Налог {$fulPrice}\n";
        //echo "Чаевые {$totalPrice}\n";
        //echo "Полная стоимость с учетом всего {$all}\n";
?>

<table width="300px" border="1">
    <tr>
        <th>Название блюда</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Общая цена</th>
    </tr>
    <tr>
        <td><?php echo "$hamburger[0]";?></td>
        <td><?php echo "$hamburger[1]";?></td>
        <td><?php echo "$hamburger[2]";?></td>
        <td><?php $priceHamburger = ($hamburger[1] * $hamburger[2]);
            print "\$$priceHamburger"; ?></td>
    </tr>
    <tr>
        <td><?php echo "$coctail[0]";?></td>
        <td><?php echo "$coctail[1]";?></td>
        <td><?php echo "$coctail[2]";?></td>
        <td><?php $priceCoctail = ($coctail[1] * $coctail[2]);
            print "\$$priceCoctail"; ?></td>
    </tr>
    <tr>
        <td><?php echo "$cola[0]";?></td>
        <td><?php echo "$cola[1]";?></td>
        <td><?php echo "$cola[2]";?></td>
        <td><?php $priceCola = ($cola[1] * $cola[2]);
            print "\$$priceCola"; ?></td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3" align="right">Общая цена за еду</td>
        <td><?php echo "\$$fulPrice"; ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right">Налог 7,5%</td>
        <td><?php echo "\$$price"; ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right">Чаевые 16%</td>
        <td><?php echo "\$$totalPrice"; ?></td>
    </tr>
    <tr>
        <th colspan="3" align="right">Сумма</th>
        <td><?php echo "\$$all"; ?></td>
    </tr>
</table>
<?php
$first_name = 'Yulii';
$last_name = 'Tarutin';
$name = "$last_name $first_name";
echo "Получилось - $name\n";
echo "Количество символов в строке ".iconv_strlen($name)."\n";
for($i = 1; $i <= 5; $i ++){
    echo $i."\n";
}

for($i = 1; $i <= 5; $i ++){
    echo (pow(2, $i))."\n";
}





?>
