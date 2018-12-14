<?php
/*
    config.php
    
    Stores configuration data for our application

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo 'the constant is storing: ' . THIS_PAGE;

//die;

//default page values
$title = THIS_PAGE;
$siteName = 'Site Name';
$slogan = 'Whatever it is you do, we do it better.';
$pageID = 'The developer forgot to put a page header!';
$subHeader = 'The developer forgot to put a sub header!';
$background = 'home-bg.jpg';

switch(THIS_PAGE){
        
    case 'template.php':
        $title = 'My template page';
        $pageID = 'Put Page ID here';
        $subHeader = 'Put more info about page here';
        $background = 'home-bg.jpg';
    break;

    case 'contact.php':
        $title = 'Contact Us';
        $pageID = 'Contact Us!';
        $subHeader = 'We appreciate your feedback';
        $background = 'contact-bg.jpg';
    break;
        
    case 'daily.php':
        $title = 'Daily';
        $pageID = 'Daily Page';
        $subHeader = 'This information changes daily!';
        $background = 'post-bg.jpg';
    break;
        
    case 'about.php':
        $title = 'About Us';
        $pageID = 'About Us!';
        $subHeader = 'Everything you ever wanted to know about us';
        $background = 'about-bg.jpg';
    break;
        
}




