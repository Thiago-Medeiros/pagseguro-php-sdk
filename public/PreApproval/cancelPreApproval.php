<?php

require '../bootstrap.php';

/*
 * É possível solicitar o cancelamento de uma assinatura fazendo uma chamada ao serviço de Cancelamento.
 * Para tanto, basta que a assinatura esteja com o status ATIVO.
 */
try {
    $response = \PagSeguro\Services\PreApproval\Cancel::create(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /**
         * Código da assinatura a ser cancelada.
         *
         * Presença: Obrigatória.
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
