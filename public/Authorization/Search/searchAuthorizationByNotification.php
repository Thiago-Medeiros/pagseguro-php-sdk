<?php

require '../../bootstrap.php';

/*
 * Esta consulta deve ser utilizada para consultar uma notificação recebida através do POST encaminhado pelo PagSeguro
 * ou através do parâmetro GET (notificationCode) encaminhado através do redirecionamento da página de autorização do
 * PagSeguro a fim de obter os dados da autorização.
 */

try {
    $response = \PagSeguro\Services\Application\Search\Notification::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /**
         * Código identificador da notificação.
         * Informa o código da notificação que você quer consultar. O código deve ser informado no caminho da URL.
         * Você deve usar o código que recebeu pelo parâmetro notificationCode no envio da notificação.
         *
         * Presença: Obrigatória.
         * Tipo: Texto.
         * Formato: Uma sequência de 39 caracteres.
         *
         * @var string $notificationCode
         */
        $notificationCode
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
