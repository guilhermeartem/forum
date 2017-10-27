<?php

function create($class, $atributes = [])
{
    return factory($class)->create($atributes);
}

function make($class, $atributes = [])
{
    return factory($class)->make($atributes);
}