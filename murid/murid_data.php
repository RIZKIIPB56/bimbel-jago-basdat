<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'murid';
 
// Table's primary key
$primaryKey = 'id_murid';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id_murid', 'dt' => 0 ),
    array( 'db' => 'nama_murid',  'dt' => 1 ),
    array(
        'db' => 'jenis_kelamin',
        'dt' => 2,
        'formatter' => function($data, $row) {
            return $data == "L" ? "Laki-laki" : "Perempuan";
        }
    ),
    array( 'db' => 'kelas',     'dt' => 3 ),
    array( 'db' => 'jurusan',     'dt' => 4 ),
    array( 'db' => 'nomer_hp_murid',     'dt' => 5 ),
    array( 'db' => 'alamat_murid',     'dt' => 6 ),
    array( 'db' => 'no_paket',     'dt' => 7 ),
    //array( 'db' => 'id_pasien',     'dt' => 5 ),
    // array(
    //    'db'        => 'salary',
    //    'dt'        => 5,
    //    'formatter' => function( $d, $row ) {
    //        return '$'.number_format($d);
    //   }
    // )
);
 
// SQL server connection information
include_once "../_config/conn.php";
 

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../_assets/libs/DataTables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);