<?php
require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
/**
 *  Para usa o ambiente de testes (sandbox) descomentar a linha abaixo
 */
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
\PagSeguro\Configuration\Configure::setLog(true, '/var/www/html//log.log');

$editPlan = new \PagSeguro\Domains\Requests\DirectPreApproval\EditPlan();
$editPlan->setPreApprovalRequestCode('452FEB2E80800D62243C3FAA2FCA7A9A');
$editPlan->setAmountPerPayment('90.00'); //novo valor para cobrança do plano
$editPlan->setUpdateSubscriptions(false); //indica se a alteração de valor deve afetar as adesões vigentes do plano.

try {
    $response = $editPlan->register(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F') // credencias do vendedor no pagseguro
    );

    echo '<pre>';
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}