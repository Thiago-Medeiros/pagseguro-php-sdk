<?php
require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
/**
 *  Para usa o ambiente de testes (sandbox) descomentar a linha abaixo
 */
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$plan = new \PagSeguro\Domains\Requests\DirectPreApproval\Payment();
$plan->setPreApprovalCode('código da assinatura');
$plan->setReference('referência');
$plan->setSenderIp('ip');
$item = new \PagSeguro\Domains\DirectPreApproval\Item();
$item->withParameters('id da assinatura', 'descrição da assinatura', 'quantidade', 'valor decimal');
$plan->addItems($item);

try {
    $response = $plan->register(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F')
    );

    echo '<pre>';
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}

