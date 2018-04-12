<?php

require '../bootstrap.php';

/*
 * Para utilizar o modelo de aplicações do PagSeguro é necessário que você crie uma aplicação. Esta aplicação será
 * responsável por centralizar as autorizações concedidas pelos seus clientes.
 *
 * Para criar uma nova aplicação, acesse os menus Aplicações >>> Minhas aplicações ou o link
 * https://pagseguro.uol.com.br/aplicacao/listagem.jhtml e clique em “Criar nova aplicação”
 */

/**
 * Para utilizar o modelo de aplicações do PagSeguro é necessário que você crie uma aplicação. Esta aplicação será
 * responsável por centralizar as autorizações concedidas pelos seus clientes.
 *
 * @see https://devpagseguro.readme.io/docs/modelo-de-aplicacoes-criando-sua-aplicacao
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

try {
    $response = $authorization->register(
        /** @var \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
