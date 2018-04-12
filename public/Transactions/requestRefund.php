<?php

require '../bootstrap.php';

/**
 * Utilizado quando a transação encontra-se com status Paga, Disponível ou Em disputa e o valor total da transação será
 * devolvido ao comprador. Lembrando que o limite para estorno de transações é de 90 dias.
 *
 * @see https://devpagseguro.readme.io/docs/checkout-web-cancelamento-e-estorno#section-estorno
 */

try {
    $response = \PagSeguro\Services\Transactions\Refund::create(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /**
         * Código que identifica a transação. Código da transação que será consultada.
         *
         * Presença: Obrigatória.
         * Tipo: Texto.
         * Formato: Uma sequência de 36 caracteres, com os hífens, ou 32 caracteres, sem os hífens.
         *
         * @var string $transactionCode
         */
        $transactionCode,
        /**
         * Se declarado e o valor for inferior ao da transação original será criado um estorno parcial
         *
         * @see https://devpagseguro.readme.io/docs/checkout-web-cancelamento-e-estorno#section-estorno-parcial
         *
         * Presença: Opcional
         *
         * @var float $value
         */
        $value
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
