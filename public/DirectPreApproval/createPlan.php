<?php
require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
/**
 *  Para usa o ambiente de testes (sandbox) descomentar a linha abaixo
 */
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$plan = new \PagSeguro\Domains\Requests\DirectPreApproval\Plan();
$plan->setRedirectURL('http://meusite.com');
$plan->setReference('http://meusite.com');
$plan->setPreApproval()->setName('Plano XXXX');
$plan->setPreApproval()->setCharge('AUTO');
$plan->setPreApproval()->setPeriod('MONTHLY');
$plan->setPreApproval()->setAmountPerPayment('100.00');
$plan->setPreApproval()->setTrialPeriodDuration(28);
$plan->setPreApproval()->setDetails('detalhes do plano');
$plan->setPreApproval()->setFinalDate('2018-09-03');
$plan->setPreApproval()->setCancelURL("http://meusite.com");
$plan->setReviewURL('http://meusite.com./review');
$plan->setMaxUses(100);
$plan->setReceiver()->withParameters('thiago.pixelab@gmail.com');

try {
    $response = $plan->register(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F')
    );

    echo '<pre>';
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}

