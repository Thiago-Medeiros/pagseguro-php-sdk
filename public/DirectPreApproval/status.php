<?php

require '../bootstrap.php';

/*
 * Com este método é possível alterar o status de uma adesão, movendo-a de ativa (Status A) para suspensa (Status H)
 * e vice-versa. Uma adesão não terá cobranças durante período em que estiver suspensa.
 *
 * Se durante este tempo o plano expirar, ou o prazo da adesão encerrar, a adesão não poderá mais ser retornada para
 * Ativa.
 */

$status = new \PagSeguro\Domains\Requests\DirectPreApproval\Status();

/** @var string $preApprovalCode */
$status->setPreApprovalCode($preApprovalCode);

/**
 * Novo status da assinatura.
 *
 * @var string $preApprovalStatus
 * @options=['ACTIVE', 'SUSPENDED']
 */
$status->setStatus($preApprovalStatus);

try {
    $response = $status->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
