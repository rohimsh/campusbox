<?php
$quark='c@mpub0X';
$db_host='mysql12.000webhost.com';
$db_DB='a9070434_boxcamp';
$db_name='a9070434_campus';
$db_pass='c@mpusb0x';
$conn = new mysqli($db_host, $db_name, $db_pass, $db_DB);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}
?>
