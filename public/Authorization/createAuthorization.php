<?php

require_once '../bootstrap.php';

$authorization = new \PagSeguro\Domains\Requests\Authorization();
$authorization->setReference($reference);
$authorization->setRedirectUrl($redirectUrl);
$authorization->setNotificationUrl($noficationUrl);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::CREATE_CHECKOUTS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::SEARCH_TRANSACTIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::RECEIVE_TRANSACTION_NOTIFICATIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::MANAGE_PAYMENT_PRE_APPROVALS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::DIRECT_PAYMENT);

try {
    $response = $authorization->register($appCredential);
    echo "<h2>Criando requisição de authorização</h2>"
        . "<p>URL de autorização: <strong>$response</strong></p>"
        . "<p><a title=\"URL de Autorização\" href=\"$response\" target=\_blank\">"
        . "Ir para URL de authorização.</a></p>";
} catch (Exception $e) {
    die($e->getMessage());
}
