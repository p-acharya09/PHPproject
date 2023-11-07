<?php 
$config = require('config.php');
$db = new Database($config['database']);
$list = $db->query('select * from media')->fetchAll();

$limitedData = array_slice($list, 0, 2);

require "views/index.view.php"; 
?>