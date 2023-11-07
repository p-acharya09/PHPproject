<?php 
$config = require('config.php');
$db = new Database($config['database']);

$contact = $db->query('select * from settings')->fetch();
$about = $db->query('select * from about')->fetch();

require "views/about.view.php"; 
?>