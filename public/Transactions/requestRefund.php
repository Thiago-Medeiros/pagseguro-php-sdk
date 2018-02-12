<?php

require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

/**
 * @var transaction code
 */
$code = "0B64FD7B4F9641378E9C9462982A8B95";

/**
 * @var value to refund
 * @optional true
 */
$value = null;

try {
    $refund = \PagSeguro\Services\Transactions\Refund::create(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F'),
        $code,
        $value
    );

    echo "<pre>";
    print_r($refund);
} catch (Exception $e) {
    die($e->getMessage());
}
