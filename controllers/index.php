<?php 
$config = require('config.php');
$db = new Database($config['database']);
$list = $db->query('select * from media')->fetchAll();
$lists = $db->query('select * from media order by created_at desc')->fetchAll();
$limitedData = array_slice($list, 0, 4);
$limitedDatas = array_slice($lists, 0, 4);
$contact = $db->query('select * from settings')->fetch();

require "views/index.view.php"; 
?>