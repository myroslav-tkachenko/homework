<?php

$path = "https://pp.vk.me/c630428/v630428696/4d952/";
function img2($url, $height = "" , $width = "")
{

    global $path;

    return "<img src='{$path}{$url}' height='{$height}' width='{$width}' />";


}

?>