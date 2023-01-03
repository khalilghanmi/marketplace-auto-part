<?php
$db = mysqli_connect('localhost', 'root', '','pieces-auto-tunisie');
function sanitize_array_assoc(&$array)
{
    foreach($array as $a => &$b)
    {
        $b = filter_var($b, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    return $array;
}
extract(sanitize_array_assoc($_REQUEST));
?>