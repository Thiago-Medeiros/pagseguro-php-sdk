<?php

require '../bootstrap.php';

/**
 * Recebendo uma notificação do PagSeguoro
 * Este script espera um POST com os parâmetros: notificationCode e notificationType=preApproval
 *
 * @see https://devpagseguro.readme.io/docs/checkout-web-notificacoes#recebendo-uma-notificacao-de-transacao
 */
try {
    if (\PagSeguro\Helpers\Xhr::hasPost()) {
        $response = \PagSeguro\Services\PreApproval\Notification::check(
            /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
            $credential
        );
    } else {
        throw new \InvalidArgumentException($_POST);
    }
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
