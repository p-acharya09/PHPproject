<?php 
$config = require('config.php');
$db = new Database($config['database']);

$settings = $db->query('select * from settings')->fetch();

require "views/admin/settings.view.php";
?>