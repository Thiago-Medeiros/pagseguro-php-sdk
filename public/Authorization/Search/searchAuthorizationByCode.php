<?php

require '../../bootstrap.php';

/*
 * Esta consulta possibilita o acesso a todos os dados de uma autorização a partir de seu código identificador.
 */

try {
    $response = \PagSeguro\Services\Application\Search\Code::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $auth */
        $auth,
        /**
         * Código que identifica a autorização a ser consultada/cancelada.
         *
         * Presença: Obrigatória na consulta de uma autorização.
         * Tipo: Texto.
         * Formato: Uma sequência de 32 caracteres.
         *
         * @var string $code
         */
        $code
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
