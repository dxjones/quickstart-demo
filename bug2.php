<? // bug.php
$time['start'] = microtime(TRUE);
$cr = "\n";
$file = 'bug.php';
?>
<!doctype html>
<html><head><title>Pagoda Box - Bug</title></head><body><h1>PagodaBox Bug</h1><pre>
<p>Compare <a href="bug.php"><b>bug.php</b></a> and <a href="bug2.php"><b>bug2.php</b></a>.</p>
<?
/* This is the magic line that changes whether $_SERVER is set, EVEN WHEN IT IS NEVER EXECUTED */
	if (array_key_exists('bug',$_GET)) { $bug = isset($_SERVER); }
/* */
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
