<?php
#Задание 1
$cities = [
    "New York, NY"		=> "8175133",
    "Los Angeles, CA"	=> "3792621",
    "Chicago, IL"		=> "2695598",
    "Houston, TX "		=> "2100263",
    "Philadelphia, PA"	=> "1526006",
    "Phoenix, AZ"		=> "1445632",
    "San Antonio, TX"	=> "1327407",
    "San Diego, CA "	=> "1307402",
    "Dallas, TX" 		=> "1197816",
    "San Jose, CA"		=> "945942",
];


echo "<table border='1' cellspacing='0' cellpadding='3'>";
foreach ($cities as $key => $value){

    echo "<tr><td>$key</td>";


    echo "<td>$value</td></tr> ";
}


echo "<tr><td>Число жителей </td><td>" . array_sum($cities) . "</td></tr></table>";

#Задание 2



$cities = [
    "New York, NY"		=> "8175133",
    "Los Angeles, CA"	=> "3792621",
    "Chicago, IL"		=> "2695598",
    "Houston, TX "		=> "2100263",
    "Philadelphia, PA"	=> "1526006",
    "Phoenix, AZ"		=> "1445632",
    "San Antonio, TX"	=> "1327407",
    "San Diego, CA "	=> "1307402",
    "Dallas, TX" 		=> "1197816",
    "San Jose, CA"		=> "945942",
];
asort($cities);

echo "<table border='1' cellspacing='0' cellpadding='3'>";
foreach ($cities as $key => $value){

    echo "<tr><td>$key</td>";


    echo "<td>$value</td></tr> ";
}


echo "<tr><td>Число жителей </td><td>" . array_sum($cities) . "</td></tr></table>";


#Задание 3

$cities = [
    "New York, NY"		=> "8175133",
    "Los Angeles, CA"	=> "3792621",
    "Chicago, IL"		=> "2695598",
    "Houston, TX "		=> "2100263",
    "Philadelphia, PA"	=> "1526006",
    "Phoenix, AZ"		=> "1445632",
    "San Antonio, TX"	=> "1327407",
    "San Diego, CA "	=> "1307402",
    "Dallas, TX" 		=> "1197816",
    "San Jose, CA"		=> "945942",
];
ksort($cities);

echo "<table border='1' cellspacing='0' cellpadding='3'>";
foreach ($cities as $key => $value){

    echo "<tr><td>$key</td>";


    echo "<td>$value</td></tr> ";
}


echo "<tr><td>Число жителей </td><td>" . array_sum($cities) . "</td></tr></table>";






#Задание 4

$cities = [
    ['New York', 	'NY', 8175133],
    ['Los Angeles', 'CA', 3792621],
    ['Chicago',		'IL', 2695598],
    ['Houston',		'TX', 2100263],
    ['Philadelphia','PA', 1526006],
    ['Phoenix', 	'TX', 1445632],
    ['San Antonio', 'TX', 1327407],
    ['San Diego', 	'CA', 1307402],
    ['Dallas', 		'TX', 1197816],
    ['San Jose', 	'CA', 945942],

];

$arrayCities = [];
foreach ($cities as $city){
    if(array_key_exists($city[1], $arrayCities)){
        $arrayCities[$city[1]] += $city[2];

    } else {

        $arrayCities[$city[1]] = $city[2];
    }
}

var_dump($arrayCities);



#ФУНКЦИИ. Задание 1

function img($url, $height = "" , $width = "")
{
return "<img src='{$url}' height='{$height}' width='{$width}' />";
}

echo img("https://avatars2.githubusercontent.com/u/4650038?v=3&s=40", 500, 500)


#Задание 2
$path = "https://pp.vk.me/c630428/v630428696/4d952/";

function img1($url, $height = "" , $width = "")
{

    global $path;

    return "<img src='{$path}{$url}' height='{$height}' width='{$width}' />";


}

echo img1("ZnQav_DZufQ.jpg", 500, 500);



#Задание 3
include 'func.php';

echo img2("ZnQav_DZufQ.jpg", 500, 500);


/* В задании 4 будет вывод количества чаевых
*/
?>
