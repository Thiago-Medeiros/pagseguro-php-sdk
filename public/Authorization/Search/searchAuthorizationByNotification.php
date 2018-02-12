<?php

require_once "../../../vendor/autoload.php";

\PagSeguro\Library::initialize();
//\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$code = '7BD4A616E8C3E8C3F57BB440FFA9ABEAE6F2';

try {
    $response = \PagSeguro\Services\Application\Search\Notification::search(
        new \PagSeguro\Domains\ApplicationCredentials('teste12334', '8AC13EDC85851764442A6FBF0DE7C41B'),
        $code
    );

    echo "<pre>";
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}
