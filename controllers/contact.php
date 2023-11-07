<?php 
$config = require('config.php');
$db = new Database($config['database']);

$contact = $db->query('select * from settings')->fetch();
require "views/contact.view.php"; 
?>