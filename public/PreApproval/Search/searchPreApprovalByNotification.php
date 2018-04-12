<?php

require '../../bootstrap.php';

/*
 * Esta consulta deve ser utilizada para consultar uma notificação recebida a fim de obter os dados da assinatura.
 */
try {
    $response = \PagSeguro\Services\PreApproval\Search\Notification::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /** @var string $notificationPreApprovalCode */
        $notificationPreApprovalCode
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
