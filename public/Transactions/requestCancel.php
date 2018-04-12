<?php

require '../bootstrap.php';

/**
 * Utilizado quando o processamento do pagamento não foi finalizado e a transação encontra-se com status Aguardando
 * pagamento ou Em análise.
 */

try {
    $response = \PagSeguro\Services\Transactions\Cancel::create(
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
        $transactionCode
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
