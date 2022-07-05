<?php
include 'includes/class_autoload.inc.php';
$smth = new Test("users");
$arr = array('firstName');
$smth->select($arr );
$arr = array('id' => '3');
$smth->WHERE($arr);
$smth->query();