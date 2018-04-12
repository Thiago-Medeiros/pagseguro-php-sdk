<?php

require '../bootstrap.php';

/*
 * Com este serviço é possível solicitar o cancelamento de uma adesão. Note que, para o cancelamento ser efetuado,
 * é necessário que a adesão esteja ativa (status A).
 */

$status = new \PagSeguro\Domains\Requests\DirectPreApproval\Cancel();

/** @var string $preApprovalCode */
$status->setPreApprovalCode($preApprovalCode);

try {
    $response = $status->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
