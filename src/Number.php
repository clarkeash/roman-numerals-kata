<?php

namespace App;

class Number
{
    protected static $pairs = [
        'CM' => 900,
        'CD' => 400,
        'XC' => 90,
        'XL' => 40,
        'IX' => 9,
        'IV' => 4,
    ];

    protected static $lookup = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1,
    ];

    public function convert($str)
    {
        $number = 0;

        $letters = str_split($str);

        while(count($letters) >= 2)
        {
            $pair = implode('', array_slice($letters, -2, 2));

            if(array_key_exists($pair, static::$pairs))
            {
                $number += static::$pairs[$pair];
                array_pop($letters);
                array_pop($letters);
            }
            elseif(count($letters) >= 1)
            {
                $number += static::$lookup[ array_pop($letters) ];
            }
        }

        if(count($letters) == 1)
        {
            $number += static::$lookup[ array_pop($letters) ];
        }

        return $number;
    }
}
