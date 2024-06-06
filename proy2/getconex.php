<?php
$serverName = 'HPLNWRKST';   /*Aquí debes poner el nombre de tu servidor si es local, usa LOCAL ó tal como aparece en tu sqlserver*/
$connectionInfo = array( 'Database'=>'proyectodos', 'UID'=>'sbd', 'PWD'=>'1234'); /*Aquí vas a poner la base de datos que quieres consultar*/
$conectar = sqlsrv_connect( $serverName, $connectionInfo);  /*Aquí esta la instrucción para la conexión NOTA que es SQLSRV y no MYSQL*/
if ($conectar){
echo '';

}else{
echo 'Error al conectarse a la base de datos: <br>';
die( print_r(sqlsrv_errors(),true));
}
?>