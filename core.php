<?php

function sanitize_query($value, $type)
{
    $escaped_value = '';
    // perform here filtering/escaping malicious content
    
    
    // prepare for query
    if ($type == 'field' && $value == 'all')
    {
        $escaped_value = "*";
    }
           
    if ($type == 'condition' && $value != '')
    {
        $escaped_value = "WHERE ".$value;
    }
    else if($type == 'order' && $value != '')
    {
        $escaped_value = "ORDER BY ".$value;
    }
    else if ($type == 'limit' && $value != '')
    {
        $escaped_value = "LIMIT ".$value;
    }
    
    
    return $escaped_value;
}

