<?php
require_once 'function_swap.php';

$la = [];
$lb = [];
$test = [];

function get_list($argv)
{
    global $la, $test;
    for ($i = 0; $i < count($argv); $i++)
    {
        if ($argv[$i] != "-faster" && $argv[$i] != "-swap")
        {
            array_push($la, intval($argv[$i]));
        }
    }

    $test = $la;
}
// https://github.com/2kne/Push-Swap/blob/master/push_swap.php