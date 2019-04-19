<?php
/*
** github.com/lastkarrde
*/
$out = array();
$vars = array('HTTP_HOST', 'HTTP_REFERER', 'HTTP_USER_AGENT', 'REMOTE_ADDR', 'REMOTE_HOST', 'CLIENT_IP', 'HTTP_FROM', 'HTTP_VIA', 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_VIA');
foreach($vars as $i)
{
	if(isset($_SERVER[$i]))
	{
		$out[$i] = $_SERVER[$i];
	}
}
if(isset($_GET['json']))
{
	//Output the data as json
	header('Content-type: application/json');
	echo json_encode($out);	
}
else
{
	//Output the data as html
	echo '<pre>';
	print_r($out);
	echo '</pre>';
}
?>
