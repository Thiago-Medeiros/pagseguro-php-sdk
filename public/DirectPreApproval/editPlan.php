<?php

require '../bootstrap.php';

/*
 * Permite alterar o valor de cobrança do plano e das adesões vigentes do plano.
 */
$editPlan = new \PagSeguro\Domains\Requests\DirectPreApproval\EditPlan();

/**
 * Código da Recorrência
 *
 * @var string $preApprovalRequestCode
 */
$editPlan->setPreApprovalRequestCode($preApprovalRequestCode);

/**
 * Novo valor para cobrança do plano e para as adesões do plano.
 *
 * @var float $amountPerPayment
 */
$editPlan->setAmountPerPayment($amountPerPayment);

/**
 * Flag para indicar se a alteração de valor deve afetar as adesões vigentes do plano.
 *
 * @var bool $updateSubscriptions
 */
$editPlan->setUpdateSubscriptions($updateSubscriptions);

try {
    $response = $editPlan->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
