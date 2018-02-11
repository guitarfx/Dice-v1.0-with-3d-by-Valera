<?php
function get_redirect_target($url)
{

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	
    $headers = curl_exec($ch);
	
	//var_dump($headers);
	
    curl_close($ch);

    if (preg_match('/^Location: (.+)$/im', $headers, $matches))
        return trim($matches[1]);

	return $url;
};

$url = "https://gamesys33.betvoyager.com/games/cwguestlogin.do?gameId=easydice-equal&lang=en&bankId=666&cv=H";
//$url = "http://example.ru";

$response = get_redirect_target($url);

//var_dump($response);

//echo "var url = \""   .$response.  "\";"." alert(url);";

echo "console.log('------ START Load from serv1.php -----------');\n\r";
echo "var url = \""   .$response.  "\";"." console.log(url);\n\r";
echo "console.log('------ END load from serv1.php -----------');";

?>