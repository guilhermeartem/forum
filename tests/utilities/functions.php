<?php

function create($class, $atributes = [], $times = null)
{
    return factory($class, $times)->create($atributes);
}

function make($class, $atributes = [], $times = null)
{
    return factory($class, $times)->make($atributes);
}