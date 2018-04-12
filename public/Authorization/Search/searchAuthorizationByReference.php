<?php

require '../../bootstrap.php';

/*
 * Com o Serviço de Consulta de Autorizações por Código de Referência é possível consultar as autorizações recebidas
 * por suas aplicações através do código de referência.
 *
 * Para consultar autorizações por código de referência, você deve fazer uma requisição ao Serviço de Consulta de
 * Autorizações, informando o código desejado. O PagSeguro irá retornar todas as autorizações direcionadas para sua
 * conta que foram criadas com esse código.
 */

try {
    $response = \PagSeguro\Services\Application\Search\Reference::search(
        /** @var \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /**
         * Código identificador da transação.
         * Código informado na criação da transação para fazer referência ao pagamento.
         *
         * Presença: Obrigatória.
         * Tipo: Texto. Formato: Livre, com no máximo 200 caracteres.
         *
         * @var string $reference
         */
        $reference,
        $options
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
