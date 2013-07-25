<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
        <meta name="description" content="<?php echo html($site->description()) ?>">
        <meta name="keywords" content="<?php echo html($site->keywords()) ?>">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <?php echo css('assets/styles/styles.css') ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <?php echo js('assets/js/vendor/modernizr-2.6.2.min.js') ?>
    </head>
    <body>
        <header id="header" class="clearfix">