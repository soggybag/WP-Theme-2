<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title>
        <?php wp_title("|"); ?>
    </title>
    <!-- load some fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- load styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/unsemantic-grid-responsive-tablet-no-ie7.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="grid-container" id="wrap">