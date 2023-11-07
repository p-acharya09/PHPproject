<?php 
$config = require('config.php');
$db = new Database($config['database']);
$about = $db->query('select * from media')->fetchAll();

require "views/admin/list.view.php";
?>