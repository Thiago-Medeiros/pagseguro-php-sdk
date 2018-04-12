<?php

require '../bootstrap.php';

/**
 * Ao criar uma autorização você também pode encaminhar os dados do cliente. Assim, caso o e-mail do vendedor enviado
 * via API já esteja cadastrado na base, será sugerido o login com este e-mail. Caso ele não tenha conta, os dados
 * serão utilizados como sugestão para o cadastro e assim facilitando o cadastro do cliente.
 */
$authorization = new \PagSeguro\Domains\Requests\Authorization();

/**
 * Identificador usado para fazer referência à autorização da sua requisição.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Livre, com limite total de 20 caracteres.
 *
 * @var string $reference
 */
$authorization->setReference($reference);

/**
 * URL para onde o comprador será redirecionado após a finalização do fluxo de autorização. Caso seja informado na
 * chamada, será utilizada esta ao invés da URL informada no cadastro da aplicação.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres
 *
 * @var string $redirectUrl
 */
$authorization->setRedirectUrl($redirectUrl);

/**
 * URL para onde a notificação será direcionada após a finalização do fluxo de autorização. Caso seja informado na
 * chamada, será utilizada esta ao invés da URL informada no cadastro da aplicação.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres.
 *
 * @var string $notificationUrl
 */
$authorization->setNotificationUrl($notificationUrl);

/**
 * Permissões a serem autorizadas
 * Presença: Obrigatória.
 * Tipo: Texto.
 *
 * Valores aceitos:
 * CREATE_CHECKOUTS - A aplicação poderá direcionar compradores para o PagSeguro e intermediar pagamentos
 * RECEIVE_TRANSACTION_NOTIFICATIONS - A aplicação poderá receber e consultar notificações das transações que ela
 * intermediou SEARCH_TRANSACTIONS - A aplicação poderá consultar as transações que ela intermediou
 * MANAGE_PAYMENT_PRE_APPROVALS - A aplicação poderá gerenciar e utilizar pré-aprovações de pagamentos
 * DIRECT_PAYMENT - A aplicação poderá gerenciar pagamentos via checkout transparente.
 */
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::CREATE_CHECKOUTS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::SEARCH_TRANSACTIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::RECEIVE_TRANSACTION_NOTIFICATIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::MANAGE_PAYMENT_PRE_APPROVALS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::DIRECT_PAYMENT);

/**
 * Agrupa os dados de vendedor.
 *
 * @var \PagSeguro\Domains\Authorization\Seller $authorizationSeller
 */
$authorizationSeller = new \PagSeguro\Domains\Authorization\Seller(
    'John Doe',
    new DateTime('10-10-1990'),
    /** @var \PagSeguro\Domains\Document $document */
    $document,
    new \PagSeguro\Domains\Phone('13', '13141516', \PagSeguro\Enum\Authorization\PhoneEnum::MOBILE),
    /** @var \PagSeguro\Domains\Address $address */
    $address
);

/** @var \PagSeguro\Domains\Authorization\Account $accountSeller */
$accountSeller = new \PagSeguro\Domains\Authorization\Account('john123@doe.com', $authorizationSeller);

/** @var \PagSeguro\Domains\Requests\Authorization $authorization */
$authorization->setAccount(
    $accountSeller
);

try {
    $response = $authorization->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
