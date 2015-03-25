<?php
?>
<html>
<body>
<?php
function showvar($string)
{
	if(isset($_SERVER[$string]))
	{
		echo "$string: ".rawurldecode($_SERVER[$string])."\r\n<br>";
	}
}
/*normal vars*/
showvar("HTTP_ACCEPT");
showvar("HTTP_ACCEPT_ENCODING");
showvar("HTTP_ACCEPT_LANGUAGE");
showvar("HTTP_ACCEPT_CHARSET");
showvar("HTTP_HOST");
showvar("HTTP_KEEP_ALIVE");
showvar("HTTP_COOKIE");
showvar("HTTP_UA_CPU");
showvar("HTTP_REFERER");

/*important vars*/
showvar("HTTP_USER_AGENT");
showvar("REMOTE_ADDR");
showvar("REMOTE_HOST");
showvar("HTTP_CONNECTION");
showvar("HTTP_X_FORWARDED_FOR");
showvar("HTTP_FORWARDED");
showvar("HTTP_VIA");
showvar("KEEP_ALIVE");		
showvar("HTTP_MAX_FORWARDS");
showvar("MAX_FORWARDS");
showvar("HTTP_CACHE_CONTROL");
showvar("HTTP_PROXY_CONNECTION");	
showvar("HTTP_X_BLUECOAT_VIA");
showvar("HTTP_PC_REMOTE_ADDR");
showvar("HTTP_PROXY___________");
showvar("HTTP_PROXY____");
showvar("HTTP_X_FWD_IP_ADDR");
showvar("HTTP_X_HOST");
showvar("HTTP_X_REFERER");
showvar("HTTP_X_SERVER_HOSTNAME");
showvar("PROXY_HOST");
showvar("PROXY_PORT");
showvar("PROXY_REQUEST");
showvar("HTTP_CLIENT_IP");
showvar("HTTP_PRAGMA");
?>
</body>
</html>