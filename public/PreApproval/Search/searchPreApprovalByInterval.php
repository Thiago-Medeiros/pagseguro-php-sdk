<?php

require_once "../../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$days = 20;

try {
    $response = \PagSeguro\Services\PreApproval\Search\Interval::search(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F'),
        $days
    );

    echo "<pre>";
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}
