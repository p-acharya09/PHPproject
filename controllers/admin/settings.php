<?php 
$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $website_name= $_POST['website_name'];
    $contact_email = $_POST['contact_email'];
    $contact_address = $_POST['contact_address'];
    $contact_phone = $_POST['contact_phone'];
    $social_gmail = $_POST ['social_gmail'];
    $social_youtube = $_POST ['social_youtube'];
    $social_twitter = $_POST ['social_twitter'];
    $social_facebook = $_POST ['social_facebook'];
    $footer_note = $_POST ['footer_note'];


    $result = $db->query('UPDATE `settings` SET `website_name`=:website_name, `contact_email`=:contact_email, `contact_address`=:contact_address, `contact_phone`=:contact_phone, `social_gmail`=:social_gmail, `social_youtube`=:social_youtube, `social_twitter`=:social_twitter, `social_facebook`=:social_facebook, `footer_note`=:footer_note  where id = 1', [
        'website_name' => $website_name,
        'contact_email' => $contact_email,
        'contact_address' => $contact_address,
        'contact_phone' => $contact_phone,
        'social_gmail' => $social_gmail,
        'social_youtube' => $social_youtube,
        'social_twitter' => $social_twitter,
        'social_facebook' => $social_facebook,
        'footer_note' => $footer_note,
    ]);
}
$settings = $db->query('select * from settings')->fetch();

require "views/admin/settings.view.php";
?>