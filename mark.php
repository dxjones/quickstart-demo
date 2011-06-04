<? // mark.php
echo '<p>Mark\'s test code, ...</p>';

echo '<b>$_SERVER:</b><br/><br/>';
foreach ($_SERVER as $k => $v){
    echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $k .'  :  ' . $v . '<br/>';
}


echo '<br/><br/><b>$_REQUEST:</b><br/>';
foreach ($_REQUEST as $k => $v){
    echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $k .'  :  ' . $v .  '<br/>';
}

echo '<br/><br/><b>$_ENV:</b><br/>';
foreach ($_ENV as $k => $v){
    echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $k .'  :  ' . $v . '<br/>';
}


?>