<?php

require '../../dbconfig.php';
require '../../core.php';

class Log 
{
    static public function find($field = 'all', $condition = '',$group = '', $limit = '')
    {
        $db = connect();
        
        $ret = '';
        $field = sanitize_query($field,'field');
        $whereStatement = sanitize_query($condition,'condition');
        $orderStatement = sanitize_query($group,'order');
        $limitStatement = sanitize_query($limit,'limit');
        
        $result = mysqli_query($db, "SELECT ".$field." FROM SERVERLOG ".$whereStatement." ".$orderStatement." ".$limitStatement);
        
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $ret[] = $row;
        }
        
        return $ret;
    }
    
}

