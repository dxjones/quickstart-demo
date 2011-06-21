<? // bug.php
$time['start'] = microtime(TRUE);
$cr = "\n";
$file = 'bug2.php';
?>
<!doctype html>
<html><head><title>Pagoda Box - Bug</title></head><body><h1>PagodaBox Bug</h1><pre>
<p>Compare <a href="bug.php">bug.php</a> and <a href="bug2.php">bug2.php</a>.</p>
<?
if (array_key_exists('pretest',$_GET)) {
	echo 'Testing explicitly to see if $_SERVER, $_REQUEST are set' . $cr;
	$var = '_SERVER';
	echo '$var = "' . $var . '", isset($$var) is ' . (isset($$var) ? 'TRUE' : 'FALSE') . $cr;
	echo 'isset($_SERVER) is ' . (isset($_SERVER) ? 'TRUE' : 'FALSE') . $cr;
}
$list = array('_SERVER');
foreach ($list as $var) {
	if (isset($$var)) {
		echo '$' . $var . ' =' . $cr;
		print_r($$var);
	} else {
		echo '$' . $var . ' is not set' . $cr;
		echo 'Try printing it anyway, ...' . $cr;
		print_r($$var);
	}
}
?>
</pre><hr/><pre>
<?
echo htmlspecialchars(file_get_contents($file));
$time['elapsed'] = sprintf('%.6f msec', 1000*(microtime(TRUE) - $time['start']));
?>
</pre><hr/><div align="right">elapsed time = <?= $time['elapsed'] ?></div></body></html>
