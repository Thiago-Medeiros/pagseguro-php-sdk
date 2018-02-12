<?php

require_once "../../../vendor/autoload.php";

\PagSeguro\Library::initialize();
//\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$code = 'FD3AF1B214EC40F0B0A6745D041BF50D';

try {
    $response = \PagSeguro\Services\Application\Search\Code::search(
        new \PagSeguro\Domains\ApplicationCredentials('teste12334', '8AC13EDC85851764442A6FBF0DE7C41B'),
        $code
    );

    echo "<pre>";
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}
