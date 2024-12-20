<?php
/*
 * Azure App Service Specialist Lab
 * Open Source Technologies - PHP Linux
 */

header('Content-Type: text/plain', true);

$NL = "\r\n";

$request = $_SERVER['HTTP_X_FORWARDED_PROTO'] . "://" . $_SERVER['HTTP_HOST'] . "/echo.php";

$headers = get_headers($request, 0);

$result = 100/0

echo "Azure App Service L200 - OSS - PHP Linux" . $NL . $request . $NL . $headers . $result;

if (isset($headers['PHPLINUXL200'])) {
    echo "Header PHPLINUXL200 Found! Value: " . $headers['PHPLINUXL200'] . $NL;
    echo "Succesfully completed PHP Linux L200 Lab. " . date('Y-m-d H:i:s UTC', time()) . $NL;
} else {
    print_r($headers);
    echo $headers . $NL;
}

?>
