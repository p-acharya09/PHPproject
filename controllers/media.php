<?php 
$config = require('config.php');
$db = new Database($config['database']);
$list = $db->query('select * from media')->fetchAll();
$contact = $db->query('select * from settings')->fetch();

require "views/media.view.php"; 
?>