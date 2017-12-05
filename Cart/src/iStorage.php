<?php namespace Fruit;

interface iStorage
{
    function setValue(string $name, $price);

    function getValue(string $name);

    function restore(string $name);

    function reset();

    function total();
}
