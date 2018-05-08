<!DOCTYPE html>


<html>
<head>

    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>


</head>
<body>

<div id="wrapper">

    <div id="header">
            <h1><?php bloginfo('name'); ?></h1>
            <h3><?php bloginfo('description'); ?></h3>
    </div>

</body>