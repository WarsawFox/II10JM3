<?php
$zdanie ="Zrobiłem już zadanie 6";
function zliczająca($zdanie)
{
echo count(explode(" ", $zdanie) )-1;
};
zliczająca($zdanie);
?>