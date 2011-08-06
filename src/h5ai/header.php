<!DOCTYPE html>
<html class="no-js">
<?php include "php/main.php"; ?>
<head>
	<meta charset="utf-8">
	<title><?php echo $h5ai->getTitle(); ?></title>
	<meta name="h5ai-version" content="h5ai %BUILD_VERSION% (php)">
	<meta name="description" content="Directory index styled with h5ai (http://larsjung.de/h5ai)">
	<meta name="keywords" content="directory, index, autoindex, h5ai">
	<link rel="shortcut icon" type="image/png" href="/h5ai/images/h5ai-16x16.png">
	<link rel="apple-touch-icon" type="image/png" href="/h5ai/images/h5ai-48x48.png">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold">
	<link rel="stylesheet" type="text/css" href="/h5ai/css/main-php.css">
	<script src="/h5ai/js/lib/modernizr.min.js"></script>
</head>
<body>
	<nav class="clearfix">
		<ul>
			<?php echo $crumb->toHtml(); ?>
			<li id="viewicons" class="view hideOnNoJs">
				<a href="#"><img src="/h5ai/images/view-icons.png" alt="view-icons" /><span class="l10n-icons">icons</span></a>
			</li>
			<li id="viewdetails" class="view hideOnNoJs" >
				<a href="#"><img src="/h5ai/images/view-details.png" alt="view-details" /><span class="l10n-details">details</span></a>
			</li>
		</ul>
	</nav>
	<?php echo $tree->toHtml(); ?>
	<section id="content">
		<?php echo $customize->getHeader(); ?>
		<?php echo $extended->toHtml(); ?>
		<?php echo $customize->getFooter(); ?>
	</section>
	<footer class="clearfix">
		<span class="left">
			<a href="http://larsjung.de/h5ai" target="_blank" title="h5ai project page">h5ai %BUILD_VERSION% (php)</a>
		</span>
		<span class="right">
			<span class="hideOnJs">JavaScript is disabled!</span>
			<span id="langSelector">
				<span class="lang">en</span> - <span class="l10n-lang">english</span>
				<span class="langOptions"></span>
			</span>
		</span>
		<span class="center">
			<?php echo $extended->getFolderCount(); ?> <span class="l10n-folders">folders</span>
			 · 
			<?php echo $extended->getFileCount(); ?> <span class="l10n-files">files</span>
		</span>
	</footer>
	<script src="/h5ai/js/lib/jquery.min.js"></script>
	<script src="/h5ai/options.js"></script>
	<script src="/h5ai/js/main-php.js"></script>
	<section id="table">
		<!-- the following code was generated by apache's autoindex module and gets ignored -->
