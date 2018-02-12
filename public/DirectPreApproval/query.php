<?php
require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
/**
 *  Para usa o ambiente de testes (sandbox) descomentar a linha abaixo
 */
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

/**
 * @param $page
 * @param $maxPageResults
 * @param $initialDate
 * @param $finalDate
 * @param $status
 * @param $preApprovalRequest
 * @param $senderEmail
 */
$queryPreApproval = new \PagSeguro\Domains\Requests\DirectPreApproval\Query(null, null, '2017-08-01', '2017-08-02');

try {
    $response = $queryPreApproval->register(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F')
    );

    echo '<pre>';
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}

