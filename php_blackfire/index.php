<?php
ini_set('display_errors', 1);
ini_set('blackfire.server_id', 'cd51bbd0-1cda-4df5-be2f-c0b15989606e');
ini_set('blackfire.server_token', '538fba5eccbba837bfd3e7a804cba41ab6a25b014eff93dcc75d91d4049fd7ff');

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

/*ini_set('blackfire.agent_timeout', '1');
ini_set('blackfire.log_level', '4');
ini_set('blackfire.log_file', '/var/www/html/');
*/

function essai($i)
{
    echo $i;
}

for ($i=0;$i<=10;$i++) {
    essai($i);
}

phpinfo(); ?>
