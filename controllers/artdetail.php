<?php 
$config = require('config.php');
$db = new Database($config['database']);

$contact = $db->query('select * from settings')->fetch();
$list = $db->query('select * from media where id=1')->fetch();
$listall = $db->query('select * from media')->fetchAll();

require "views/artdetail.view.php"; 
?>