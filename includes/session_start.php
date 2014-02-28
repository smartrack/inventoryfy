<?php 
	# If Internet Explorer for exporting purposes need to change the Session Cache
	if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
			session_cache_limiter("must-revalidate");
	}
	# Start Session and the Session ID
	session_start();
	$_SESSION['id'] = session_id();
?>
