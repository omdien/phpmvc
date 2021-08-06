<?php
if( !session_id()) session_start();
require_once '../app/init.php'; 
//menambahkan coment pada index.php untuk mengecek update ke git hub
$app = new App;
