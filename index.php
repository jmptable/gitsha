Hello world!

Here are the commits on the master branch for my (gitsha) repository:<br>
<hr>

<?php
// This file is generated by Composer
require_once 'vendor/autoload.php';

$client = new Github\Client(
	new Github\HttpClient\CachedHttpClient(array('cache_dir' => '/tmp/github-api-cache'))
);

//$client = new Github\Client($client);
$commits = $client->api('repo')->commits()->all('jmptable', 'gitsha', array('sha' => 'master'));

function print_arr($prefix, $arr) {
	foreach ($arr as $key => $value) {
		if(is_array($value)) {
			print $prefix . "$key =><br>";
			print_arr($prefix . "&nbsp;&nbsp;&nbsp;&nbsp;", $value);
		} else {
			print $prefix . "$key => $value<br>";
		}
	}
}

print_arr("&nbsp;&nbsp;&nbsp;&nbsp;", $commits);
?>
