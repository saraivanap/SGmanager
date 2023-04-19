<?php
/*
* Change the value of $password if you have set a password on the root userid
* Change NULL to port number to use DBMS other than the default using port 3306
*
*/
$user = 'anapaula';
$password = '235687Ap_saraiva'; //To be completed if you have set a password to root
$database = 'formulario'; //To be completed to connect to a database. The database must exist.
$port = 3306; //Default must be NULL to use default port

$conexao = new mysqli('sg.ckgxywch9bjz.us-east-2.rds.amazonaws.com', $user, $password, $database, $port);

if ($conexao->connect_error) {
    die('Connect Error (' . $conexao->connect_errno . ') '
            . $conexao->connect_error);
}
// echo '<p>Connection OK '. $conexao->host_info.'</p>';
// echo '<p>Server '.$conexao->server_info.'</p>';
// echo '<p>Initial charset: '.$conexao->character_set_name().'</p>';

//$conexao->close();
?>
