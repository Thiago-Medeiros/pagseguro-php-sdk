<?php

require '../../bootstrap.php';

/*
 * Esta consulta possibilita o acesso a todos os dados de uma transação a partir do código identificador. Ela é
 * bastante útil quando você habilita o recebimento do código da transação no redirecionamento. Você também pode usá-la
 * para consultar mais detalhes de transações obtidas com a consulta de transações por código de referência ou
 * intervalo de datas.
 */

try {
    $response = \PagSeguro\Services\Transactions\Search\Code::search(
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
