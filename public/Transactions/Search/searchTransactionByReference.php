<?php

require_once "../../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$options = [
    'initial_date' => '2018-01-01T14:55',
    'final_date' => '2018-01-24T09:55', //Optional
    'page' => 1, //Optional
    'max_per_page' => 20, //Optional
];

$reference = "REF123";

try {
    $response = \PagSeguro\Services\Transactions\Search\Reference::search(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F'),
        $reference,
        $options
    );

    echo "<pre>";
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}
