<?php

$foods = array('burger', 'sandwitch', 'pizza', 'cake', 'chicken');

$count = 0;

while ($count < count($foods)) {
    echo $foods[$count];
    echo ', ';
    $count++;
}
echo ' ';
echo 'Total food items: ';
echo ($count); 

define ('NAME', 'Peter');
echo 'Name is: ';
echo NAME;
