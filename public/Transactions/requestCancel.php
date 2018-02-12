<?php

require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

/**
 * @var transaction code
 */
$code = "9948DBE4-499B-4A14-BDCF-501C67DEBAA1";

try {
    $cancel = \PagSeguro\Services\Transactions\Cancel::create(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F'),
        $code
    );
    echo "<pre>";
    print_r($cancel);
} catch (Exception $e) {
    die($e->getMessage());
}
