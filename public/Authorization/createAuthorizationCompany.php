<?php

require '../bootstrap.php';

$authorization = new \PagSeguro\Domains\Requests\Authorization();
$authorization->setReference($reference);
$authorization->setRedirectUrl($redirectUrl);
$authorization->setNotificationUrl($notificationUrl);

/*
 * Aplication permissions
 *
 * @link https://devpagseguro.readme.io/docs/modelo-de-aplicacoes-solicitando-autorizacao
 */
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::CREATE_CHECKOUTS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::SEARCH_TRANSACTIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::RECEIVE_TRANSACTION_NOTIFICATIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::MANAGE_PAYMENT_PRE_APPROVALS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::DIRECT_PAYMENT);

$authorization->setAccount(
    /** @var \PagSeguro\Domains\Authorization\Account $account */
    $accountCOmpany
);

try {
    /** @var \PagSeguro\Domains\Requests\Authorization $authorization */
    $response = $authorization->register(
        /** @var \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);