<?php

if( !session_id()) session_start();

//teknik botstraping
require_once '../app/init.php';

$app = new App;