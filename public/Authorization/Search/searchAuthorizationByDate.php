<?php

require '../../bootstrap.php';

$options = [
    'initial_date' => INITIAL_DATE, // Y-m-dTH:i
    'final_date'   => FINAL_DATE, // Y-m-dTH:i
    'page'         => PAGE, // integer
    'max_per_page' => MAX_PER_PAGE, // integer
];

try {
    $response = \PagSeguro\Services\Application\Search\Date::search(
        /** @var \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        $options
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
