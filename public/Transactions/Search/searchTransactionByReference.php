<?php

require '../../bootstrap.php';

/**
 * Formato: Y-m-dTH:i
 *
 * @var string $initialDate
 */
$initialDate = INITIAL_DATE;
/**
 * Formato: Y-m-dTH:i
 *
 * @var string $finalDate
 */
$finalDate = FINAL_DATE;

/** @var integer $page */
$page = PAGE;

/** @var integer $maxPerPage */
$maxPerPage = MAX_PER_PAGE;

$options = [
    'initial_date' => $initialDate,
    'final_date' => $finalDate,
    'page' => $page,
    'max_per_page' => $maxPerPage,
];

try {
    $response = \PagSeguro\Services\Transactions\Search\Reference::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /**
         * Código de referência da transação. Informa o código que foi usado para fazer referência ao pagamento.
         * Este código foi fornecido no momento do pagamento e é útil para vincular as transações do PagSeguro às vendas
         * registradas no seu sistema.
         *
         * Presença: Opcional.
         * Tipo: Texto.
         * Formato: Livre, com o limite de 200 caracteres.
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
