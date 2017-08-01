<?php

// DB table to use


$table = 'GUESTBOOK';
 
// Table's primary key
$primaryKey = 'line';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier - in this case object
// parameter names
$columns = array(
    array(
        'db' => 'line',
        'dt' => 'DT_RowId',
        'formatter' => function( $d, $row ) {
            // Technically a DOM id cannot start with an integer, so we prefix
            // a string. This can also be useful if you have multiple tables
            // to ensure that the id is unique with a different prefix
            return 'row_'.$d;
        }
    ),
    array( 'db' => 'ip', 'dt' => 'ip' ),
    array( 'db' => 'name', 'dt' => 'name' ),
    array( 'db' => 'status',  'dt' => 'status' ),
    array( 'db' => 'time',   'dt' => 'time',
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        } ),
    
    
);
 
$sql_details = array(
    'user' => $config['database']['username'],
    'pass' => $config['database']['password'],
    'db'   => $config['database']['dbname'],
    'host' => $config['database']['host']
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $post_var, $sql_details, $table, $primaryKey, $columns )
);



