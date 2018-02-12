<?php

require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

/**
 * @var string PreApproval code
 */
$code = "608ED6F18989A6ACC409AFAD62BCC49A";

try {
    $response = \PagSeguro\Services\PreApproval\Cancel::create(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F'),
        $code
    );

    echo "<pre>";
    print_r($response->getResult());
} catch (Exception $e) {
    die($e->getMessage());
}