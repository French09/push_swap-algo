<?php

function sa() 
{
    global $la;
    if (count($la) >= 2)
    {
        $tmp = $la[0];
        $la[0] = $la[1];
        $la[1] = $tmp;
    }
}

function sb()
{
    global $lb;
    if(count($lb) >= 2)
    {
        $tmp = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $tmp;
    }
}

function sc()
{
    sa();
    sb();
}

function pa()
{
    global $la, $lb;
    if (!empty($lb)) 
    {
        $element = array_shift($lb);
        array_unshift($la, $element);
    }
}

function pb()
{
    global $la, $lb;
    if (!empty($la)) 
    {
        $element = array_shift($la);
        array_unshift($lb, $element);
    }
}

function ra()
{
    global $la;
    $element = array_shift($la);
    array_push($la);
}

function rb()
{
    global $lb;
    $element = array_shift($lb);
    array_push($lb, $element);
}

function rr()
{
    ra();
    rb();
}

function rra()
{
    global $la;
    $element = array_pop($la);
    array_unshift($la, $element);
}

function rrb()
{
    global $lb;
    $element = array_pop($lb);
    array_unshift($lb, $element);
}

function rrr()
{
    rra();
    rrb();
}