<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php if (! empty($title)) echo $title . (empty($no_title) ? ' | ' : ''); ?><?php if (empty($no_title)) echo 'Misagh Laghaei | میثاق لقایی'; ?></title>
	<?php if (! empty($meta_description)) { ?>
	<meta name="description" content="<?php echo $meta_description; ?>">
	<?php } ?>
	<meta property="og:title" content="<?php if (! empty($title)) echo $title . (empty($no_title) ? ' | ' : ''); ?><?php if (empty($no_title)) echo 'Misagh Laghaei | میثاق لقایی'; ?>">
	<?php if (! empty($meta_description)) { ?>
	<meta property="og:description" content="<?php echo $meta_description; ?>">
	<?php } ?>
	<meta property="og:url" content="https://<?php echo str_replace('www.', '', $_SERVER['HTTP_HOST']) . $_SERVER['REQUEST_URI']; ?>">
	<meta property="og:image" content="/includes/misagh_laghaei.jpg">
	<link rel="shortcut icon" href="/includes/favicon-256.png">
	<link rel="icon" sizes="16x16 32x32" type="image/png" href="/includes/favicon-256.png">
	<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
	<link rel="stylesheet" href="/includes/bootstrap.min.css">
	<link rel="stylesheet" href="/includes/style.css">
	<script src="https://kit.fontawesome.com/50995e6452.js"></script>
</head>
