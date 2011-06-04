<? // index.php
$time['start'] = microtime(TRUE);
$cr = "\n";
?>
<!doctype html>
<html>
<head>
<title>Pagoda Box - Quickstart Demo</title>
</head>
<body>
<h1>Hello World!</h1>
<p>This is a quickstart demo.</p>
<?
echo '<pre>' . $cr;
echo 'Testing explicitly to see if $_SERVER is set' . $cr;
echo 'isset($_SERVER) is ' . (isset($_SERVER) ? 'TRUE' : 'FALSE') . $cr . $cr;
echo 'Debug Info:' . $cr . $cr;
$list = array('_SERVER', '_GET', '_POST', '_REQUEST', '_FILES', '_COOKIE', '_SESSION', '_ENV');
foreach ($list as $var) {
	if (isset($$var)) {
		echo '$' . $var . ' =' . $cr;
		print_r($$var);
	} else {
		echo '$' . $var . ' is not set' . $cr;
	}
	echo '- - - - -' . $cr . $cr;		
}
echo '</pre>' . $cr;
phpinfo();
$time['elapsed'] = microtime(TRUE) - $time['start'];
echo '<div align="right">elapsed time = ' . sprintf('%.9f', $time['elapsed']) . '</div>' . $cr;
?>
</body>
</html>
