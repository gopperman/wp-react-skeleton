<?php 
/**
 * index.php
 *
 * Includes the react app build, and that's it 
 */
 
// Change this variable to be the name of the app you generated with create-react-app
$appPath = './app/build/index.html';

if ( file_exists($appPath) ) {
	include $appPath;
} else { ?>
	<h1>wp-react-skeleton</h1>
	<p>Hi! Looks like there's no react app here yet. Install and run 'create-react-app' in this directory, then 'npm build' your app to get started.</p>
	<p>If you called your app something besides 'app', edit $appPath in index.php</p>
	<p>Happy hacking!</p>
<?php }
