<?php

$is_logged_in = false;
$ie_editor = true;

// if ($is_logged_in && $is_admin){
// 	echo "You can administer users\n";

// }

if ($is_editor || $is_author){
	echo "You can edit this post";
}
?>