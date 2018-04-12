<?php

require '../bootstrap.php';

$preApproval = new \PagSeguro\Domains\Requests\PreApproval\Charge();

/**
 * Código/Identificador para fazer referência à transação em seu
 * sistema.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Livre, com limite de 200 caracteres.
 *
 * @var string $reference
 */
$preApproval->setReference($reference);

/**
 * Código da assinatura, concedida previamente, que identifica a cobrança sendo realizada.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Uma sequência de 32 caracteres.
 *
 * @var string $preApprovalCode
 */
$preApproval->setCode($preApprovalCode);

$preApproval->addItems()->withParameters(
    /**
     * Identificam os itens sendo cobrados.
     *
     * Presença: Obrigatória.
     * Tipo: Texto.
     * Formato: Livre, com limite de 100 caracteres.
     *
     * @var string $itemId
     */
    $itemId,
    /**
     * Descrevem os itens a serem cobrados.
     *
     * Presença: Obrigatória.
     * Tipo: Texto.
     * Formato: Livre, com limite de 100 caracteres.
     *
     * @var string $itemDescription
     */
    $itemDescription,
    /**
     *Representam os preços unitários de cada item sendo cobrado.
     *
     * Presença: Obrigatória.
     * Tipo: Número.
     * Formato: Decimal, com duas casas decimais separadas por ponto
     * (p.e, 1234.56). O valor deve ser maior ou igual a 0.00 e menor ou
     * igual a 9999999.00.
     *
     * @var float $itemAmount
     */
    $itemAmount,
    /**
     * Representam as quantidades de cada item sendo cobrado.
     *
     * Presença: Obrigatória.
     * Tipo: Número.
     * Formato: Livre, com limite de 100 caracteres. O valor deve ser maior
     * ou igual a 1 e menor ou igual a 999.
     *
     * @var integer $itemQuantity
     */
    $itemQuantity
);

try {
    $response = $preApproval->register(
        /** @var \PagSeguro\Domains\AccountCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
