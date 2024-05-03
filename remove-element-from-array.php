<?php 

echo "<h3>Remove element from PHP Array</h3> <br />";

$array = ["a", "","b", null, 0, "c", "d", "e", "f"];

// $filterArray = array_filter($array);

$filterArray = array_diff($array,["a", "", null]);

echo"<pre>";
print_r($filterArray);
echo "</pre>";