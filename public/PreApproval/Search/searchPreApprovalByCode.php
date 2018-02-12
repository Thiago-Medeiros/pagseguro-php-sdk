<?php

require_once "../../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$code = 'DF7EB0AC9999333CC4379F82114239AB';

try {
    $response = \PagSeguro\Services\PreApproval\Search\Code::search(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F'),
        $code
    );

    echo "<pre>";
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}
