<?php
/**
 * Includes the oxygen layout css so as to not have to mess around when upgrading.
 * May need changing if major changes are made to the layout code.
 */
 
$forum_loader->add_js($base_url. '/style/Oxygen/responsive-nav.min.js', array('weight' => 55, 'async' => false, 'group' => FORUM_JS_GROUP_SYSTEM));
$forum_loader->add_css($base_url.'/style/Oxygen/Oxygen.min.css', array('type' => 'url', 'group' => FORUM_CSS_GROUP_SYSTEM, 'media' => 'screen'));
$forum_loader->add_css($base_url.'/style/ajb007/ajb007.css', array('type' => 'url', 'group' => FORUM_CSS_GROUP_SYSTEM, 'media' => 'screen'));

/*
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url.'/style/Oxygen'; ?>/Oxygen.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url.'/style/'.$forum_user['style']; ?>/ajb007.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url.'/style/'.$forum_user['style']; ?>/ajb007_cs.css?v1" />

<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="<?php echo $base_url.'/style/Oxygen'; ?>/Oxygen_ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo $base_url.'/style/Oxygen'; ?>/Oxygen_ie7.css" /><![endif]-->
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php echo $base_url.'/style/'.$forum_user['style'] ?>/Oxygen_ie8.css" /><![endif]-->
*/ ?>

<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="application-name" content="ajb007">