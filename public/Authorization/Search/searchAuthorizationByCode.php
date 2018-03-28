<?php

require '../../bootstrap.php';

/** @var string $code */
$code = YOUR_TRANSACTION_CODE;

try {
    $response = \PagSeguro\Services\Application\Search\Code::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $auth */
        $auth,
        $code
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
