<?php 
$config = require('config.php');
$db = new Database($config['database']);
$about = $db->query('select * from about')->fetch();

require "views/admin/about.view.php";
?>