<?php

$my_array = array("bmw","jeep","dastun","ferrari","Honda");
$new_array = array_map('strlen', $my_array);

echo "le plus court du tableau est ". min($new_array)."<br>".
" le plus log du tableau est " . max($new_array).'.';