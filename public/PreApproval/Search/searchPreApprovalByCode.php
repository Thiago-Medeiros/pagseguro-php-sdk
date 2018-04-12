<?php

require '../../bootstrap.php';

/*
 * Esta consulta possibilita o acesso a todos os dados de uma assinatura a partir de seu código identificador.
 */

try {
    $response = \PagSeguro\Services\PreApproval\Search\Code::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /**
         * Código identificador da assinatura.
         *
         * Tipo: Texto.
         *
         * @var string $code
         */
        $code
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
