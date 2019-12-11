<?php

if (!function_exists('to_array')) {

    function to_array($value) {
        if(is_array($value))
            return $value;
        elseif(is_object($value))
            return (array)$value;
        else
            return array($value);
    }
}

if (!function_exists('array_merge_by_int_key')) {

    function array_merge_by_int_key()
    {
        $r = array();
        foreach(func_get_args() as $a) 
        {
            foreach($a as $key => $value) 
            {
                if( isset($r[$key]) )
                    $value = array_merge(to_array($r[$key]), to_array($value));

                $r[$key] = $value;
            }
        }
        return $r;
    }
}