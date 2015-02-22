<?php
	// This automatically detects what version the user is using
	if($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7412.US")
		die(file_get_contents("pl20.html"));
	else if($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7498.US")
		die(file_get_contents("pl21.html"));
	else if($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7455.US")
		die(file_get_contents("pl40.html"));
	else if($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7552.US")
		die(file_get_contents("pl5070.html"));
	else if($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7567.US")
		die(file_get_contents("pl7195.html"));
	else
		die("Unsupported user-agent: <strong>".$_SERVER['HTTP_USER_AGENT']."</strong>");
?>