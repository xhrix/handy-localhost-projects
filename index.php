<?php

$dirs = array_filter(glob('*'), 'is_dir');
$currentLink = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . "://{$_SERVER['HTTP_HOST']}";

foreach ($dirs as $dir) {
    echo "<li><a href='$currentLink/$dir'>$dir</a></li>";
}
