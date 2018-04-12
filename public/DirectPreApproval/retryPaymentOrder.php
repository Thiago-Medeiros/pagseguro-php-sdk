<?php

require '../bootstrap.php';

/*
 * Para uma Ordem de Pagamento que não tenha sido cobrada com sucesso, pode-se solicitar a retentativa de cobrança
 * através deste serviço. Isto irá gerar uma nova transação para esta Ordem de Pagamento.
 *
 * A geração da cobrança não é instantânea, a chamada ao serviço irá colocar a ordem de pagamento em uma fila de
 * retentativas.
 */

$plan = new \PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder();

/**
 * Código da assinatura
 *
 * @var string $preApprovalCode
 */
$plan->setPreApprovalCode($preApprovalCode);

/**
 * Representa um código de ordem de pagamento na assinatura em questão.
 *
 * @var string $paymentOrderCode
 */
$plan->setPaymentOrderCode($paymentOrderCode);

try {
    $response = $plan->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
